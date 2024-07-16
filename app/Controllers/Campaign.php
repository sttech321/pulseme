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

    public function update()
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
        $model->update($data);

        // Redirect with success message
        return redirect()->to('/settings/dispatch/campaigns')->with('success', 'Campaign updated successfully.');
    }

    public function delete($id)
    {
        $model = new CampaignModel();
        $model->delete($id);
        return redirect()->to('/settings/dispatch/campaigns')->with('success', 'Campaign deleted successfully.');
    }

}