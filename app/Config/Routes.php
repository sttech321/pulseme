<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Usercontroller;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');

// $routes->get('login2', 'Home::dashboard');
// $routes->get('/forgetPass', 'UserController::forgetPass');

$routes->get('/analyse/overview', 'Home::overview');
$routes->get('/leaderboard/summary', 'Home::summary');
$routes->get('/send-referral', 'Home::referral');
$routes->get('/two-way-messaging', 'Home::messaging');
// $routes->get('/operate/dispatch', 'Home::dispatch');
$routes->get('/operate/dispatch', 'TechnicianController::dispatch');
$routes->get('/chat-widget', 'Home::widget');
$routes->get('/employee-rewards', 'Home::rewards');
$routes->get('/analyze/competitor-analysisg', 'Home::analysisg');
$routes->get('/analyze/reviews/reviews', 'Home::reviews');
// $routes->get('/analyze/dispatching', 'Home::dispatching');
// $routes->get('/analyze/dispatching', 'TechnicianController::dispatching');
$routes->get('/leaderboard/reports/departments', 'Home::departments');
// $routes->get('/analyse/overview', 'UserController::dashboard');
$routes->get('/logs/outbound', 'Home::outbound');
// $routes->get('/login', 'UserController::login');
$routes->post('/loginAuth', 'UserController::loginAuth');
$routes->get('logout', 'UserController::logout');

$routes->add('/forgotPassword', 'UserController::forgotPassword');
$routes->add('/password/verify', 'UserController::verifyOtp');
$routes->add('/password/reset', 'UserController::resetPassword');
$routes->get('/show-access-token', 'TechnicianController::showAccessToken');
$routes->get('/get-response-data', 'TechnicianController::gettechniciandata');

$routes->post('technician/uploadImage', 'TechnicianController::uploadImage');
$routes->get('search', 'TechnicianController::search');
$routes->get('/settings/dispatch/campaigns', 'Home::campaigns');
$routes->get('settings/general/connect-social-media', 'Home::connect_social_media');

// $routes->get('/welcome', 'Home::welcome');

