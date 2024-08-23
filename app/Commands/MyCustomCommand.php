<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Models\ContactcardModal;

class MyCustomCommand extends BaseCommand
{
    protected $group       = 'Custom';
    protected $name        = 'my:customcommand';
    protected $description = 'Send contact card email to a customer';

    public function run(array $params)
    {
        if (count($params) < 2) {
            CLI::error('Insufficient parameters. Usage: php spark my:customcommand <email> <status>');
            return;
        }

        $customer_email = $params[0];
        $status = $params[1];

        // Ensure status is pending before sending the email
        if ($status !== 'pending') {
            CLI::error('Invalid status. Email will only be sent if status is pending.');
            return;
        }

        // Load the model
        $contactCardModel = new ContactcardModal();
        $data['contactcard'] = $contactCardModel->first();

        // Check if contact card data is available
        if (!$data['contactcard']) {
            CLI::error('No contact card data found.');
            return;
        }

        $emailService = \Config\Services::email();

        // Building the email message
        $message = view('contact-card-tab/contact-card-layout', ['contactcard' => $data['contactcard']]);

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
            CLI::error('Failed to send email: ' . $emailService->printDebugger(['headers', 'subject', 'body']));
        } else {
            CLI::write('Email sent successfully.');
        }
    }
}