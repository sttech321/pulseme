<?php

namespace App\Controllers;

use App\Models\TestModal;
use CodeIgniter\Controller;
use Exception;

class TestController extends Controller
{
    public function data()
    {
        return view('example_view');
    }

    public function submit()
    {
        $name = $this->request->getPost('customer_name');
        $email = $this->request->getPost('customer_email');
        $phone = $this->request->getPost('customer_phone');
        $address = $this->request->getPost('customer_address');
        $campaignid = $this->request->getPost('campaignid');
        $employeeid = $this->request->getPost('employeeid');
        $actionType = $this->request->getPost('actionType');

        $testModel = new TestModal();

        $data = [
            'customer_name' => $name,
            'customer_email' => $email,
            'customer_phone' => $phone,
            'customer_address' => $address,
            'campaignid' => $campaignid,
            'employeeid' => $employeeid
        ];

        try {
            $testModel->insert($data);

            if ($actionType === 'sendbio') {
                $this->sendbioEmail($campaignid, $email);
                return $this->response->setJSON(['status' => 'success', 'message' => 'Bio sent successfully!']);
            } elseif ($actionType === 'sendpulsecheck') {
                $this->sendPulseCheckEmail($employeeid, $email);
                return $this->response->setJSON(['status' => 'success', 'message' => 'Pulsecheck sent successfully!']);
            } else {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Data inserted successfully!']);
            }
        } catch (Exception $e) {
            log_message('error', 'Error inserting data: ' . $e->getMessage());
            return $this->response->setJSON(['status' => 'error', 'message' => 'Error inserting data.']);
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
        $message = view('dispatchTab/pulsecheck-review', [
            'link' => $link,
            'employeeid' => $employeeId 
        ]);

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
