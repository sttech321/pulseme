<?php
namespace App\Controllers;

use App\Models\GooglereviewModal;
use CodeIgniter\HTTP\CURLRequest;

class Review extends BaseController
{
    public function fetchAndStore()
    {
        $client = \Config\Services::curlrequest();

        // die('555555555555');
        $response = $client->get(''); // Replace with your actual JSON file URL
        $reviews = json_decode($response->getBody(), true);

        $reviewModel = new GooglereviewModal();
        foreach ($reviews as $review) {
            $reviewModel->insert($review);
        }

        return "Reviews have been successfully fetched and stored in the database.";
        // return view('social_review');
    }
}
