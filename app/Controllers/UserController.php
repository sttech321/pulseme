<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use CodeIgniter\Email\Email;

class UserController extends Controller
{
    public function login()
    {
        // Check if user is already logged in
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/analyze/reviews/reviews');
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
            return redirect()->to('/analyze/reviews/reviews');
        } else {
            session()->setFlashdata('error', 'Invalid username/email or password');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        // Destroy session data on logout
        session()->destroy();
        return redirect()->to('/');
    }


    public function forgotPassword() {
        $email = $this->request->getVar('email');
        $model = new UserModel();
        $user = $model->where('email', $email)->first();
       
        if ($user) {
            $otp = rand(100000, 999999); // Generate a 6-digit OTP
            if ($model->storeOtp($email, $otp)) {
                $this->sendOtpEmail($email, $otp);
                echo 'OTP has been sent to your email.';
                return view('verify_otp');
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
        $emailService->initialize([
            'protocol' => 'smtp',
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPPort' => intval($_ENV['SMTP_PORT']),
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            'mailType' => 'html',
            'charset'  => 'utf-8',
            'newline'  => "\r\n"
        ]);

        $emailService->setFrom($_ENV['SMTP_USER'], 'Your App Name');
        $emailService->setTo($email);
        $emailService->setSubject('Password Reset OTP');
        $emailService->setMessage('Your OTP for password reset is: ' . $otp);

        if (!$emailService->send()) {
            echo $emailService->printDebugger(['headers']);
        } else {
            echo 'OTP email sent successfully.' . $otp;
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
                var_dump($otp);
                if ($model->verifyOtp($otp)) {
                    // return view('reset_password');
                    echo'jshsh';
                } else {
                    echo 'Incorrect OTP. Please try again.';
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
                
                return redirect()->to('/')->with('success', 'Password reset successful. Please login with your new password.');
            }
        }
        
        return view('reset_password');
    }

}
