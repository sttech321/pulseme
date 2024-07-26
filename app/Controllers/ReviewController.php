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
            $campaignID = $this->request->getPost('campaign_id');
            $page = $this->request->getPost('page') ?? 1; 
        $limit = $this->request->getPost('limit') ?? 1; 
            // Load CampaignModel and fetch all campaigns
            $campaignModel = new CampaignModel();
            $campaigns = $campaignModel->findAll();
    
            // Map campaign IDs to campaign names
            $campaignNames = [];
            foreach ($campaigns as $campaign) {
                $campaignNames[$campaign['ID']] = [
                    'department' => $campaign['department'],
                    'name' => $campaign['name'],
                ];
            }
    
            // Load ReviewModel
            $reviewModel = new ReviewModal();
            $offset = ($page - 1) * $limit;
            // Fetch reviews based on the campaign ID
            $reviews = $reviewModel->where('campaignID', $campaignID)->findAll($limit, $offset);
    
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
            $totalReviews = $reviewModel->where('campaignID', $campaignID)->countAllResults();
            // Prepare the JSON response
            $response = [
                'success' => true,
                'reviews' => $reviews,
                'message' => !empty($reviews) ? 'Reviews found.' : 'No reviews found for this campaign.',
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
        
        // Print the data for debugging
        // echo "<pre>";
        // print_r([
        //     'ID' => $id,
        //     'approved' => $approved
        // ]);
        // echo "</pre>";
    
        // Optional: Stop further execution to see the output
        //die();
        $reviewModel = new ReviewModal();
        // Fetch the current review
        $review = $reviewModel->find($id);
        
        //print_r($review['isApproved']);
        // die;
        if ($review) {
            // Get the current isApproved value
            $currentApprovedStatus = $review['isApproved'];
    
            // Determine the new approved status
            $newApprovedStatus = $currentApprovedStatus === '0' ? '1' : '0';
    
            // Update the review status
            $reviewModel->update($id, ['isApproved' => $newApprovedStatus]);
    
            return $this->response->setJSON([
                'status' => 'success',
                'newStatus' => $newApprovedStatus
            ]);
        }
    
        return $this->response->setJSON(['status' => 'error', 'message' => 'Review not found']);
    }
    
    
    
    

    

    
}
