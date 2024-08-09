<?php
namespace App\Controllers;

use App\Models\ContactcardModal;
use CodeIgniter\Controller;

class ContactcardController extends BaseController
{
    public function create_contactcard()
    {
        $contactCardModel = new ContactcardModal();
        // Check if the table is empty
        $existingRecord = $contactCardModel->first();

        // Handle image upload
        $campaignImage = $this->request->getFile('image');
        $newName = $campaignImage->getRandomName();
        $uploadPath = '/image/campaign/';

        // Get the duration from the form (e.g., '00:01:20.000')
        $duration = $this->request->getPost('time');
        $timeInSeconds = $this->convertDurationToSeconds($duration);

        // Ensure timeInSeconds is not negative
        $timeInSeconds = max(0, $timeInSeconds);

        // Prepare data
        $data = [
            'primary_number' => $this->request->getPost('primary'),
            'email' => $this->request->getPost('email'),
            'sms_number' => $this->request->getPost('sms'),
            'searchterm' => $this->request->getPost('search'),
            'notes' => $this->request->getPost('notes'),
            'image' => $uploadPath . $newName, // Store image path in database
            'time' => $this->request->getPost('time'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($existingRecord) {
            // Update the existing record
            $contactCardModel->update($existingRecord['id'], $data);
            $message = 'Contact card updated successfully.';
        } else {
            // Insert new record
            $contactCardModel->insert($data);
            $message = 'Contact card created successfully.';
        }

        // Schedule email sending
        $this->scheduleEmail($timeInSeconds);

        return $this->response->setJSON([
            'success' => true,
            'data' => $data,
            'message' => $message,
        ]);
    }

    private function convertDurationToSeconds($duration)
    {
        // Convert duration (e.g., '00:01:20.000') to seconds
        $parts = explode(':', $duration);
        $minutes = isset($parts[1]) ? (int)$parts[1] : 0;
        $seconds = isset($parts[2]) ? (float)$parts[2] : 0;
        return $minutes * 60 + $seconds;
    }

    private function scheduleEmail($timeInSeconds)
    {
        sleep($timeInSeconds);
        $this->sendcontactcard($timeInSeconds);
    }

    private function sendcontactcard($timeInSeconds)
    {
        $emailService = \Config\Services::email();
        $message = 'contact card detail';
        $email = 'vikashchoudhary15616@gmail.com';

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
        $emailService->setSubject('Contact card');
        $emailService->setMessage($message);

        if (!$emailService->send()) {
            log_message('error', $emailService->printDebugger(['headers', 'subject', 'body']));
        }
    }

}
