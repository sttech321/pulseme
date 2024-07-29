<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CampaignModel;
use App\Models\CustomerModel;
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
        $customersWithCampaigns = $customerModel->getCustomersWithCampaigns();
        $model = new CampaignModel();
        $campaigns = $model->findAll();
    
        return view('reports/campaigns', [
            'customersWithCampaigns' => $customersWithCampaigns,
            'campaigns' => $campaigns
        ]);
    }
    
    
    public function departments(): string
    {
        $model = new CampaignModel();
        $data['campaigns'] = $model->findAll();
        return view('reports/departments',$data);
    }

    public function report_campaign_fieldsops(){
        $model = new CampaignModel();
        $data['campaigns'] = $model->findAll();
        return view('reports/fielsops_usage',$data);
    }

}