<?php

namespace App\Controllers;

use App\Models\CustomerModel;
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
        $search = $this->request->getVar('query');
    
        $technicianModel = new TechnicianModal();
        
        if ($search) {
            $results = $technicianModel->getTechniciansBySearch($search);
        } else {
            $results = $technicianModel->findAll(); // Return all technicians if no search query
        }
    
        return $this->response->setJSON($results);
    } 


    public function dispatch()
    {
        $technicianModel = new TechnicianModal();    
        $data['technicians'] = $technicianModel->findAll();
    
        return view('dispatching',$data);
    }
    

    public function create()
    {
        helper(['form']);
        $rules = [
            'customer_phone' => 'required',
            'customer_email' => 'required|valid_email',
        ];

        if (!$this->validate($rules)) {
            $buttonId = $this->request->getPost('button_id');
            return redirect()->to('/operate/dispatch')
                ->withInput()
                ->with('validation', $this->validator)
                ->with('button_id', $buttonId);
        }

        $technicianId = $this->request->getPost('button_id');
        $customerModel = new CustomerModel();
        $data = [
            'campaign_id' => $technicianId,
            'customer_phone' => $this->request->getPost('customer_phone'),
            'customer_email' => $this->request->getPost('customer_email'),
            'customer_name' => $this->request->getPost('customer_name'),
            'customer_address' => $this->request->getPost('customer_address'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $customerModel->insert($data);

        $this->sendbioEmail($technicianId, $data['customer_email']);
        // $this->sendDispatchMessage($deviceId, 'Technician dispatched to customer location');
        return redirect()->to('/operate/dispatch')->with('success', 'Customer info saved, email sent, and dispatch message sent successfully.');
    }


    // public function create()
    // {
    //     helper(['form']);
    //     $rules = [
    //         'customer_phone' => 'required',
    //         'customer_email' => 'required|valid_email',
    //     ];

    //     if (!$this->validate($rules)) {
    //         $buttonId = $this->request->getPost('button_id');
    //         return redirect()->to('/operate/dispatch')
    //             ->withInput()
    //             ->with('validation', $this->validator)
    //             ->with('button_id', $buttonId);
    //     }

    //     $action = $this->request->getPost('action');
    //     $technicianId = $this->request->getPost('technician_id');
    //     $employeeId = $this->request->getPost('employee_id');
    //     $customerModel = new CustomerModel();
    //     $data = [
    //         'campaign_id' => $technicianId,
    //         'employeeId' => $employeeId,
    //         'customer_phone' => $this->request->getPost('customer_phone'),
    //         'customer_email' => $this->request->getPost('customer_email'),
    //         'customer_name' => $this->request->getPost('customer_name'),
    //         'customer_address' => $this->request->getPost('customer_address'),
    //         'created_at' => date('Y-m-d H:i:s'),
    //         'updated_at' => date('Y-m-d H:i:s'),
    //     ];

    //     $customerModel->insert($data);

    //     if ($action === 'send_bio') {
    //         $this->sendBioEmail($technicianId, $data['customer_email']);
    //     } elseif ($action === 'send_pulsecheck') {
    //         $this->sendPulseCheckEmail($employeeId, $data['customer_email']);
    //     }
    //     return redirect()->to('/operate/dispatch')->with('success', 'Customer info saved, and email sent successfully.');
    // }


    private function sendbioEmail($technicianId, $email)
    {
        $emailService = \Config\Services::email();
        $link = base_url('/application/bio/' . $technicianId);
        $message = view('dispatchTab/bio-template', ['link' => $link]);

        $emailService->initialize([
            'protocol' => 'smtp',
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPPort' => intval($_ENV['SMTP_PORT']),
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            //'setSMTPCrypto' => '',
            'mailType' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ]);

        $emailService->setFrom($_ENV['SMTP_USER'], 'summitRA');
        $emailService->setTo($email);
        $emailService->setSubject('Technician Bio');
        $emailService->setMessage($message);

        if (!$emailService->send()) {
            echo $emailService->printDebugger(['headers', 'subject', 'body']);
            echo $emailService->printDebugger(['headers']);
        }else{
            return redirect()->to('/operate/dispatch')->with('success', 'email sent successfully.');
        }
    }


    private function sendPulseCheckEmail($employeeId, $email)
    {
        $emailService = \Config\Services::email();
        $link = base_url('application/pulsecheck/' . $employeeId);
        $message = view('dispatchTab/pulsecheck-review', ['link' => $link]);

        $emailService->initialize([
            'protocol' => 'smtp',
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPPort' => intval($_ENV['SMTP_PORT']),
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            'mailType' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ]);

        $emailService->setFrom($_ENV['SMTP_USER'], 'summitRA');
        $emailService->setTo($email);
        $emailService->setSubject('Pulsecheck review');
        $emailService->setMessage($message);

        if (!$emailService->send()) {
            echo $emailService->printDebugger(['headers', 'subject', 'body']);
            echo $emailService->printDebugger(['headers']);
        }else{
            return redirect()->to('/operate/dispatch')->with('success', 'email sent successfully.');
        }
    }


}
?>
