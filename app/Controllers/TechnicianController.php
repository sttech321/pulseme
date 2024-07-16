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
    

    public function dispatch(){
        $technicianModel = new technicianModal(); // Create an instance of your model
        // Fetch only 5 technicians from the database
        $data['technicians'] = $technicianModel->findAll(); // Adjust this based on your model setup
    
        // Load view with fetched data
        return view('dispatching', $data);
    }
   

    public function search()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('campaign');

        $searchTerm = $this->request->getVar('search');

        if (strlen($searchTerm) >= 2) {
            $builder->like('name', $searchTerm);
            $builder->orLike('department', $searchTerm);
        }

        $query = $builder->get();
        $data['technicians'] = $query->getResultArray();

        return $this->response->setJSON($data);
    }

}

