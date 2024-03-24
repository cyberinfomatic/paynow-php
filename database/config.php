<?php

// Database Configuration
$db_host = 'localhost';
$db_user = 'your_database_username';
$db_pass = 'your_database_password';
$db_name = 'your_database_name';

// Site URL
$site_url = 'http://example.com';

// Site Name
$site_name = 'Your Website Name';

// Paths
$root_path = dirname(__FILE__);
$include_path = $root_path . '/includes';
$template_path = $root_path . '/templates';

// Error Reporting
$error_reporting = E_ALL;
$display_errors = 1;

// Start Session
session_start();

// Error Reporting
error_reporting($error_reporting);
ini_set('display_errors', $display_errors);

// Database Connection
function db_connect() {
    global $db_host, $db_user, $db_pass, $db_name;
    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    return $connection;
}

// Close Database Connection
function db_close($connection) {
    mysqli_close($connection);
}

// Escape string to prevent SQL Injection
function db_escape($connection, $string) {
    return mysqli_real_escape_string($connection, $string);
}
