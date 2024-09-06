<?php
/*
 *---------------------------------------------------------------
 * CHECK PHP VERSION
 *---------------------------------------------------------------
 */

$minPhpVersion = '8.1'; // If you update this, don't forget to update `spark`.
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION
    );

    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo $message;

    exit(1);
}

/*
 *---------------------------------------------------------------
 * SET THE CURRENT DIRECTORY
 *---------------------------------------------------------------
 */

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Ensure the current directory is pointing to the front controller's directory
if (getcwd() . DIRECTORY_SEPARATOR !== FCPATH) {
    chdir(FCPATH);
}

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// LOAD OUR PATHS CONFIG FILE
// This is the line that might need to be changed, depending on your folder structure.
require FCPATH . '../app/Config/Paths.php';
// ^^^ Change this line if you move your application folder

$paths = new Config\Paths();

// LOAD THE FRAMEWORK BOOTSTRAP FILE
require $paths->systemDirectory . '/Boot.php';

exit(CodeIgniter\Boot::bootWeb($paths));


require_once __DIR__ . '/../vendor/autoload.php'; // Ensure Composer autoloader is included

use Dotenv\Dotenv;

// Load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Define ROOTPATH if not already defined
if (!defined('ROOTPATH')) {
    define('ROOTPATH', realpath(__DIR__ . '/../') . DIRECTORY_SEPARATOR);
}

// The rest of your CodeIgniter application bootstrap...
$app = require_once realpath(__DIR__ . '/../') . '/bootstrap/app.php';

// $app->run();
 
if (php_sapi_name() === 'cli') {
    global $argv;
   
    echo "CLI mode detected\n";
    // Initialize CodeIgniter for CLI use
    $app = CodeIgniter\CodeIgniter::createApplication($paths);
 
    // Extract command-line arguments
    $command = isset($argv[1]) ? $argv[1] : '';
 
    // Handle the CLI command
    if ($command === 'updatestatus') {
        require_once APPPATH . 'Controllers/ReviewController.php';
        // Handle the CLI command
        $customer_email = isset($argv[2]) ? $argv[2] : null;
        $status = isset($argv[3]) ? $argv[3] : null;
 
        $controller = new \App\Controllers\ReviewController();
        $controller->updatestatus($customer_email, $status);
        echo "Review processed for $customer_email with status $status\n";
        exit(0); // End the script after processing the command
    } else {
        echo "Unknown command: $command\n";
        exit(1);
    }
} else {
    // Web request handling
    $app->run();
}