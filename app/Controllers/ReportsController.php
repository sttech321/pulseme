<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CampaignModel;
use App\Models\CustomerModel;
use App\Models\TechnicianModal;
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
        $data['campaigns'] = $model->findAll();
          
        return view('reports/campaign_review',$data);
    }

    public function report_campaign()
    {
        $customerModel = new CustomerModel();
        // $customersWithCampaigns = $customerModel->getCustomersWithCampaigns();
        $model = new CampaignModel();
        $campaigns = $model->findAll();
        $sentiment = new ReviewModal();
        $sentimentcount= $sentiment->findAll();
   
        return view('reports/campaigns', [
            // 'customersWithCampaigns' => $customersWithCampaigns,
            'campaigns' => $campaigns,
            'sentiments' => $sentimentcount,
        ]);
    }
    
    
    public function departments(): string
    {
        $model = new CampaignModel();
        
        // Get unique departments from the model
        $data['campaigns'] = $model->getUniqueDepartments();
        
        return view('reports/departments', $data);
    }

    public function report_campaign_fieldsops(){
        $model = new CampaignModel();
        $data['campaigns'] = $model->findAll();
        return view('reports/fielsops_usage',$data);
    }

    public function dispatch(){

        return view('dispatch');
    }

    // public function overview(){

    //     return view('overview');
    // }

    public function search()
    {
        $search = $this->request->getVar('search');
        //print_r($search);
        //die;
        $technicianModel = new TechnicianModal();
        
        if ($search) {
            $results = $technicianModel->getTechniciansBySearch($search);
        } else {
            $results = $technicianModel->findAll(); 
        }
    
        return $this->response->setJSON($results);
    } 
}