<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\ContactcardModal;
use CodeIgniter\Controller;

class ContactcardController extends BaseController
{
    public function create_contactcard()
{
    $contactCardModel = new ContactcardModal();
    $existingRecord = $contactCardModel->first();
    
    $data = [
        'primary_number' => $this->request->getPost('primary'),
        'email' => $this->request->getPost('email'),
        'sms_number' => $this->request->getPost('sms'), 
        'searchterm' => $this->request->getPost('search'),
        'notes' => $this->request->getPost('notes'),
        'updated_at' => date('Y-m-d H:i:s'),
    ];
    
    // Handle image upload
    $campaignImage = $this->request->getFile('image');
    
    if ($campaignImage && $campaignImage->isValid() && !$campaignImage->hasMoved()) {
        $newName = $campaignImage->getRandomName();
        $uploadPath = '/image/campaign/';
        $imagePath = $uploadPath . $newName;
        
        // Move the image to the specified path
        $campaignImage->move(ROOTPATH . 'public' . $uploadPath, $newName);
        
        // Add the image path to the data array
        $data['image'] = $imagePath;
    }
    
    // If there's an existing record, update it; otherwise, insert a new one
    if ($existingRecord) {
        $contactCardModel->update($existingRecord['id'], $data);
        $message = 'Contact card updated successfully.';
    } else {
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
        $data['contactcard'] = $contactCardModel->first();
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        $data['admin1'] = $admin1;
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
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        $data['admin1'] = $admin1;
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
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        $data['admin1'] = $admin1;
        return view('contact-card-tab/contact-card-layout',$data);
    }
}