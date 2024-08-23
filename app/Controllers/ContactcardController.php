<?php
namespace App\Controllers;

use App\Models\ContactcardModal;
use CodeIgniter\Controller;

class ContactcardController extends BaseController
{
    public function create_contactcard()
    {
        $contactCardModel = new ContactcardModal();
        $existingRecord = $contactCardModel->first();
    
        // Handle image upload
        $campaignImage = $this->request->getFile('image');
        if ($campaignImage->isValid() && !$campaignImage->hasMoved()) {
            $newName = $campaignImage->getRandomName();
            $uploadPath = WRITEPATH . 'uploads/campaign/';
            $campaignImage->move($uploadPath, $newName);
            $imagePath = $uploadPath . $newName;
        } else {
            $imagePath = $existingRecord ? $existingRecord['image'] : ''; // Use existing image if no new image is uploaded
        }
    
        // Get the duration from the form (e.g., '00:01:20.000')
        $duration = $this->request->getPost('time');
    
        // Prepare data
        $data = [
            'primary_number' => $this->request->getPost('primary'),
            'email' => $this->request->getPost('email'),
            'sms_number' => $this->request->getPost('sms'),
            'searchterm' => $this->request->getPost('search'),
            'notes' => $this->request->getPost('notes'),
            'time' => $duration,
            'image' => $imagePath,
            'updated_at' => date('Y-m-d H:i:s'),
        ];
    
        if ($existingRecord) {
            // Update the existing record
            $contactCardModel->update($existingRecord['id'], $data);
            $message = 'Contact card updated successfully.';
        } else {
            // Insert new record
            $data['created_at'] = date('Y-m-d H:i:s');
            $contactCardModel->insert($data);
            $message = 'Contact card created successfully.';
        }
    
        // Return response
        return $this->response->setJSON(['success' => true, 'message' => $message]);
    }
    
    public function contact_information()
    {
        // Check if the user is logged in
        if (!session()->get('isLoggedIn')) {
            // Store the current URL in the session for redirecting after login
            session()->set('redirect_back', current_url());

            // Redirect to the login page
            return redirect()->to('/');
        }

        // Fetch contact card data
        $contactCardModel = new ContactcardModal();
        $data['contactcards'] = $contactCardModel->first();

        // Load the view with the data
        return view('contact-card-tab/contact_information', $data);
    }


    public function contact_templates()
    {
        // Check if the user is logged in
        if (!session()->get('isLoggedIn')) {
            // Store the current URL in the session for redirecting after login
            session()->set('redirect_back', current_url());

            // Redirect to the login page
            return redirect()->to('/');
        }

        $contactCardModel = new ContactcardModal();
        $data['contactcard'] = $contactCardModel->first();
        return view('contact-card-tab/contact_templates',$data);
    }

    public function conactcardlayout(): string
    {
        // Check if the user is logged in
        if (!session()->get('isLoggedIn')) {
            // Store the current URL in the session for redirecting after login
            session()->set('redirect_back', current_url());

            // Redirect to the login page
            return redirect()->to('/');
        }
        $contactCardModel = new ContactcardModal();
        $data['contactcard'] = $contactCardModel->first();
        return view('contact-card-tab/contact-card-layout',$data);
    }

}