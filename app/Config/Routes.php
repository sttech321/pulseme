<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/loginAuth', 'UserController::loginAuth');
$routes->add('/forgot-password', 'UserController::forgotPassword');
$routes->post('/forgot-password/send-otp', 'UserController::sendOtp');
$routes->add('/forgot-password/verify-otp', 'UserController::verifyOtp');
$routes->post('/forgot-password/verify-otp/process', 'UserController::verifyOtpProcess');
$routes->add('/forgot-password/reset', 'UserController::resetPassword');
$routes->post('/forgot-password/reset/process', 'UserController::resetPasswordProcess');
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
$routes->get('/analyze/reviews', 'Home::reviews');
// $routes->get('/analyze/dispatching', 'Home::dispatching');
// $routes->get('/analyze/dispatching', 'TechnicianController::dispatching');
$routes->get('/leaderboard/reports/departments', 'Home::departments');
// $routes->get('/analyse/overview', 'UserController::dashboard');
$routes->get('/logs/outbound', 'Home::outbound');
// $routes->get('/login', 'UserController::login');

$routes->get('logout', 'UserController::logout');




$routes->get('/show-access-token', 'TechnicianController::showAccessToken');
$routes->get('/get-response-data', 'TechnicianController::gettechniciandata');

$routes->post('technician/uploadImage', 'TechnicianController::uploadImage');
$routes->get('search', 'TechnicianController::search');
$routes->get('/settings/dispatch/campaigns', 'Home::campaigns');
$routes->get('settings/general/connect-social-media', 'Home::connect_social_media');

// $routes->get('/welcome', 'Home::welcome');
<<<<<<< .mine
$routes->post('/insert_campaign', 'DispatchController::insert_campaign');








=======

$routes->get('/dispatch-tab/demo-test', 'DispatchController::insert_campaign');
// $routes->post('/insert_campaign', 'DispatchController::insert_campaign');
// $routes->get('/display-tables', 'UserController::displayTableNames');
$routes->get('/display-tables', 'CampaignController::create');
$routes->post('/display-tables', 'CampaignController::create');



>>>>>>> .theirs
