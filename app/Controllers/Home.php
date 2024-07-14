<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
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

    public function summary(): string
    {
        return view('summary');
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

    public function reviews(): string
    {
        $data = [];
        // return view('reviews');
        if (session()->get('isLoggedIn')){ 
            $data['title'] = 'Reviews Page';
            return view('reviews', $data);
       }else{
            return redirect()->to('/');
       }
    }
    public function departments(): string
    {
        return view('departments');
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
        return view('dispatch-tab/dispatch_campaigns');
    }

    public function dispatch_notifications(): string
    {
        return view('dispatch-tab/dispatch_notifications');
    }

    public function dispatch_review_widget(): string
    {
        return view('dispatch-tab/dispatch_review_widget');
    }

    public function dispatch_web_widget(): string
    {
        return view('dispatch-tab/dispatch_web_widget');
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
    

}
