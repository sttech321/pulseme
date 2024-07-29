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
$routes->get('/logout', 'UserController::logout');
$routes->post('/loginAuth', 'UserController::loginAuth');
$routes->add('/forgot-password', 'UserController::forgotPassword');
$routes->post('/forgot-password/send-otp', 'UserController::sendOtp');
$routes->add('/forgot-password/verify-otp', 'UserController::verifyOtp');
$routes->post('/forgot-password/verify-otp/process', 'UserController::verifyOtpProcess');
$routes->add('/forgot-password/reset', 'UserController::resetPassword');
$routes->post('/forgot-password/reset/process', 'UserController::resetPasswordProcess');
$routes->get('/settings/dispatch/campaigns', 'Campaign::index');
$routes->post('/settings/dispatch/campaigns/create', 'Campaign::create');
$routes->post('/settings/dispatch/campaigns/update/(:num)', 'Campaign::update/$1');
$routes->get('/settings/dispatch/campaigns/delete/(:num)', 'Campaign::delete/$1');

$routes->get('/settings/dispatch/notifications', 'Home::dispatch_notifications');
$routes->get('/settings/dispatch/review-widget', 'Home::dispatch_review_widget');
$routes->get('/settings/dispatch/web_widget', 'Home::dispatch_web_widget');
$routes->get('/settings/billing', 'Home::billing_subscription');
$routes->get('/settings/dispatch/campaign', 'Home::campaigns');
$routes->get('/analyse/overview', 'Home::overview');
$routes->get('/leaderboard/summary', 'Home::summary');
$routes->get('/send-referral', 'Home::referral');
$routes->get('/two-way-messaging', 'Home::messaging');
$routes->get('/operate/dispatch', 'CustomerController::dispatch');
$routes->get('getAllTechnicians', 'CustomerController::getAllTechnicians');
$routes->get('search', 'CustomerController::search');
$routes->get('/chat-widget', 'Home::widget');
$routes->get('/employee-rewards', 'Home::rewards');
$routes->get('/analyze/competitor-analysisg', 'Home::analysisg');

$routes->get('/logs/outbound', 'Home::outbound');
$routes->get('/analyze/reviews/social-reviews', 'ReviewController::social_review');
$routes->get('/operate/contact-card', 'Home::contact_card');
$routes->get('/operate/quick-actions', 'Home::quick_action');
$routes->get('/settings/general/connect-social-media', 'Home::general_connect_social_media');
$routes->get('/settings/general/branding', 'Home::general_branding');
$routes->get('/settings/general/users', 'Home::general_users');
$routes->get('/settings/general/reporting', 'Home::general_reporting');

$routes->get('/settings/contact-card/contact-information', 'Home::contact_information');
$routes->get('/settings/contact-card/templates', 'Home::contact_templates');

$routes->get('/settings/billing/billing_subscription', 'Home::billing_subscription');

$routes->get('settings/general/connect-social-media', 'Home::connect_social_media'); 

$routes->get('/dispatch-tab/demo-test', 'DispatchController::insert_campaign');
$routes->post('/analyze/reviews/create', 'ReviewController::insert');

$routes->get('/settings/dispatch/campaigns', 'Campaign::index');
$routes->get('/analyze/reviews', 'Campaign::reviews');
$routes->get('application/bio/(:num)', 'Campaign::technician_bio/$1');
$routes->get('application/pulsecheck/(:segment)', 'Campaign::pulse_check/$1');

$routes->get('/operate', 'CustomerController::dispatch');
$routes->post('/operate/dispatch/create/(:num)', 'CustomerController::create/$1');

$routes->get('/operate', 'CustomerController::sendbioEmail');
$routes->post('/operate', 'CustomerController::sendbioEmail');

$routes->get('/leaderboard/reports/campaigns', 'ReportsController::report_campaign');
$routes->get('leaderboard/reports/campaign-reviews', 'ReportsController::report_campaign_reviews');
$routes->get('/leaderboard/reports/departments', 'ReportsController::departments');
$routes->get('/leaderboard/reports/fieldops-usage', 'ReportsController::report_campaign_fieldsops');


