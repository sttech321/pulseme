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

    public function report_campaign(){
        $model = new CampaignModel();
        $data['campaigns'] = $model->findAll();

        $db = \Config\Database::connect();
        
        $builder = $db->table('campaign');
        $builder->select('campaign.*, customer.*');
        $builder->join('customers_bio', 'campaign.customer_id = customers_bio.customer_id');
        $query = $builder->get();
        
        $data['campaign_reviews'] = $query->getResult();

        return view('reports/campaigns',$data);
    } 

    // public function campaign_bios(){
    //     $db = \Config\Database::connect();
        
    //     $builder = $db->table('campaigns');
    //     $builder->select('campaigns.*, customers.*');
    //     $builder->join('customers', 'campaigns.customer_id = customers.id');
    //     $query = $builder->get();
        
    //     $data['campaign_reviews'] = $query->getResult();
    
    //     return view('reports/campaigns', $data);
    // }

    public function report_campaign_departments(){
        return view('reports/departments');
    }


    public function report_campaign_fieldsops(){
        $model = new CampaignModel();
        $data['campaigns'] = $model->findAll();
        return view('reports/fielsops_usage',$data);
    }



}