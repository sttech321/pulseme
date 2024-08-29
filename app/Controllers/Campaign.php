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
        // Ensure the session is started (if not started elsewhere)
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        
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
            $results = $technicianModel->getTechniciansBySearchs($search);
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
        $campaignModel = new CampaignModel();
        $imageFile = $this->request->getFile('campaignimg');
 
        // Check if the file was uploaded
        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            // Define the upload path
            $uploadPath = '/image/campaign/';
 
            // Generate a unique name for the file to avoid conflicts
            $fileName = $imageFile->getRandomName();
 
            // Move the file to the upload path
            if ($imageFile->move(ROOTPATH . 'public' . $uploadPath, $fileName)) {
                // Store the file path
                $imagePath = $uploadPath . $fileName;
            } else {
                // Handle file move error
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Failed to upload the image.',
                ]);
            }
        } else {
            // If no file is uploaded, set imagePath to null or handle as needed
            $imagePath = null;
        }
 
        $data = [
            'name' => $this->request->getPost('CampaignName'),
            'description' => $this->request->getPost('campaignDescription'),
            'department' => $this->request->getPost('campaignDepartment'),
            'license' => $this->request->getPost('license'),
            'employeeId' => $this->request->getPost('employeeId'),
            'email' => $this->request->getPost('email'),
            'deviceId' => $this->request->getPost('deviceId'),
            'image' => $imagePath,
        ];
   
        if ($campaignModel->update($id, $data)) {
            return $this->response->setJSON([
                'data' => $data,
                'success' => true,
                'message' => 'Campaign updated successfully.',
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Failed to update the campaign.',
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