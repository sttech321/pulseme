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
            'employeeId' => 'required',
            'license' => 'required',
            'email' => 'required|valid_email',
           
             ];
            if (!$this->validate($rules)) {
                return redirect()->to('/settings/dispatch/campaigns')->withInput()->with('validation', $this->validator);
           
            // Handle image upload
            }

        $newName = $campaignImage->getRandomName();
        $campaignImage = $this->request->getFile('campaignImage');
        $uploadPath = '/image/campaign/';
        // Move uploaded file to designated directory
        if ($campaignImage->isValid() && !$campaignImage->hasMoved()) {
 
           // $campaignImage->move($uploadPath, $newName);
        } else {
            $campaignImage->move(ROOTPATH . 'public/image/campaign', $newName);
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

}