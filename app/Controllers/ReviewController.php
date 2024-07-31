<?php

namespace App\Controllers;

use App\Models\CampaignModel;
use App\Models\ReviewModal;
use CodeIgniter\Controller;

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
            // Handle case where technician is not found
            // return redirect()->to(base_url('/some-error-page'))->with('error', 'Technician not found');
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
    
        // Preparing data for insertion
        $data = [
            'reviewratings' => json_encode([
                'feedback' => $feedback,
                'rate1' => ['text' => $rating1_text, 'value' => $rating1_value],
                'rate2' => ['text' => $rating2_text, 'value' => $rating2_value],
                'rate3' => ['text' => $rating3_text, 'value' => $rating3_value],
            ]),
        ];
    
        // Insert data into the database
        $reviewModel->insert($data); 
        // Display a thank you message or redirect as needed
        return redirect()->to('/thankyou')->with('message', 'Thank you for your feedback. Your feedback is important to us.');
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
            'companyID' => $this->request->getPost('campaign'),
            'reviewText' => $this->request->getPost('comment'),
            'reviewerInfo' => $reviewinfoJson,  // Store the JSON string
        ];

        // Insert data into database
        if ($reviewModel->insert($data) === false) {
            // Handle insertion errors
            return redirect()->to('/analyze/reviews')->with('error', 'Failed to save review.');
        }

        // Redirect to a success page or display success message
        return redirect()->to('/analyze/reviews')->with('success', 'Review saved successfully.');
    }



}



