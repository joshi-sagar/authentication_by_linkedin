<?php
/*
 * Basic Site Settings and API Configuration
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'link');
define('DB_USER_TBL', 'users');

// LinkedIn API configuration
define('LIN_CLIENT_ID', '81w4pt1kx0r9ii');
define('LIN_CLIENT_SECRET', 'XcQX8wjJsomBh4ww');
define('LIN_REDIRECT_URL', 'http://localhost/linkedin_login/');
define('LIN_SCOPE', 'r_liteprofile r_emailaddress'); //API permissions

// Start session
if(!session_id()){
    session_start();
}

// Include the oauth client library
require_once 'linkedin-oauth-client-php/http.php';
require_once 'linkedin-oauth-client-php/oauth_client.php';