<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class UserController extends Controller
{
    public function login()
    {
        // Check if user is already logged in
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/analyse/overview');
        }
        helper(['form']);
        return view('login/login');
    }
    
    public function loginAuth()
    {
        $model = new UserModel();
        $usernameOrEmail = $this->request->getVar('email');
        $password = $this->request->getVar('password');      
        $isLoggedIn = $model->userCanLogin($usernameOrEmail, $password);
        
        if ($isLoggedIn) {
            // Set session data
            $userData = [ 
                'username' => $usernameOrEmail,
                'isLoggedIn' => true
                // Add more data as needed
            ];
            session()->set($userData);
            return redirect()->to('/analyse/overview');
        } else {
            return redirect()->to('/login1')->with('error', 'Invalid username/email or password');
        }
    }
    
    public function dashboard()
    {
       if (session()->get('isLoggedIn')){ 
            return view('dashboard');
       }else{
            return redirect()->to('/login1');
       }
    }

    public function logout()
    {
        // Destroy session data on logout
        session()->destroy();
        return redirect()->to('/login1');
    }


    public function forgotPassword() {
        // Load the request library
        $email = $this->request->getVar('email');
        // Instantiate the UserModel
        $model = new UserModel();
        // Check if the user exists
        $user = $model->where('email', $email)->first();
        // Check if user exists and handle the logic accordingly
        if ($user) {
            // User exists, generate OTP and store it
            $otp = rand(100000, 999999); // Generate a 6-digit OTP
            if ($model->storeOtp($email, $otp)) {
                // Send the OTP to the user's email
                $this->sendOtpEmail($email, $otp);
                return view('verify_otp');
                echo 'OTP has been sent to your email.';
            } else {
                echo 'Failed to store OTP. Please try again.';
            }
        } else {
            echo 'User does not exist.';
        }
        return view('forgotPassword');
    }


    public function sendOtpEmail($email, $otp) {
        $emailService = \Config\Services::email();
        // Load SMTP settings from .env
        $emailService->initialize([
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPPort' => intval($_ENV['SMTP_PORT']),
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            'mailType' => 'html',
            'charset' => 'utf-8'
        ]);

        $emailService->setFrom($_ENV['SMTP_USER'], '');
        $emailService->setTo($email);
        $emailService->setSubject('Password Reset OTP');
        $emailService->setMessage('Your OTP for password reset is: ' . $otp);
        if (!$emailService->send()) {
            // return redirect()->to('/forgotPassword')->with('error', 'Failed to send OTP. Please try again.');
            echo $emailService->printDebugger(['headers']);
        }else{
            echo'success';
            return view('verify_otp');
        }
    }
    
    
    public function verifyOtp() {
        helper(['form']);
        
        if ($this->request->getMethod() == 'post') {    
            $rules = [
                'otp' => 'required'
            ];
            
            if (!$this->validate($rules)) {
                return view('verify_otp', [
                    'validation' => $this->validator
                ]);
            } else {
                $otp = $this->request->getVar('otp');
                $model = new UserModel();
                
                if ($model->verifyOtp($otp)) {
                    return view('reset_password');
                } else {
                    return redirect()->to('/password/verify')->with('error', 'Incorrect OTP. Please try again.');
                }
            }
        }
        
        return view('verify_otp');
    }


    public function resetPassword() {
        helper(['form']);
        
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'password' => 'required|min_length[6]',
                'confirm_password' => 'required|matches[password]'
            ];
            
            if (!$this->validate($rules)) {
                return view('reset_password', [
                    'validation' => $this->validator
                ]);
            } else {
                $password = $this->request->getVar('password');
                $model = new UserModel();
                $model->resetPassword($password);
                
                return redirect()->to('/login1')->with('success', 'Password reset successful. Please login with your new password.');
            }
        }
        
        return view('reset_password');
    }

}

