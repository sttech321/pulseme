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

    public function social_review()
    {
        $model = new ReviewModal();
        $model1 = new CampaignModel();
        $data['reviews'] = $model->getReviewsByType('google'); 
        $data['reviewss'] = $model1->findAll();
        // Load the view with data
        return view('social_review', $data);
    }

    public function insert()
    {
        // Load necessary helpers and libraries
        helper(['form']);

        // Validation rules
        $rules = [
            'source' => 'required',
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
            'reviewType' => $this->request->getPost('source'),
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
