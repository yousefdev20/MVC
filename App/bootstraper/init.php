<?php

/**
 * composer autoloader
*/
require_once str_replace('App/bootstraper','',__DIR__).'vendor/autoload.php';
require_once 'app.php';
require_once 'database.php';
require_once __DIR__.'/../Controllers/controller.php';