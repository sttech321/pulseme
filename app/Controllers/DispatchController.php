<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DispatchModal;

class DispatchController extends Controller
{

    public function insert_campaign()
    {
        $model = new DispatchModal();

        // Get form data
        $data = [
            'campaign_name' => $this->request->getvar('campaign_name'),
            'campaign_description' => $this->request->getPost('campaign_description'),
            'campaign_department' => $this->request->getPost('campaign_department'),
            'license' => $this->request->getPost('license'),
            'employee_id' => $this->request->getPost('employee_id'),
            'email' => $this->request->getPost('email')
        ];

        // Handle file upload
        // $file = $this->request->getFile('image');
        // if ($file && $file->isValid() && !$file->hasMoved()) {
        //     $newName = $file->getRandomName();
        //     $file->move(ROOTPATH . 'public/uploads', $newName);
        //     $data['image'] = $newName;
        // }

        // Insert data into the database
        if ($model->insert($data)) {
            // return redirect()->to('/settings/dispatch/campaigns')->with('message', 'Campaign created successfully.');
            echo 'data inserted successfully';
        } else {
            return redirect()->back()->withInput()->with('errors', 'Failed to create campaign.');
        }
        return view('insert_campaign');
    }
        
}
