<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // die("555555555");
        return view('login/login');
    }

    public function login(): string
    {
        $data['title'] = 'Login Page';
        return view('login/login', $data);
    }

    public function overview(): string
    {
        return view('overview');
    }


    public function referral(): string
    {
        return view('referral');
    }

    public function messaging(): string
    {
        return view('messaging');
    }

    public function dispatch(): string
    {
        return view('dispatch');
    }

    public function widget(): string
    {
        return view('widget');
    }

    public function rewards(): string
    {
        return view('rewards');
    }

    public function analysisg(): string
    {
        return view('analysisg');
    }

    public function welcome(): string 
    {
        return view('dashboard');
    }
    public function outbound(): string
    {
        return view('outbound');
    }

    public function campaigns(): string
    {
        return view('dispatchTab/dispatchCampaigns');
    }

    public function dispatch_notifications(): string
    {
        return view('dispatchTab/dispatch_notifications');
    }

    public function dispatch_review_widget(): string
    {
        return view('dispatchTab/dispatch_review_widget');
    }

    public function dispatch_web_widget()
    {
        return view('dispatchTab/dispatch_web_widget');
    }

    public function connect_social_media(): string
    {
        return view('setting_connect-social-media');
    }
    public function billing_subscription(): string
    {
        return view('billing/billing_subscription');
    }

    public function social_review(): string
    {
        return view('social_review');
    }

    public function contact_card(): string
    {
        return view('contact_card');
    }

    public function quick_action(): string
    {
        return view('quick_action');
    }
    
    public function general_connect_social_media(): string
    {
        return view('general-tab/general_connect_social_media');
    }

    public function general_branding(): string
    {
        return view('general-tab/general_branding');
    }

    public function general_reporting(): string
    {
        return view('general-tab/general_reporting');
    }

    public function general_users(): string
    {
        return view('general-tab/general_users');
    }
        
}
