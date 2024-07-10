<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table;
    protected $allowedFields;
    
    // Function to store OTP
    public function storeOtp($email, $otp) {
        $data = [
            'otp' => $otp,
            'otp_expiry' => date('Y-m-d H:i:s', strtotime('+1 hour')) // Set OTP expiration time, e.g., 1 hour from now
        ];
        return $this->where('email', $email)->set($data)->update();
    }

    public function __construct()
    {
        parent::__construct();
        // Load table name from environment variable
        $this->table = getenv('USER_TABLE');
        // Load allowed fields from environment variable and convert to array
        $fields = getenv('USER_FIELD');
        $this->allowedFields = explode(',', $fields);
    }

    public function userCanLogin($usernameOrEmail, $password)
    {
        // Fetch user by username or email
        $user = $this->where('name', $usernameOrEmail)
        ->orWhere('email', $usernameOrEmail)
        ->first();

        if ($user) {
            // Extract stored password hash from the database
            $storedPasswordHash = $user['password'];

            // Verify the provided password against the stored hash
            if ($password === $storedPasswordHash) {
                return true; // Passwords match, login successful
            }
        }
        return false;
    }

    public function verifyOtp($otp) {
        $user = $this->where('otp', $otp)->first();
        if ($user && strtotime($user['otp_expiry']) > time()) {
            return true;
        }
        return false;
    }

    public function updatePassword($id,$newpassword) {
        $data = [
            'password' => $newpassword,
        ];
        return $this->where('id', $id)->set($data)->update();
    }
    
}

