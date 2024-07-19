<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use CodeIgniter\Email\Email;


class ReportsController extends BaseController {

    public function report_campaign_reviews(){
        return view('reports/campaign_review');
    }

    public function report_campaign(){
        return view('reports/campaigns');
    }

    public function report_campaign_departments(){
        return view('reports/departments');
    }

    public function report_campaign_fieldsops(){
        return view('reports/fielsops_usage');
    }

}