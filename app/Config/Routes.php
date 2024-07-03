<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Usercontroller;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('/login', 'Home::login');
// $routes->get('login2', 'Home::dashboard');
// $routes->get('/forgetPass', 'UserController::forgetPass');

$routes->get('/analyse/overview11', 'Home::dashboard_copy');
$routes->get('/leaderboard/summary', 'Home::summary');
$routes->get('/send-referral', 'Home::referral');
$routes->get('/two-way-messaging', 'Home::messaging');
$routes->get('/operate/dispatch', 'Home::dispatch');
$routes->get('/chat-widget', 'Home::widget');
$routes->get('/employee-rewards', 'Home::rewards');
$routes->get('/analyze/competitor-analysisg', 'Home::analysisg');
$routes->get('/analyze/reviews/reviews', 'Home::review');
$routes->get('/analyze/dispatching', 'Home::dispatching');
$routes->get('/leaderboard/reports/departments', 'Home::departments');

$routes->get('/analyse/overview', 'UserController::dashboard');
$routes->get('/login1', 'UserController::login');
$routes->post('/loginAuth', 'UserController::loginAuth');
$routes->get('logout', 'UserController::logout');

$routes->add('/forgotPassword', 'UserController::forgotPassword');
$routes->add('/password/verify', 'UserController::verifyOtp');
$routes->add('/password/reset', 'UserController::resetPassword');
