<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TechnicianModal;
use CodeIgniter\Pager\Pager;

class TechnicianController extends Controller
{

    public function __construct(){
        helper('url');
    }
    
    public function showAccessToken()
    {
        $technicianModel = new technicianModal();
        $accessToken = $technicianModel->getAccessToken();
        echo $accessToken;

    }

    public function gettechniciandata()
    {
        $technicianModel = new technicianModal();
        $response = $technicianModel->get_technician_data();
        echo $response;
   
    }

    public function dispatch(){
        $technicianModel = new technicianModal(); // Create an instance of your model
        // Fetch only 5 technicians from the database
        $data['technicians'] = $technicianModel->findAll(); // Adjust this based on your model setup
    
        // Load view with fetched data
        return view('dispatching', $data);
    }
   
 
    public function uploadImage()
    {
        $technicianId = $this->request->getPost('technician_id');
        $file = $this->request->getFile('profile_image');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);
            $technicianModel = new TechnicianModal();
            $imagePath = base_url('uploads/' . $newName);
            $technicianModel->uploadImage($technicianId, $imagePath);
            // return view('dispatch');
            return redirect()->to('/operate/dispatch');
            // echo'image uploaded';
        } else {
            echo 'Failed to upload image';
        }
    }

    public function search()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('dispatch');

        $searchTerm = $this->request->getVar('search');

        if (strlen($searchTerm) >= 2) {
            $builder->like('technician_name', $searchTerm);
            $builder->orLike('technician_code', $searchTerm);
        }

        $query = $builder->get();
        $data['technicians'] = $query->getResultArray();

        return $this->response->setJSON($data);
    }

}

