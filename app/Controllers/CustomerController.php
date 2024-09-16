<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\PulsecheckModal;
use App\Models\TestModal;
use App\Models\TechnicianModal;
use CodeIgniter\Controller;
use Exception;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function getAllTechnicians()
    {
        $technicianModel = new TechnicianModal();
        $technicians = $technicianModel->findAll();
        return $this->response->setJSON($technicians);
    }

    public function search()
    {
        $search = $this->request->getVar('search');

        $technicianModel = new TechnicianModal();

        if ($search) {
            $results = $technicianModel->getTechniciansBySearch($search);
        } else {
            $results = $technicianModel->findAll();
        }

        return $this->response->setJSON($results);
    }

    public function dispatch()
    {
        $technicianModel = new TechnicianModal();
        $data['technicians'] = $technicianModel->findAll();
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        $data['admin1'] = $admin1;
        return view('dispatch', $data);
    }

}
