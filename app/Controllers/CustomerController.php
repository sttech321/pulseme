<?php
namespace App\Controllers;
use App\Models\CustomerModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use CodeIgniter\Email\Email;


class CustomerController extends BaseController {

    public function __construct() {
        // Load session service
        $this->session = \Config\Services::session();

    }

    public function create() {
        // Load necessary helpers and libraries
        helper(['form']);
        $rules = [
            'phone' => 'required',
            'email' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/operate/dispatch')->withInput()->with('validation', $this->validator);
        }

        $campaignModel = new CustomerModel(); // Replace with your actual model name
        $data = [
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
        ];
        // Insert data into database
        $campaignModel->insert($data);
        // Redirect to a success page or display success message
        return redirect()->to('/operate/dispatch')->with('success', 'Campaign saved successfully.');
    }

}
