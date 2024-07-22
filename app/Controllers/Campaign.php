<?php
namespace App\Controllers;
use App\Models\CampaignModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use CodeIgniter\Email\Email;


class Campaign extends BaseController {

    public function __construct() {
        // Load session service
        $this->session = \Config\Services::session();

    }

    public function index()
    {
        $model = new CampaignModel();
        $data['campaigns'] = $model->findAll();
        return view('dispatchTab/dispatchCampaigns',$data);
    }

    public function reviews()
    {
        // Ensure the session is started (if not started elsewhere)
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        // Load CampaignModel and fetch reviews
        $model = new CampaignModel();
        $data['reviews'] = $model->findAll(); // Fetch all reviews from the database
    
        // Prepare data for the view
        $data['title'] = 'Reviews Page';
    
        // Load the view with data
        return view('reviews', $data);
    }
    

    public function create() {
        // Load necessary helpers and libraries
        helper(['form']);
        $rules = [
            'campaignImage' => 'uploaded[campaignImage]|max_size[campaignImage,1024]|is_image[campaignImage]',
            'CampaignName' => 'required',
            'campaignDescription' => 'required',
            'campaignDepartment' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/settings/dispatch/campaigns')->withInput()->with('validation', $this->validator);
        }
        // Handle image upload
        $campaignImage = $this->request->getFile('campaignImage');
        $newName = $campaignImage->getRandomName();
        $uploadPath = '/image/campaign/';

        // Move uploaded file to designated directory
        if ($campaignImage->isValid() && !$campaignImage->hasMoved()) {
           // $campaignImage->move($uploadPath, $newName);
            $campaignImage->move(ROOTPATH . 'public/image/campaign', $newName);
        } else {
            // Handle upload failure here
            return redirect()->back()->with('error', 'Failed to upload image.');
        }
        // Save campaign data to database
        $campaignModel = new CampaignModel(); // Replace with your actual model name
        $data = [
            'ID'    => null,
            'name' => $this->request->getPost('CampaignName'),
            'description' => $this->request->getPost('campaignDescription'),
            'department' => $this->request->getPost('campaignDepartment'),
            'license' => $this->request->getPost('license'),
            'employeeId' => $this->request->getPost('employeeId'),
            'email' => $this->request->getPost('email'),
            'image' => $uploadPath . $newName // Store image path in database
        ];
        // Insert data into database
        $campaignModel->insert($data);
        // Redirect to a success page or display success message
        return redirect()->to('/settings/dispatch/campaigns')->with('success', 'Campaign saved successfully.');
    }

    public function delete($id)
    {
        $model = new CampaignModel();
        $model->delete($id);
        return redirect()->to('/settings/dispatch/campaigns')->with('success', 'Campaign deleted successfully.');
    }

    public function update($id)
    {
        helper(['form']);
        
        // Validation rules
        $rules = [
            'CampaignName' => 'required',
            'campaignDescription' => 'required',
            'campaignDepartment' => 'required',
        ];

        // Handle file upload
        $campaignImage = $this->request->getFile('campaignImage');
        if ($campaignImage && $campaignImage->isValid()) {
            $rules['campaignImage'] = 'uploaded[campaignImage]|max_size[campaignImage,1024]|is_image[campaignImage]';
        }

        // Validate form input
        if (!$this->validate($rules)) {
            return redirect()->to('/settings/dispatch/campaigns')->withInput()->with('validation', $this->validator);
        }

        // Move uploaded file to designated directory
        if ($campaignImage && $campaignImage->isValid() && !$campaignImage->hasMoved()) {
            $newName = $campaignImage->getRandomName();
            $uploadPath = '/image/campaign/';
            $campaignImage->move(ROOTPATH . 'public/image/campaign', $newName);
            $imagePath = $uploadPath . $newName;
        } else {
            $imagePath = ''; // Handle case where no new image is uploaded
        }

        // Update campaign data in database
        $model = new CampaignModel();
        $data = [
            'name' => $this->request->getPost('CampaignName'),
            'description' => $this->request->getPost('campaignDescription'),
            'department' => $this->request->getPost('campaignDepartment'),
            'license' => $this->request->getPost('license'),
            'employeeId' => $this->request->getPost('employeeId'),
            'email' => $this->request->getPost('email'),
        ];

        // Include image path in data if uploaded
        if (!empty($imagePath)) {
            $data['image'] = $imagePath;
        }
      
        // Perform the update
        $model->update($id,$data);

        // Redirect with success message
        return redirect()->to('/settings/dispatch/campaigns')->with('success', 'Campaign updated successfully.');
    }


    public function technician_bio($id) {
        $model = new CampaignModel();
        $data['technician'] = $model->find($id);
        // print_r($data['technician']);
        return view('/dispatchTab/Technician_bio', $data);
    }
    
    public function pulse_check($empid)
    {
        $model = new CampaignModel();
        $data['technician'] = $model->where('employeeId', $empid)->first();

        if ($data['technician']) {
            return view('dispatchTab/pulse_check', $data);
        } else {
            // Handle case where technician is not found
            return redirect()->to(base_url('/some-error-page'))->with('error', 'Technician not found');
        }
    }

}