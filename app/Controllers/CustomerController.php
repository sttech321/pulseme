<?php
namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\TechnicianModal;
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
            'customer_id'   =>  $technicianId,
            'customer_phone' => $this->request->getPost('customer_phone'),
            'customer_email' => $this->request->getPost('customer_email'),
            'customer_name' => $this->request->getPost('customer_name'),
            'customer_address' => $this->request->getPost('customer_address'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $customerModel->insert($data);

        $this->sendbioEmail($technicianId, $data['customer_email']);

        return redirect()->to('/operate/dispatch')->with('success', 'Customer info saved and email sent successfully.');
    }

    private function sendbioEmail($technicianId, $email)
    {
        $emailService = \Config\Services::email();
        $pagelink = '<a href="http://localhost:8080/application/bio/'.$technicianId.'">BIO link</a>';
        $message = "Here is technician bio link please click this link to see technician details: ".$pagelink; // Replace with your actual page link

        // Initialize email configuration
        $emailService->initialize([
            'protocol' => 'smtp',
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPPort' => intval($_ENV['SMTP_PORT']),
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            'mailType' => 'html',
            'charset'  => 'utf-8',
            'newline'  => "\r\n"
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
        } else {
            // Successful send
            return redirect()->to('/operate/dispatch')->with('success', 'Bio sent successfully');
        }
    }
}
