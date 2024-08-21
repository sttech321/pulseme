<?php

namespace App\Commands;

use CodeIgniter\CLI\CLI;
use App\Models\ReviewModel;
use App\Models\ContactcardModel;


// Fetch reviews that need the contact card email sent
$reviewModel = new ReviewModel();
$reviews = $reviewModel->where('contact_card_sent', false)->findAll();




$emailService = \Config\Services::email();

foreach ($reviews as $review) {
    // Check if 5 minutes have passed since the review was submitted
    $submittedAt = new DateTime($review['created_at']);
    $now = new DateTime();
    $interval = $submittedAt->diff($now);

    if ($interval->i >= 5) {
        // Fetch the contact card information
        $contactCardModel = new ContactcardModel();
        $contactCard = $contactCardModel->first();

        // Build the email
        $message = view('contact-card-tab/contact_templates', ['contactcard' => $contactCard]);

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

        $emailService->setFrom($_ENV['SMTP_USER'], 'Your Company Name');
        $emailService->setTo($review['customer_email']);
        $emailService->setSubject('Contact Card');
        $emailService->setMessage($message);

        if ($emailService->send()) {
            // Mark the review as having the contact card email sent
            $reviewModel->update($review['id'], ['contact_card_sent' => true]);
        } else {
            CLI::error("Failed to send contact card to {$review['customer_email']}");
        }
    }
}

CLI::write('Cron job executed successfully.');







class SendContactCards extends BaseCommand
{
    protected $group = 'Custom';
    protected $name = 'send:contact-cards';
    protected $description = 'Send contact cards to users';

    public function __construct()
    {
        parent::__construct();
        $this->contactCardModel = new ContactcardModal();
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
        $contactCardModel = new ContactcardModal();
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
