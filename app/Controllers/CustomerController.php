<?php
namespace App\Controllers;
use App\Models\CustomerModel;
use App\Models\technicianModal;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use CodeIgniter\Email\Email;


class CustomerController extends BaseController {

    public function __construct() {
        // Load session service
        $this->session = \Config\Services::session();

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
        $builder = $db->table(getenv('CAMPAIGN_TABLE'));
    
        $searchTerm = $this->request->getVar('search');
    
        if (strlen($searchTerm) >= 2) {
            $builder->like('name', $searchTerm);
            $builder->orLike('department', $searchTerm);
        }
    
        $query = $builder->get();
        $data['technicians'] = $query->getResultArray();
    
        return $this->response->setJSON($data);
    }

    public function create() {
        // Load necessary helpers and libraries
        helper(['form']);

        $rules = [
            'customer_phone' => 'required',
            'customer_email' => 'required|valid_email',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/operate/dispatch')->withInput()->with('validation', $this->validator);
        }

        $campaignModel = new CustomerModel();
        $data = [
            'phone' => $this->request->getPost('customer_phone'),
            'email' => $this->request->getPost('customer_email'),
            'name' => $this->request->getPost('customer_name'),
            'address' => $this->request->getPost('customer_address'),
        ];

        // Insert data into database
        $campaignModel->insert($data);

        // Redirect to a success page or display success message
        return redirect()->to('/operate/dispatch')->with('success', 'Campaign saved successfully.');
    }


    public function sendbioEmail() {
        helper(['form']);
        $emailService = \Config\Services::email();
        $campaignModel = new CustomerModel();
        $email = 'vikashchoudhary15616@gmail.com';
        // var_dump($email);
        
        // // Initialize email configuration
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
        $emailService->setSubject('Technician Bio');
        echo '<pre>';
        var_dump($emailService);
        echo '</pre>';
        // // Send email and handle response
        if (!$emailService->send()) {
            // Display error message for debugging
            echo $emailService->printDebugger(['headers']);
        } else {
            // Successful send
            echo 'Bio sent successfully';
            return redirect()->to('/operate/dispatch');
        }
        return view('dispatch');
    }
    

}
