<?php
namespace App\Controllers;
use App\Models\CampaignModel;
use App\Models\ReviewModal;
use CodeIgniter\Controller;
use App\Models\CustomerModel;
use App\Models\TechnicianModal;
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
        // print_r($data['campaigns'][0]);
        return view('dispatchTab/dispatchCampaigns',$data);
    }

    public function search()
    {
        $search = $this->request->getVar('query');
    
        $technicianModel = new TechnicianModal();
        
        if ($search) {
            $results = $technicianModel->getTechniciansBySearch($search);
        } else {
            $results = $technicianModel->findAll(); // Return all technicians if no search query
        }
    
        return $this->response->setJSON($results);
    } 

    public function create() {
        helper(['form']);
        $rules = [
            'campaignImage' => 'uploaded[campaignImage]|max_size[campaignImage,1024]|is_image[campaignImage]',
            'CampaignName' => 'required',
            'campaignDescription' => 'required',
            'campaignDepartment' => 'required',
        ];
    
        if (!$this->validate($rules)) {
            // Return validation errors if the request is AJAX
            return $this->response->setJSON([
                'success' => false,
                'validation' => $this->validator->getErrors(),
            ]);
        }
    
        // Handle image upload
        $campaignImage = $this->request->getFile('campaignImage');
        $newName = $campaignImage->getRandomName();
        $uploadPath = '/image/campaign/';
    
        if ($campaignImage->isValid() && !$campaignImage->hasMoved()) {
            $campaignImage->move(ROOTPATH . 'public' . $uploadPath, $newName);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Failed to upload image.',
            ]);
        }
    
        // Save campaign data to the database
        $campaignModel = new CampaignModel();
        $data = [
            'name' => $this->request->getPost('CampaignName'),
            'description' => $this->request->getPost('campaignDescription'),
            'department' => $this->request->getPost('campaignDepartment'),
            'license' => $this->request->getPost('license'),
            'employeeId' => $this->request->getPost('employeeId'),
            'email' => $this->request->getPost('email'),
            'image' => $uploadPath . $newName, // Store image path in database
            'deviceId' => $this->request->getPost('deviceId'),
        ];
    
        $campaignModel->insert($data);
    
        // Return success response if the request is AJAX
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Campaign saved successfully.',
        ]);
    } 

    public function delete($id)
    {
        $model = new CampaignModel();
        if ($model->delete($id)) {
            // Return JSON response for AJAX
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Campaign deleted successfully.'
            ]);
        } else {
            // Return JSON response for AJAX
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Failed to delete campaign.'
            ]);
        }
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
            // Return JSON response for AJAX
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $this->validator->getErrors()
            ]);
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
            'deviceId' => $this->request->getPost('deviceId'),
        ];
    
        // Include image path in data if uploaded
        if (!empty($imagePath)) {
            $data['image'] = $imagePath;
        }
      
        // Perform the update
        if ($model->update($id, $data)) {
            // Return JSON response for AJAX
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Campaign updated successfully.'
            ]);
        } else {
            // Return JSON response for AJAX
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Failed to update campaign.'
            ]);
        }
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
       // print_r($data['technician']);
       // die;

        if ($data['technician']) {
            return view('dispatchTab/pulse_check', $data);
        } else {
            // Handle case where technician is not found
            return redirect()->to(base_url('/some-error-page'))->with('error', 'Technician not found');
        }
    }

}