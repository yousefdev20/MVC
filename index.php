<?php
//echo $_SERVER[REQUEST_URI];
/**
 * this application it will be loaded from here
 * so, we will require init file to make autoloader class
 * when every things has been loaded successfully
 * the route check on request exists or not if not send new not found message
 * else loaded controller normally.
*/
require_once './App/bootstraper/init.php';

use App\bootstraper\app;

$app = new app();
