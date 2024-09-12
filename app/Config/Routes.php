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
 
// Public routes (accessible without authentication)
$routes->get('/', 'Home::index');
$routes->get('/logout', 'UserController::logout');
$routes->post('/loginAuth', 'UserController::loginAuth');
$routes->add('/forgot-password', 'UserController::forgotPassword');
$routes->post('/forgot-password/send-otp', 'UserController::sendOtp');
$routes->add('/forgot-password/verify-otp', 'UserController::verifyOtp');
$routes->post('/forgot-password/verify-otp/process', 'UserController::verifyOtpProcess');
$routes->add('/forgot-password/reset', 'UserController::resetPassword');
$routes->post('/forgot-password/reset/process', 'UserController::resetPasswordProcess');
$routes->get('/thankyou', 'ReviewController::thankyou');
 
// Authenticated routes (require authentication) - No token added
// $routes->group('', ['filter' => 'authcheck'], function ($routes) {
    // Routes for viewing reviews without authentication
    $routes->get('/analyze/reviews/social-reviews', 'ReviewController::social_review');
    // Campaign settings
   
    $routes->post('/settings/dispatch/campaigns/create', 'Campaign::create');
    $routes->post('/settings/dispatch/campaigns/update/(:num)', 'Campaign::update/$1');
    $routes->get('/settings/dispatch/campaigns/delete/(:num)', 'Campaign::delete/$1');
 
    // Dispatch settings
    $routes->get('/settings/dispatch/notifications', 'Home::dispatch_notifications');
    $routes->get('/settings/dispatch/review-widget', 'Home::dispatch_review_widget');
    $routes->get('/settings/dispatch/web_widget', 'Home::dispatch_web_widget');
 
    // Other settings and actions
    $routes->get('/settings/billing', 'Home::billing_subscription');
    $routes->get('/settings/dispatch/campaign', 'Home::campaigns');
 
 
    $routes->get('/send-referral', 'Home::referral');
    $routes->get('/two-way-messaging', 'Home::messaging');
    $routes->post('getAllTechnicians', 'CustomerController::getAllTechnicians');
    $routes->post('search', 'CustomerController::search');
    $routes->get('/employee-rewards', 'Home::rewards');
    $routes->get('/logs/outbound', 'Home::outbound');
 
    // Additional campaign routes
    $routes->get('application/bio/(:num)', 'Campaign::technician_bio/$1');
    $routes->get('application/pulsecheck/(:segment)', 'Campaign::pulse_check/$1');
    $routes->post('application/pulsecheck/(:segment)', 'ReviewController::submitReview/$1');
 
    // Report routes
 
    $routes->get('leaderboard/reports/campaign-reviews', 'ReportsController::report_campaign_reviews');
    $routes->get('/leaderboard/reports/departments', 'ReportsController::departments');
    $routes->get('/leaderboard/reports/fieldops-usage', 'ReportsController::report_campaign_fieldsops');
    $routes->post('/leaderboard/reports/campaigns/search', 'ReportsController::search');
    $routes->post('/leaderboard/reports/campaigns/filter', 'ReportsController::filterCampaigns');
    $routes->post('/leaderboard/reports/filterDepartments', 'ReportsController::filterDepartments');
 
    // Contact card routes
 
    $routes->post('/contact-card', 'ContactcardController::create_contactcard');
 
    // Example routes
    $routes->get('/example', 'TestController::data');
    $routes->post('example/submit', 'CustomerController::create_dispatch');
    $routes->post('searchbar', 'Campaign::search');
 
    // Miscellaneous
    $routes->get('/cron-job', 'ReviewController::updatestatus');
    $routes->get('reviews/export-csv', 'ReviewController::exportCsv');
    $routes->get('/dispatch-tab/demo-test', 'DispatchController::insert_campaign');
    $routes->post('/analyze/reviews/approve', 'ReviewController::approveReview');
    $routes->post('/analyze/reviews/update/(:num)', 'ReviewController::update/$1');
// });
 
// Authenticated routes (require authentication and token)
// $routes->group('', ['filter' => ['authcheck', 'appendqueryparam']], function ($routes) {
    // Review actions
 
    $routes->get('/analyze/reviews', 'ReviewController::reviews');
    $routes->post('/analyze/reviews/get', 'ReviewController::getReviewsByCampaign');
    $routes->get('/settings/dispatch/campaigns', 'Campaign::index');
    $routes->get('/settings/contact-card/contact-information', 'ContactcardController::contact_information');
    $routes->get('/settings/contact-card/templates', 'ContactcardController::contact_templates');
    $routes->post('analyze/reviews/social-reviews/(:num)', 'ReviewController::google_review_credit/$1');
    $routes->post('/analyze/reviews/social-reviews/update', 'ReviewController::update_social_review');
    $routes->post('/analyze/reviews/social-reviews/delete', 'ReviewController::delete_social_review');
    $routes->get('/leaderboard/summary', 'ReportsController::summary');
    $routes->get('/leaderboard/reports/campaigns', 'ReportsController::report_campaign');
    $routes->get('/analyze/overview', 'Home::overview');
    // Operations routes
    $routes->get('/operate', 'CustomerController::dispatch');
    $routes->post('/operate/dispatch/create/', 'CustomerController::create');
    $routes->get('/operate/dispatch', 'CustomerController::dispatch');
    $routes->get('/operate/contact-card', 'Home::contact_card');
    $routes->get('/operate/quick-actions', 'Home::quick_action');
// });
 
// Route for chart
$routes->get('/chart', 'ChartController::index');