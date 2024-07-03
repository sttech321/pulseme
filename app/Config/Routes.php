<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Home::login');

$routes->get('/analyse/overview', 'Home::dashboard');

$routes->get('/leaderboard/summary', 'Home::summary');

$routes->get('/send-referral', 'Home::referral');

$routes->get('/two-way-messaging', 'Home::messaging');

$routes->get('/operate/dispatch', 'Home::dispatch');

$routes->get('/chat-widget', 'Home::widget');

$routes->get('/employee-rewards', 'Home::rewards');

$routes->get('/analyze/competitor-analysisg', 'Home::analysisg');

$routes->get('/analyse/reviews/reviews', 'Home::reviews');

$routes->get('/analyze/dispatching', 'Home::dispatching');

$routes->get('/leaderboard/reports/departments', 'Home::departments');

// $routes->get('/leaderboard/reports/departments', 'Home::departments');
