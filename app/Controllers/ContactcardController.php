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

        // Prepare data
        $data = [
            'primary_number' => $this->request->getPost('primary'),
            'email' => $this->request->getPost('email'),
            'sms_number' => $this->request->getPost('sms'),
            'searchterm' => $this->request->getPost('search'),
            'notes' => $this->request->getPost('notes'),
            'image' => $uploadPath . $newName,
            'time' => $duration,
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
       
        return $this->response->setJSON([
            'success' => true,
            'data' => $data,
            'message' => $message,
        ]);
    }

    public function contact_information(): string
    {
        // Ensure the session is started (if not started elsewhere)
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        $contactCardModel = new ContactcardModal();
        $data['contactcard'] = $contactCardModel->first();

        return view('contact-card-tab/contact_information',$data);
    }

    public function conactcardlayout(): string
    {
        $contactCardModel = new ContactcardModal();
        $data['contactcard'] = $contactCardModel->first();
        return view('contact-card-tab/contact-card-layout',$data);
    }

}