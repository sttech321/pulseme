<?php

namespace App\Controllers;

use App\Models\ReviewModal;
use CodeIgniter\Controller;

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
            'companyID' => $this->request->getPost('campaign'),
            'reviewText' => $this->request->getPost('comment'),
            'city' => $this->request->getPost('City'),
            'state' => $this->request->getPost('State'),
            'zipcode' => $this->request->getPost('Zipcode'),
        ];
        

        // Insert data into database
        $campaignModel->insert($data);

        // Redirect to a success page or display success message
        return redirect()->to('/analyze/reviews')->with('success', 'Review saved successfully.');

    }

    public function submitRatings()
    {
        // Get the raw POST data
        $jsonData = $this->request->getRawInput();
    
        // Decode JSON data to an array
        $ratingsData = json_decode($jsonData['ratings'], true);
    
        // Convert array to JSON format for database storage
        $jsonRatings = json_encode($ratingsData);
    
        // Save to the database using your ReviewModal model
        $reviewModel = new ReviewModal();
    
        $data = [
            'ratings' => $jsonRatings,
        ];
    
        // Insert data into the database
        $reviewModel->insert($data);
    
        // Redirect to the reviews page with a success message
        return redirect()->to('/application/pulsecheck//(:num)#rating.63')->with('success', 'Ratings saved successfully.');
    }
    
    
}
