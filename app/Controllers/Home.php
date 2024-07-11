<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function login(): string
    {
        return view('login/login');
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
        // return view('reviews');
        if (session()->get('isLoggedIn')) {
            return view('reviews');
        } else {
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

    public function notifications(): string
    {
        return view('dispatch-tab/dispatch_notifications');
    }

    public function review_widget(): string
    {
        return view('dispatch-tab/dispatch_review_widget');
    }

    public function web_widget(): string
    {
        return view('dispatch-tab/dispatch_web_widget');
    }
    public function connect_social_media(): string
    {
        return view('general-tab/general_connect_social_media');
    }
    public function branding(): string
    {
        return view('general-tab/general_branding');
    }
    public function users(): string
    {
        return view('general-tab/general_users');
    }
    public function reporting(): string
    {
        return view('general-tab/general_reporting');
    }
    public function contact_info(): string
    {
        return view('contact-card-tab/contact_information');
    }
    public function contact_template(): string
    {
        return view('contact-card-tab/contact_templates');
    }
    public function billing_subscription(): string
    {
        return view('billing/billing_subscription');
    }

    // public function connect_social_media(): string
    // {
    //     return view('setting_connect-social-media');
    // }
}
