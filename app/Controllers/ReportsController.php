<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CampaignModel;
use App\Models\TechnicianModal;
use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\ReviewModal;
use CodeIgniter\I18n\Time;
use CodeIgniter\Email\Email;

class ReportsController extends BaseController {
    public function __construct() {
        // Load session service
        $this->session = \Config\Services::session();

    }

    public function report_campaign_reviews(){
        $model = new CampaignModel();
        $from_date = $this->request->getVar('from_date');
        $end_date = $this->request->getVar('to_date');
        $data['campaigns'] = $model->findAll();
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        $data['admin1'] = $admin1;
            
        return view('reports/campaign_review',$data);
    }

    public function report_campaign()
    {
        $model = new CampaignModel();
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        $campaignsWithSentiment = $model->getCampaignsWithSentiment();
        return view('reports/campaigns', [
            'campaigns' =>  $campaignsWithSentiment,
            'admin1'    => $admin1,
        ]);
    }

    public function departments(): string
    {
        $model = new CampaignModel();
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        $data['admin1'] = $admin1;
        $data['departments'] = $model->getUniqueDepartments();
        return view('reports/departments', $data);
    }

    public function report_campaign_fieldsops(){
        $model = new CampaignModel();
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        $campaignsWithSentiment = $model->getCampaignsWithSentiment();
        return view('reports/fielsops_usage',['campaigns' =>  $campaignsWithSentiment, 'admin1'    => $admin1]);
    }

    public function dispatching()
    {
        $model = new ReviewModal();
    
        // Call the dispatchingchart method and store the returned data
        $chartData = $model->dispatchingchart();
    
        // Fetch admin details
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
    
        // Merge the chart data with admin data
        $data = array_merge($chartData, [
            'admin1' => $admin1
        ]);
    
        // Pass the merged data to the view
        return view('dispatching', $data);
    }
    
    public function summary()
    {
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        return view('summary',['admin1' => $admin1]);
    }

    public function search()
    {
        $search = $this->request->getVar('search');
        $technicianModel = new TechnicianModal();      
            $results = $technicianModel->getTechniciansBySearch($search);
        return $this->response->setJSON($results);
    } 

    public function filterCampaigns()
    {
        $fromDate = $this->request->getPost('from_date');
        $toDate = $this->request->getPost('to_date');
        
        // Assuming you have a model called CampaignModel
        $campaignModel = new CampaignModel();
    
        // Fetch campaigns with sentiment within the date range
        $campaigns = $campaignModel->getCampaignsWithSentiment($fromDate, $toDate);
    
        // Return the campaigns as a JSON response
        return $this->response->setJSON($campaigns);
    }

    public function filterDepartments()
    {
        $model = new CampaignModel();

        $fromDate = $this->request->getPost('from_date');
        $toDate = $this->request->getPost('to_date');

        // Get the filtered data based on the date range
        $departments = $model->getUniqueDepartments($fromDate, $toDate);

        return $this->response->setJSON($departments);
    }

    public function overview()
    {
        $userModel = new UserModel();
        $admin1 = $userModel->find(1);
        return view('overview',['admin1' => $admin1]);
    }

}

