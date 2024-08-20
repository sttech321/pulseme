<?php

namespace App\Controllers;

use App\Models\CampaignModel;
use App\Models\ContactcardModal;
use App\Models\ReviewModal;
use CodeIgniter\Controller;
use CodeIgniter\Pagination\Pager;


class ReviewController extends BaseController
{
    public function __construct()
    {
        // Load session service
        $this->session = \Config\Services::session();
    }

    public function thankyou()
    {
        return view('thankyou');
    }

    public function pulse_check($empid)
    {
        $model = new CampaignModel();
        $data['technician'] = $model->where('employeeId', $empid)->first();

        if ($data['technician']) {
            return view('dispatchTab/pulse_check', $data);
        } else {
        }
    }

    public function submitReview()
    {
        // Load necessary helpers and libraries
        helper(['form', 'url']);

        // Validation rules
        $rules = [
            'feedback' => 'required',
            'rating1_value' => 'required',
            'rating1_text' => 'required',
            'rating2_value' => 'required',
            'rating2_text' => 'required',
            'rating3_value' => 'required',
            'rating3_text' => 'required',
        ];

        // Validate form input
        if (!$this->validate($rules)) {
            // Redirect back with validation errors and input data
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $reviewModel = new ReviewModal();

        // Collecting data from the request
        $feedback = $this->request->getPost('feedback');
        $rating1_value = $this->request->getPost('rating1_value');
        $rating1_text = $this->request->getPost('rating1_text');
        $rating2_value = $this->request->getPost('rating2_value');
        $rating2_text = $this->request->getPost('rating2_text');
        $rating3_value = $this->request->getPost('rating3_value');
        $rating3_text = $this->request->getPost('rating3_text');
        $campaignId = $this->request->getPost('ID');
        $customer_name = $this->request->getPost('customer_name');
        $customer_email = $this->request->getPost('customer_email');
        $city = $this->request->getPost('state');
        $state = $this->request->getPost('city');
        $zipcode = $this->request->getPost('zipcode');
        $sentiment = $this->request->getPost('result_value');
        $review_type = $this->request->getPost('reviewType');
        // $contactcard = $this->request->getPost('contactcard');

        // Preparing data for insertion
        $data = [
            // 'contactcard' => $contactcard,
            'createdOn' => date('Y-m-d H:i:s'),
            'updatedOn' => date('Y-m-d H:i:s'),
            'campaignID' => $campaignId,
            'reviewText' => $feedback,
            'reviewType' => $review_type,
            'sentiment' => $sentiment,
            'reviewratings' => json_encode([
                'feedback' => $feedback,
                'Name' => $customer_name,
                'customer_email' => $customer_email,
                'State' => $state,
                'City' => $city,
                'Zipcode' => $zipcode,
                'rate1' => ['text' => $rating1_text, 'value' => $rating1_value],
                'rate2' => ['text' => $rating2_text, 'value' => $rating2_value],
                'rate3' => ['text' => $rating3_text, 'value' => $rating3_value],
                'sentiment' => $sentiment,
                'review_type' => $review_type
            ]),
        ];

        $reviewModel->insert($data);

        // Send contact card email
        $this->sendContactCard($customer_email);
        // Display a thank you message or redirect as needed
        return redirect()->to('/')->with('message', 'Thank you for your feedback. Your feedback is important to us.');
    }

    private function sendContactCard($customer_email)
    {
        $contactCardModel = new ContactcardModal();
        $data['contactcard'] = $contactCardModel->first();

        $emailService = \Config\Services::email();

        // Building the email message
        $message = view('contact-card-tab/contact_templates', ['contactcard' => $data['contactcard']]);

        $emailService->initialize([
            'protocol' => 'smtp',
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPPort' => intval($_ENV['SMTP_PORT']),
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            'mailType' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ]);

        $emailService->setFrom($_ENV['SMTP_USER'], 'summitRA');
        $emailService->setTo($customer_email);
        $emailService->setSubject('Contact-card');
        $emailService->setMessage($message);

        if (!$emailService->send()) {
            log_message('error', $emailService->printDebugger(['headers', 'subject', 'body']));
        }
    }

    public function social_review()
    {
        $model = new ReviewModal();
        $model1 = new CampaignModel();
        $data['reviews'] = $model->getReviewsByType('google');
        $data['reviewss'] = $model1->findAll();
        // Load the view with data
        return view('social_review', $data);
    }

    public function google_review_credit($id)
    {
        if ($this->request->isAJAX()) {
            $model = new ReviewModal();

            // Retrieve the campaign name from the request
            $request = $this->request->getJSON();
            $campaignName = $request->campaign;

            $data = [
                'creditTo' => $campaignName,
            ];

            // Update the database with the new value
            if ($model->update($id, $data)) {
                return $this->response->setJSON(['successs' => true]);
            } else {
                return $this->response->setJSON(['success' => false, 'message' => 'Failed to update campaign.']);
            }
        }

        // If not an AJAX request, redirect to another page or show an error
        return redirect()->to('/analyze/reviews/social-reviews')->with('error', 'Invalid request.');
    }

    public function insert()
    {
        // Load necessary helpers and libraries
        helper(['form']);
        // Validation rules
        $rules = [
            'reviewType' => 'required',
            'sentiment' => 'required',
            'campaign' => 'required',
            'comment' => 'required',
            'City' => 'required',
            'State' => 'required',
            'Zipcode' => 'required',
        ];

        // Validate form input
        if (!$this->validate($rules)) {
            return redirect()->to('/analyze/reviews')->withInput()->with('validation', $this->validator);
        }

        // Save campaign data to database
        $reviewModel = new ReviewModal(); // Ensure this model is correctly defined and used

        // Prepare data to insert
        $reviewinfo = [
            'Name' => $this->request->getPost('Name'),
            'City' => $this->request->getPost('City'),
            'State' => $this->request->getPost('State'),
            'Zipcode' => $this->request->getPost('Zipcode')
        ];

        // Convert the array to a JSON string
        $reviewinfoJson = json_encode($reviewinfo); // Corrected to encode to JSON

        $data = [
            'reviewType' => $this->request->getPost('reviewType'),
            'createdOn' => $this->request->getPost('date'),
            'sentiment' => $this->request->getPost('sentiment'),
            'campaignID' => $this->request->getPost('campaign'),
            'reviewText' => $this->request->getPost('comment'),
            'reviewratings' => $reviewinfoJson,  // Store the JSON string
            'createdOn' => date('Y-m-d H:i:s'),
            'updatedOn' => date('Y-m-d H:i:s'),
        ];

        // Insert data into database
        if ($reviewModel->insert($data) === false) {
            // Handle insertion errors
            return redirect()->to('/analyze/reviews')->with('error', 'Failed to save review.');
        }
        // Redirect to a success page or display success message
        return redirect()->to('/analyze/reviews')->with('success', 'Review saved successfully.');
    }

    public function update($id)
    {
        helper(['form']);

        $model = new ReviewModal();

        $reviewinfo = [
            'Name' => $this->request->getPost('customer_name'),
            'City' => $this->request->getPost('city'),
            'State' => $this->request->getPost('state'),
            'Zipcode' => $this->request->getPost('zipcode')
        ];

        // Convert the array to a JSON string
        $reviewinfoJson = json_encode($reviewinfo); // Corrected to encode to JSON
        // Update campaign data in database

        $data = [
            'campaignID' => $this->request->getPost('campaign'),
            'reviewerInfo' => $reviewinfoJson,
            'createdOn' => date('Y-m-d H:i:s'),
            'updatedOn' => date('Y-m-d H:i:s'),
        ];

        // Perform the update
        $model->update($id, $data);

        // Redirect with success message
        return redirect()->to('/analyze/reviews')->with('success', 'Campaign updated successfully.');
    }

    public function reviews()
    {
        // Ensure the session is started (if not started elsewhere)
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        // Load CampaignModel and fetch all campaigns
        $campaignModel = new CampaignModel();
        $campaigns = $campaignModel->findAll(); // Fetch all campaigns from the database

        // Map campaign IDs to campaign names
        $campaignNames = [];
        foreach ($campaigns as $campaign) {
            $campaignNames[$campaign['ID']] = [
                'department' => $campaign['department'],
                'name' => $campaign['name'],
            ];
        }

        $reviewModel = new ReviewModal();
        if (!empty($campaignID)) {
            $reviews = $reviewModel->where('campaignID', $campaignID)->paginate(2, 'reviews');
        } else {
            $reviews = $reviewModel->paginate(2, 'reviews'); // No filter, get all reviews
        } // Fetch 10 reviews per page
        $pager = $reviewModel->pager;

        foreach ($reviews as &$review) {
            $ID = $review['ID'];
            $campaignID = $review['campaignID'];
            if (isset($campaignNames[$campaignID])) {
                $review['campaignDepartment'] = $campaignNames[$campaignID]['department'];
                $review['campaignName'] = $campaignNames[$campaignID]['name'];
            } else {
                $review['campaignDepartment'] = 'not known';
                $review['campaignName'] = 'not known';
            }
        }

        $data['enumValues'] = $reviewModel->getEnumValues();
        // Prepare data for view
        $data['fetchreview'] = $reviews;
        $data['campaigns'] = $campaigns;
        $data['pager'] = $pager;

        // Load the view with data
        return view('reviews', $data);
    }

    public function getReviewsByCampaign()
    {
        if ($this->request->isAJAX()) {
            // Retrieve and sanitize POST data
            $campaignID = $this->request->getPost('campaign_id');
            $includeAllReviews = $this->request->getPost('include_all_reviews');
            $page = intval($this->request->getPost('page'));
            $limit = intval($this->request->getPost('limit'));
            $noText = $this->request->getPost('noText');
            $archive = $this->request->getPost('archive');
            $sentiment = $this->request->getPost('sentiment');
            $fromdate = $this->request->getPost('fromdate');
            $todate = $this->request->getPost('todate');
            if ($limit <= 0) {
                $limit = 10; // Ensure limit is always positive
            }

            // Load models
            $campaignModel = new CampaignModel();
            $reviewModel = new ReviewModal();
            // Get all campaigns for mapping campaign IDs to names
            $campaigns = $campaignModel->findAll();
            $campaignNames = [];
            foreach ($campaigns as $campaign) {
                $campaignNames[$campaign['ID']] = [
                    'department' => $campaign['department'],
                    'name' => $campaign['name'],
                ];
            }

            // Calculate offset for pagination
            $offset = ($page - 1) * $limit;

            // Prepare query to fetch reviews
            $reviewsQuery = $reviewModel;

            if (!empty($campaignID)) {
                $reviewsQuery = $reviewsQuery->where('campaignID', $campaignID);
            }

            if (!$includeAllReviews) {
                $approved = $this->request->getPost('approved');
                $unapproved = $this->request->getPost('unapproved');
                if ($approved) {
                    $reviewsQuery = $reviewsQuery->where('isApproved', '1');
                }
                if ($unapproved) {
                    $reviewsQuery = $reviewsQuery->where('isApproved', '0');
                }
            }

            if ($noText) {
                $reviewsQuery = $reviewsQuery->groupStart()
                    ->where('reviewText', '')
                    ->orWhere('reviewText IS NULL')
                    ->groupEnd();
            }

            if ($archive) {
                $reviewsQuery = $reviewsQuery->where('isArchive', $archive); // Assuming '1' is the value for archived
            }
            if ($sentiment) {
                $reviewsQuery = $reviewsQuery->where('sentiment', $sentiment);
            }
            if ($fromdate && $todate) {
                $reviewsQuery = $reviewsQuery->where('createdOn >=', $fromdate)
                    ->where('createdOn <=', $todate);
            }
            // Fetch reviews with pagination
            $reviews = $reviewsQuery->findAll($limit, $offset);
            //  var_dump($reviews);
            //  die;
            // Attach campaign names and departments to reviews
            foreach ($reviews as &$review) {
                $campaignID = $review['campaignID'];
                if (isset($campaignNames[$campaignID])) {
                    $review['campaignDepartment'] = $campaignNames[$campaignID]['department'];
                    $review['campaignName'] = $campaignNames[$campaignID]['name'];
                } else {
                    $review['campaignDepartment'] = 'not known';
                    $review['campaignName'] = 'not known';
                }
            }

            // Calculate total reviews for pagination
            $totalReviewsQuery = clone $reviewsQuery; // Clone to avoid modifying the original query
            $totalReviews = $totalReviewsQuery->countAllResults();

            // Prepare the JSON response
            $response = [
                'success' => true,
                'reviews' => $reviews,
                'message' => !empty($reviews) ? 'Reviews found.' : 'No reviews found.',
                'pagination' => [
                    'total' => $totalReviews,
                    'page' => $page,
                    'limit' => $limit,
                    'total_pages' => ceil($totalReviews / $limit)
                ]
            ];

            // Set the content type to JSON and output the JSON response
            $this->response->setHeader('Content-Type', 'application/json');
            return $this->response->setBody(json_encode($response));
        }

        return $this->response->setStatusCode(400, 'Bad Request');
    }

    public function approveReview()
    {
        // Retrieve the data sent from the front end
        $id = $this->request->getPost('ID');
        $approved = $this->request->getPost('approved');
        $archive = $this->request->getPost('archive');

        $reviewModel = new ReviewModal();
        // Fetch the current review
        $review = $reviewModel->find($id);

        if ($review) {
            $id = $review['ID'];
            // Get the current isApproved value
            $currentApprovedStatus = $review['isApproved'];
            $currentArchiveStatus = $review['isArchive'];
            // Determine the new approved status
            if ($approved !== null) {
                $newApprovedStatus = $approved === '1' ? '1' : '0'; // Only update if provided
            } else {
                $newApprovedStatus = $currentApprovedStatus; // Keep the current value if not provided
            }

            // Determine the new archive status if provided
            if ($archive !== null) {
                $newArchiveStatus = $archive === '1' ? '1' : '0'; // Only update if provided
            } else {
                $newArchiveStatus = $currentArchiveStatus; // Keep the current value if not provided
            }
            // Update the review status
            $reviewModel->update($id, ['isApproved' => $newApprovedStatus, 'isArchive' => $newArchiveStatus]);

            return $this->response->setJSON([
                'id' => $id,
                'status' => 'success',
                'newApprovedStatus' => $newApprovedStatus,
                'newArchiveStatus' => $newArchiveStatus
            ]);
        }

        return $this->response->setJSON(['status' => 'error', 'message' => 'Review not found']);
    }

    public function contact_templates()
    {
        $contactCardModel = new ContactcardModal();
        $data['contactcard'] = $contactCardModel->first();
        return view('contact-card-tab/contact_templates', $data);
    }
}
