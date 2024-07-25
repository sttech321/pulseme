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

    public function dispatch()
    {
        $technicianModel = new TechnicianModal();
        $customerModel = new CustomerModel();
    
        $data['technicians'] = $technicianModel->findAll();
        $data['customers'] = $customerModel->findAll();
    
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

        $customerModel->insert($data);

        $this->sendbioEmail($technicianId, $data['customer_email']);
        // $this->sendDispatchMessage($deviceId, 'Technician dispatched to customer location');

        return redirect()->to('/operate/dispatch')->with('success', 'Customer info saved, email sent, and dispatch message sent successfully.');
    }

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
        }else{
            return redirect()->to('/operate/dispatch')->with('success', 'email sent successfully.');
        }
    }


    // private function sendDispatchMessage($deviceId, $message)
    // {
    //     $myGeotab = new MyGeotabService();
    //     $response = $myGeotab->sendDispatchMessage($deviceId, $message);

    //     if ($response['status'] != 'success') {
    //         log_message('error', 'Dispatch message failed: ' . json_encode($response));
    //     }
    // }

    // public function sendMessage()
    // {
    //     $deviceId = $this->request->getPost('device_id');
    //     $message = $this->request->getPost('message');

    //     $myGeotab = new MyGeotabService();
    //     $response = $myGeotab->sendDispatchMessage($deviceId, $message);

    //     return $this->response->setJSON($response);
    // }

    // public function sendLiveLocation()
    // {
    //     $deviceId = $this->request->getPost('device_id');
    //     $latitude = $this->request->getPost('latitude');
    //     $longitude = $this->request->getPost('longitude');

    //     $myGeotab = new MyGeotabService();
    //     $response = $myGeotab->sendLiveLocation($deviceId, $latitude, $longitude);

    //     return $this->response->setJSON($response);
    // }
}
?>
