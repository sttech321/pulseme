<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use CodeIgniter\Email\Email;

class UserController extends Controller
{    
    public function __construct() {
        // Load session service
        $this->session = \Config\Services::session();
    }

    public function loginAuth() {
        helper(['form']);
        $model = new UserModel();
    
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
    
        // Validate email and password
        if (!$email || !$password) {
            session()->setFlashdata('error', 'Email and Password are required');
            return redirect()->to('/');
        }
    
        // Check if user can log in
        $isLoggedIn = $model->userCanLogin($email, $password);
    
        if ($isLoggedIn) {
            // Set session data
            $userData = [
                'username' => $email,
                'isLoggedIn' => true
            ];
            session()->set($userData);
    
            // Check if a redirect URL is stored in the session
            $redirectUrl = session()->get('redirect_back') ?? '/analyze/reviews';
    
            // Clear the redirect URL from the session
            session()->remove('redirect_back');
    
            // Redirect the user to the intended page or default to the reviews page
            return redirect()->to($redirectUrl);
        } else {
            session()->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('/');
        }
    }
    
    public function logout() {
        // Destroy session data on logout
        session()->destroy();
        return redirect()->to('/');
    }

    public function forgotPassword() {
       // Pass session to the view
       $data['session'] = $this->session;

       // Load the 'forgotPassword' view with data
       return view('forgotPassword', $data);
    }

    public function sendOtp() {
        helper(['form']);
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $user = $model->getUserByEmail($email);
        if ($user) {
            $otp = rand(100000, 999999); // Generate a 6-digit OTP
            if ($model->setOtp($email, $otp)) {
                $this->sendOtpEmail($email, $otp);
                // Store email in session for use in verify OTP action
                $expirationTime = Time::createFromTimestamp(time() + 3600);
                session()->set('otp_email', $email, $expirationTime);
                $this->session->setFlashdata('success', 'OTP has been sent to your email.');
                return redirect()->to('/forgot-password/verify-otp');
            } else {
                $this->session->setFlashdata('error', 'Failed to store OTP. Please try again.');
            }
        } else if(!empty($email)){
            session()->setFlashdata('error', 'User does not exist.');
        }
        return redirect()->to('/forgot-password');
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

        $emailService->setFrom($_ENV['SMTP_USER'], 'summitRA');
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
        // Pass session to the view
       $data['session'] = $this->session;
       //var_dump($data);
       // Load the 'verifyOtp' view with data
       return view('verifyOtp', $data);
    }

    public function verifyOtpProcess() {
        helper(['form']);

        if ($this->request->getMethod() == 'POST') {
            // Retrieve email from session
            $email = session()->get('otp_email');
            if ($email) {
                $rules = [
                    'otp' => 'required'
                ];
                if (!$this->validate($rules)) {
                    return view('verifyOtp', [
                        'validation' => $this->validator
                    ]);
                } else {
                    $otp = $this->request->getVar('otp');
                    $model = new UserModel();
                    if ($model->verifyOtp($email, $otp)) {
                        return redirect()->to('/forgot-password/reset');
                    } else {
                        $this->session->setFlashdata('error', 'Incorrect OTP. Please try again.');
                        return redirect()->to('/forgot-password/verify-otp');
                    }
                }
            }else{
                $this->session->setFlashdata('error', 'Please try again.');
                return redirect()->to('/forgot-password');
            }
        }
       // Load the 'verifyOtp' view with data
       return redirect()->to('/forgot-password/verify-otp');
    }

    public function resetPassword() {
        // Pass session to the view
        $data['session'] = $this->session;
        // var_dump($data);
        // Load the 'verifyOtp' view with data
        return view('resetPassword', $data);
    }

    public function resetPasswordProcess () {
        // Load necessary helpers and libraries
        helper(['form']);

        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'password' => 'required',
                'confirmPassword' => 'required'
            ];
            if (!$this->validate($rules)) {
                return view('resetPassword', [
                    'validation' => $this->validator
                ]);
            }else{
                // Retrieve the passwordS from the form
                $password = $this->request->getVar('password');
                $confirmPassword = $this->request->getVar('confirmPassword');
                if($password !== $confirmPassword){
                    $this->session->setFlashdata('error', 'Confirm password does not match.');
                    return redirect()->to('/forgot-password/verify-otp');
                }
                // Load the UserModel
                $model = new UserModel();
                $email = session()->get('otp_email');
                $result = $model->updatePassword($email, $password);
                if ($result) {
                    // Clear the session data
                    session()->remove('otp_email');
                    session()->setFlashdata('success', 'Password updated successfully.');
                    return redirect()->to('/');
                } else {
                    $this->session->setFlashdata('error', 'Failed to update password.');
                    return redirect()->to('/forgot-password');
                }
            }
        }
    }

    public function profile()
    {
        $userModel = new UserModel();
        $userdata = $userModel->findAll();
        $admin1 = $userModel->find(1);
        $data = [
            'admin' => $userdata,
            'admin1' => $admin1,
        ];
        return view('layouts/myprofile', $data);
    }
    
    public function updateProfile($id)
    {
        $userModel = new UserModel();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email')
        ];

        // Update the first row (assuming 'id' is the primary key and you want to update row 1)
        $userModel->update($id, $data);

        return redirect()->to('/user-preferences')->with('status', 'Profile updated successfully');
    }

    public function clear()
    {
        // Execute the cache clear command
        // system('php spark cache:clear');
        // // Display a confirmation message
        // echo "Cache cleared!";
        return view('clear_cache');
    }

}
