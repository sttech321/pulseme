<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\TechnicianModal;
use App\Services\MyGeotabService;
use CodeIgniter\Controller;

class CustomerController extends BaseController
{
    public function __construct()
    {
        // Load session service
        $this->session = \Config\Services::session();
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
    
    public function dispatch()
    {
        $technicianModel = new TechnicianModal();
        $data['technicians'] = $technicianModel->findAll();
        return view('dispatching', $data);
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

        // Insert customer data
        $customerModel->insert($data);

        // Send bio email
        $this->sendbioEmail($technicianId, $data['customer_email']);

        // Dispatch message using MyGeotabService
        $this->sendDispatchMessage($technicianId, 'Technician dispatched to customer location');

        return redirect()->to('/operate/dispatch')->with('success', 'Customer info saved, email sent, and dispatch message sent successfully.');
    }

    private function sendbioEmail($technicianId, $email)
    {
        $emailService = \Config\Services::email();
        $link = base_url('/application/bio/' . $technicianId);
        
        // Load the email template
        $message = view('dispatchTab/bio-template', ['link' => $link]);

        // Initialize email configuration
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

        // Set email parameters
        $emailService->setFrom($_ENV['SMTP_USER'], 'summitRA');
        $emailService->setTo($email);
        $emailService->setSubject('Technician Bio'); // Adjust subject as needed

        // Set email message body
        $emailService->setMessage($message);

        // Send email and handle response
        if (!$emailService->send()) {
            // Display error message for debugging
            echo $emailService->printDebugger(['headers', 'subject', 'body']);
        }
    }

    private function sendDispatchMessage($technicianId, $message)
    {
        // Fetch device ID using technician ID
        $technicianModel = new TechnicianModal();
        $deviceId = $technicianModel->getDeviceIdByTechnicianId($technicianId);

        $myGeotab = new MyGeotabService();
        $response = $myGeotab->sendDispatchMessage($deviceId, $message);

        if ($response['status'] != 'success') {
            // Handle dispatch message failure
            log_message('error', 'Dispatch message failed: ' . json_encode($response));
        }
    }

    public function sendMessage()
    {
        $deviceId = $this->request->getPost('device_id');
        $message = $this->request->getPost('message');

        $myGeotab = new MyGeotabService();
        $response = $myGeotab->sendDispatchMessage($deviceId, $message);

        return $this->response->setJSON($response);
    }

    public function sendLiveLocation()
    {
        $deviceId = $this->request->getPost('device_id');
        $latitude = $this->request->getPost('latitude');
        $longitude = $this->request->getPost('longitude');

        $myGeotab = new MyGeotabService();
        $response = $myGeotab->sendLiveLocation($deviceId, $latitude, $longitude);

        return $this->response->setJSON($response);
    }
}
?>

