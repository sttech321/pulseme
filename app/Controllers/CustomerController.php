<?php

namespace App\Controllers;

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

        return view('dispatching', $data);
    }

    public function create_dispatch()
    {
        // Validation rules
        $rules = [
            'customer_email' => 'required|valid_email',
            'customer_phone' => 'required',
        ];

        // Validate form input
        if (!$this->validate($rules)) {
            return $this->response->setJSON(
                [
                    'status' => 'error',
                    'message' => 'Validation failed',
                    'errors' => $this->validator->getErrors()
                ]
            );
        }

        $name = $this->request->getPost('customer_name');
        $email = $this->request->getPost('customer_email');
        $phone = $this->request->getPost('customer_phone');
        $address = $this->request->getPost('customer_address');
        $campaignid = $this->request->getPost('campaignid');
        $employeeid = $this->request->getPost('employeeid');
        $actionType = $this->request->getPost('actionType');

        // Prepare data to insert
        $data = [
            'customer_name' => $name,
            'customer_email' => $email,
            'customer_phone' => $phone,
            'customer_address' => $address,
            'campaignid' => $campaignid,
            'employeeid' => $employeeid,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'formstatus' => $actionType,
        ];

        // return $this->response->setJSON(['status' => 'debug', 'data' => $data]);

        if ($actionType === 'bio') {
            // Call the sendbioEmail method
            $testModel = new CustomerModel();
            $testModel->insert($data);
            $this->sendbioEmail($campaignid, $email);

            return $this->response->setJSON(['status' => 'success', 'message' => 'Bio sent successfully!', 'data' => $data]);
        } elseif ($actionType === 'pulsecheck') {
            // Insert into pulsecheck table
            $pulsecheckModel = new CustomerModel(); // Replace with the actual model for pulsecheck table
            $pulsecheckModel->insert($data);
            $this->sendPulseCheckEmail($employeeid, $email);

            return $this->response->setJSON(['status' => 'success', 'message' => 'Pulsecheck sent successfully!']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Form submission failed.']);
        }
    }

    private function sendbioEmail($campaignid, $email)
    {
        $emailService = \Config\Services::email();
        $link = base_url('/application/bio/' . $campaignid);
        $message = view('dispatchTab/bio-template', ['link' => $link]);

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
        $emailService->setSubject('Technician Bio');
        $emailService->setMessage($message);

        if (!$emailService->send()) {
            log_message('error', $emailService->printDebugger(['headers', 'subject', 'body']));
        }
    }

    private function sendPulseCheckEmail($employeeId, $email)
    {
        $emailService = \Config\Services::email();
        $link = base_url('/application/pulsecheck/' . $employeeId);
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
        $emailService->setSubject('Pulsecheck Review');
        $emailService->setMessage($message);

        if (!$emailService->send()) {
            echo $emailService->printDebugger(['headers', 'subject', 'body']);
        }
    }
}
