<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CampaignModel;
use App\Models\TechnicianModal;
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
        $data['campaigns'] = $model->findAll();
          
        return view('reports/campaign_review',$data);
    }

    public function report_campaign()
    {
        
        
        $model = new CampaignModel();
        $campaignsWithSentiment = $model->getCampaignsWithSentiment();
        return view('reports/campaigns', [
            'campaigns' =>  $campaignsWithSentiment,
        ]);
    }

    public function departments(): string
    {
        $model = new CampaignModel();
        $data['departments'] = $model->getUniqueDepartments();
        return view('reports/departments', $data);
    }


    public function report_campaign_fieldsops(){
        $model = new CampaignModel();
        $data['campaigns'] = $model->findAll();
        return view('reports/fielsops_usage',$data);
    }

    public function dispatch()
    {
        $model = new ReviewModal();
        // Call the dispatchingchart method and store the returned data
        $chartData = $model->dispatchingchart();
    
        // Pass the chart data to the view
        return view('dispatch', $chartData);
    }
    

    public function summary()
    {
        return view('summary');
    }

    public function search()
    {
        $search = $this->request->getVar('search');
        $technicianModel = new TechnicianModal();      
            $results = $technicianModel->getTechniciansBySearchs($search);
        return $this->response->setJSON($results);
    } 

}

