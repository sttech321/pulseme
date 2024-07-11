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
        return view('dispatch_campaigns');
    }

    public function connect_social_media(): string
    {
        return view('setting_connect-social-media');
    }
        
}
