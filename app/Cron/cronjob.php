<?php
 
namespace App\Commands;
 
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Models\ReviewModal;
use App\Models\ContactcardModal;
 
class SendContactCards extends BaseCommand
{
    protected $group = 'Custom';
    protected $name = 'send:contact-cards';
    protected $description = 'Send contact cards to users';
 
    public function __construct()
    {
        parent::__construct();
        $this->contactCardModel = new ReviewModal();
    }
 
    public function run(array $params)
    {
        $jobs = $this->contactCardModel->where('status', 'pending')
                                       ->where('createdOn <=', date('Y-m-d H:i:s', strtotime('-1 minutes')))
                                       ->findAll();
 
        foreach ($jobs as $job) {
            $this->sendContactCard($job['email']);
            $this->contactCardModel->update($job['id'], ['status' => 'sent']);
        }
    }
 
    private function sendContactCard($customer_email)
    {
        $contactCardModel = new ReviewModal();
        $data['contactcard'] = $contactCardModel->first();
 
        $emailService = \Config\Services::email();
 
        // Building the email message
        $message = view('contact-card-tab/contact_templates', ['contactcard' => $data['contactcard']]);
 
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
        $emailService->setTo($customer_email);
        $emailService->setSubject('Contact-card');
        $emailService->setMessage($message);
 
        if (!$emailService->send()) {
            log_message('error', $emailService->printDebugger(['headers', 'subject', 'body']));
        }
    }
}