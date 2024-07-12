<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table;
    protected $allowedFields;

    // Construc Function
    public function __construct() {
        parent::__construct();
        // Load table name from environment variable
        $this->table = getenv('USER_TABLE');
        // Load allowed fields from environment variable and convert to array
        $fields = getenv('USER_FIELD');
        $this->allowedFields = explode(',', $fields);
    }

    // Function to set OTP
    public function setOtp($email, $otp) {
        $data = [
            'otp' => $otp,
            'otp_expiry' => date('Y-m-d H:i:s', strtotime('+10 minutes', time()))// Set OTP expiration time, e.g., 10 minutes from now
        ];
        return $this->where('email', $email)->set($data)->update();
    }

    // Check user can login
    public function userCanLogin($email, $password) {
        // Fetch user by username or email
        $user = $this->where('email', $email)->first();
        if ($user) {
            // Load security library to hash the password
            // $this->load->library('security');
            // Extract stored password hash from the database
            $storedPasswordHash = $user['password'];
            // Verify the provided password against the stored hash
            if (password_verify($password, $storedPasswordHash)) {
                return true; // Passwords match, login successful
            }
        }
        return false;
    }

    // Function to get user by email
    public function getUserByEmail($email) {
        // Enable Database Profiler (optional, if not already enabled in config)
        //if (ENVIRONMENT !== 'production') {
            // $db = db_connect();
            // $db->enableQueryLog();
        //}
        $user = $this->where('email', $email)->first();
        // Accessing logged queries
        //$db = db_connect();
        $db = db_connect();
            $queries = $db->getLastQuery(); // Get last executed query

            //log_message('debug', 'Query: ' . $queries);
        //var_dump($queries);
        if($user){
            return $user;
        }
        return false;
    }

    // Function to verify OTP
    public function verifyOtp($email, $otp) {
        $user = $this->where('email', $email)->where('otp', $otp)->first();
        // $db = db_connect();
        // $queries = $db->getLastQuery();
        // var_dump($user);
        // die;
        if ($user && isset($user['otp_expiry']) && strtotime($user['otp_expiry']) > time()) {
            return true;
        }
        return false;
    }

    // Function to update password
    public function updatePassword($email,$password) {
        // Load security library to hash the password
        // $this->load->library('security');
        // Hash the provided password using CodeIgniter's built-in hashing function
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'password' => $hashed_password,
        ];
        return $this->where('email', $email)->set($data)->update();
    }
}
