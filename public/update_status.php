<?php
// Define the environment
define('ENVIRONMENT', 'development');

// Adjust the path to your CodeIgniter index.php
require 'index.php';

// Load CodeIgniter and the ReviewController
$CI = &get_instance();
$CI->load->controller('ReviewController');
$CI->reviewcontroller = new \App\Controllers\ReviewController();

// Fetch or define customer email if needed
$customer_email = ''; // Ideally, this should be fetched from your database or configuration
$status = 'pending';

// Call the method to update status
$CI->reviewcontroller->updatestatus($customer_email, $status);
