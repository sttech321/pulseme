<?php

namespace App\Controllers;
use App\Models\CampaignModel;
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

    public function insert()
    {
        // Load necessary helpers and libraries
        helper(['form']);

        // Validation rules
        $rules = [
            'source' => 'required',
            // 'createdOn' => 'required',
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
        $campaignModel = new ReviewModal();

        // Prepare data to insert
        $data = [
            'reviewType' => $this->request->getPost('source'),
            'createdOn' => $this->request->getPost('date'),
            'sentiment' => $this->request->getPost('sentiment'),
            'campaignID' => $this->request->getPost('campaign'),
            'reviewText' => $this->request->getPost('comment'),
            'reviewerInfo' => json_encode([
            'city' => $this->request->getPost('City'),
            'state' => $this->request->getPost('State'),
            'zipcode' => $this->request->getPost('Zipcode'),
            ])
        ];
        

        // Insert data into database
        $campaignModel->insert($data);

        // Redirect to a success page or display success message
        return redirect()->to('/analyze/reviews')->with('success', 'Review saved successfully.');

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
            //print_r($ID);            
            $campaignID = $review['campaignID'];
            if (isset($campaignNames[$campaignID])) {
                $review['campaignDepartment'] = $campaignNames[$campaignID]['department'];
                $review['campaignName'] = $campaignNames[$campaignID]['name'];
            } else {
                $review['campaignDepartment'] = 'not known';
                $review['campaignName'] = 'not known';
            }

        
        }
         
      
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
            // var_dump($reviewModel);
            // die;
            
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
            if($sentiment){
                $reviewsQuery = $reviewsQuery->where('sentiment',$sentiment);
            }
            if($fromdate && $todate){
                $reviewsQuery = $reviewsQuery->where('createdOn >=',$fromdate)
                                             ->where('createdOn <=',$todate);   
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
            // Print the data for debugging
            // echo "<pre>";
            // print_r([
            //     'ID' => $id,
            //     'approved' => $approved,
            //     'arhive' => $archive
            // ]);
            // echo "</pre>";
        
            // Optional: Stop further execution to see the output
           // die();
            $reviewModel = new ReviewModal();
            // Fetch the current review
            $review = $reviewModel->find($id);
            
            //print_r($review['isApproved']);
            // die;
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
    
    
    
    

    

    
}
