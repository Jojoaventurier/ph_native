<?php
session_start();

require_once '../vendor/autoload.php';

use App\Controllers\HomeController;

// Routing setup
$routes = require_once '../config/routes.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if (isset($routes[$requestUri])) {
    $action = $routes[$requestUri];
    [$controller, $method] = explode('@', $action);
    $controller = "App\\Controllers\\$controller";

    if (class_exists($controller) && method_exists($controller, $method)) {
        $instance = new $controller();
        echo $instance->$method();
        exit;
    }
}

http_response_code(404);
echo "404 Not Found";