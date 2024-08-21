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

    public function thankyou(){
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
        $status = $this->request->getPost('status');

        // Preparing data for insertion
        $data = [
            'createdOn' => date('Y-m-d H:i:s'),
            'updatedOn' => date('Y-m-d H:i:s'),
            'campaignID' => $campaignId,
            'reviewText'=> $feedback,
            'reviewType'=> $review_type,
            'sentiment' => $sentiment,
            'reviewratings' => json_encode([
                'feedback' => $feedback,
                'Name' => $customer_name,
                'customer_email' => $customer_email,
                'status'=> $status,
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

    public function reviews()
    {  
        $reviewModel = new ReviewModal();
        $perPage = 10;
        $page = $this->request->getVar('page') ?: 1;
        $offset = ($page - 1) * $perPage;         
        $data['reviews'] = $reviewModel->get_reviews_with_campaign($perPage, $offset);      
        $totalReviews = $reviewModel->get_total_reviews_count();
        $pager = \Config\Services::pager();
        $data['pager'] = $pager->makeLinks($page, $perPage, $totalReviews);
        $data['campaigns'] = $reviewModel->get_campaign_name();   
        $data['enumValues'] = $reviewModel->getEnumValues();

         return view('reviews', $data);
    }

    public function getReviewsByCampaign()
    {
        if ($this->request->isAJAX()) {
            $campaignID = $this->request->getPost('campaign_id');
            $approve = $this->request->getPost('approved');
            $limit = intval($this->request->getPost('limit'))?: 10; 
            $page = intval($this->request->getPost('page')) ?: 1;        
            $noText = $this->request->getPost('noText');
            $archive = $this->request->getPost('archive');
            $sentiment = $this->request->getPost('sentiment');
            $fromdate = $this->request->getPost('fromdate');
            $todate = $this->request->getPost('todate');
            $reviewModel = new ReviewModal();
            $builder = $reviewModel->builder();
            $builder->select('reviews.*, campaign.name, campaign.department, campaign.employeeId, campaign.ID AS campaignnameID');
            $builder->join('campaign', 'reviews.campaignID = campaign.ID', 'left');
            if (!empty($campaignID)) {
                $builder->where('reviews.campaignID', $campaignID);
            }
            if (!empty($sentiment)) {
                $builder->where('reviews.sentiment', $sentiment);
            }
            if (!empty($archive)) {
                $builder->where('reviews.isArchive', $archive);
            }
            if (!empty($approve)) {
                $builder->where('reviews.isApproved', $approve);
            }
            if (!empty($fromdate) && !empty($todate)) {
                $builder->where('reviews.createdOn >=', $fromdate);
                $builder->where('reviews.createdOn <=', $todate);
            }
            if ($noText == 1) {
                $builder->where('TRIM(reviews.reviewText) =', '');
            } elseif ($noText == 0) {
                $builder->where('TRIM(reviews.reviewText) !=', '');
            }           
            $offset = ($page - 1) * $limit;
            $builder->limit($limit, $offset);
            $totalRecordsBuilder = clone $builder;
            $totalRecords = $totalRecordsBuilder->countAllResults(false);  
            $reviews = $builder->get()->getResultArray();
            $campaigns = $reviewModel->get_campaign_name();
            $response = [
                'reviews' => $reviews,
                'campaigns' => $campaigns,
                'pagination' => [
                    'total' => $totalRecords,
                    'page' => $page,
                    'limit' => $limit,
                    'total_pages' => ceil($totalRecords / $limit)
                ]
            ];
            $this->response->setHeader('Content-Type', 'application/json');
            return $this->response->setJSON($response);
        }  
    }
    
    public function approveReview()
    {
        $id = $this->request->getPost('ID');
        $approved = $this->request->getPost('approved');
        $archive = $this->request->getPost('archive');

        $reviewModel = new ReviewModal();
       
        $review = $reviewModel->get_reviews($id);
        
        if ($review) {
            $id = $review['ID'];
            // Get the current isApproved value
            $currentApprovedStatus = $review['isApproved'];
            $currentArchiveStatus = $review['isArchive'];
            // Determine the new approved status
            if ($approved !== null) {
                $newApprovedStatus = $approved === '1' ? '1' : '0'; 
            } else {
                $newApprovedStatus = $currentApprovedStatus;
            }

            // Determine the new archive status if provided
            if ($archive !== null) {
                $newArchiveStatus = $archive === '1' ? '1' : '0'; 
            } else {
                $newArchiveStatus = $currentArchiveStatus;
            }
            // Update the review status
            $reviewModel->update($id, ['isApproved' => $newApprovedStatus,'isArchive' => $newArchiveStatus]);

            return $this->response->setJSON([
                'id'=>$id,
                'status' => 'success',
                'newApprovedStatus' => $newApprovedStatus,
                'newArchiveStatus' => $newArchiveStatus
            ]);
    }
        return $this->response->setJSON(['status' => 'error', 'message' => 'Review not found']);
    }

    public function update($id)
    {
        // Retrieve posted data
        $campaignid = $this->request->getPost('campaign');
        $customer_name = $this->request->getPost('customer_name');
        $state = $this->request->getPost('state');
        $city = $this->request->getPost('city');
        $zipcode = $this->request->getPost('zipcode');
    
        // Load the ReviewModel
        $reviewModel = new ReviewModal();
          
        $existingRecord = $reviewModel->find($id);
    
        if ($existingRecord) {
           
            $reviewratings = json_decode($existingRecord['reviewratings'], true);
    
            // Update the fields within the JSON data
            $reviewratings['Name'] = $customer_name;
            $reviewratings['State'] = $state;
            $reviewratings['City'] = $city;
            $reviewratings['Zipcode'] = $zipcode;
    
            // Encode the updated JSON data
            $updatedReviewRatings = json_encode($reviewratings);
    
            // Prepare the data for update
            $data = [
                'campaignID' => $campaignid,  
                'reviewratings' => $updatedReviewRatings 
            ];
            $reviewModel->update($id, $data);
            return redirect()->to('/analyze/reviews/'); 
        } else {           
            return redirect()->to('/error'); 
        }
    }
    
    public function contact_templates()
    {
        $contactCardModel = new ContactcardModal();
        $data['contactcard'] = $contactCardModel->first();
        return view('contact-card-tab/contact_templates',$data);
    }
    
}