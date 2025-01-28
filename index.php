<?php
require_once 'includes/header.php';

// Get current path
$request = $_SERVER['REQUEST_URI'];
$base_path = '/Dr-Meshkat-Ahmed';
$request_path = str_replace($base_path, '', $request);

// Remove query string
if (($pos = strpos($request_path, '?')) !== false) {
    $request_path = substr($request_path, 0, $pos);
}

// Split path into segments
$path_segments = explode('/', trim($request_path, '/'));

// Define routes
$routes = [
    '' => 'home.php',
    'biodata' => 'biodata/index.php',
    'blog' => 'blog/index.php',
    'contact' => 'contact.php'
];

// Handle main routes
if (isset($path_segments[0]) && array_key_exists($path_segments[0], $routes)) {
    $page = $routes[$path_segments[0]];
    
    // Handle biodata subpages
    if ($path_segments[0] === 'biodata' && isset($path_segments[1])) {
        $subpage = $path_segments[1] . '.php';
        $subpage_path = 'biodata/' . $subpage;
        
        if (file_exists($subpage_path)) {
            include $subpage_path;
        } else {
            include '404.php';
        }
    } else {
        include $page;
    }
} else {
    // Check if direct file exists
    $file_path = __DIR__ . $request_path;
    if (file_exists($file_path) && is_file($file_path)) {
        return false; // Serve the requested resource as-is
    } else {
        include '404.php';
    }
}

require_once 'includes/footer.php';