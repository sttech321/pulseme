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
        return view('login');
    }

    public function dashboard(): string
    {
        return view('dashboard');
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

    public function dispatching(): string
    {
        return view('dispatching');
 
    }

    public function reviews(): string
    {
        return view('review');
 
    }

    public function departments(): string
    {
        return view('departments');
 
    }
}
