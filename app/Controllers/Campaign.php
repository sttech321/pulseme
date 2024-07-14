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
        // $db = db_connect();
        // $this->userModel = new CampaignModel($db);
    }

    public function create() {
        // Load necessary helpers and libraries
        helper(['form']);
        $rules = [
            'campaignImage' => 'uploaded[campaignImage]|max_size[campaignImage,1024]|is_image[campaignImage]',
            'CampaignName' => 'required',
            'campaignDescription' => 'required',
            'campaignDepartment' => 'required',
            'license' => 'required',
            'employeeId' => 'required',
            'email' => 'required|valid_email'
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
    public function add() {
        echo view('add');
    }

    public function save() {
        $first_name = $this->request->getPost('txtLastName');
        $last_name  = $this->request->getPost('txtLastName');
        $email      = $this->request->getPost('txtEmail');
    
        $data = [
            'first_name'        => $first_name,
            'last_name'     => $last_name,
            'email'         => $email,
        ];

        $result = $this->userModel->add($data);
        if($result) {
            echo "New user is registered successfully.";
        } else {
            echo "Something went wrong";
        }
    }
}