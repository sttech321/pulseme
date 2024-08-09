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
        
        $model = new CampaignModel();
        $campaignsWithSentiment = $model->getCampaignsWithSentiment();
//         echo '<pre>';
//         print_r($campaignsWithSentiment);
//         echo '</pre>';
//   die;
        return view('reports/campaigns', [
           
            'campaigns' =>  $campaignsWithSentiment,
           
        ]);
    }
    
    
    public function departments(): string
    {
        $model = new CampaignModel();
        
        // Get unique departments from the model
        $data['departments'] = $model->getUniqueDepartments();
        // echo '<pre>'; // Optional: formats the output to be more readable
        // print_r($data['departments']);
        // echo '</pre>';
        // die;
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
        // print_r($search);
        // die;
        $technicianModel = new TechnicianModal();
        
      
            $results = $technicianModel->getTechniciansBySearch($search);
         
        return $this->response->setJSON($results);
    } 
}