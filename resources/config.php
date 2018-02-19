<?php

session_start();
date_default_timezone_set("Asia/Tehran");
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined('TEMPLATE_FRONT') ? null : define('TEMPLATE_FRONT', __DIR__ . DS . 'templates/front/');
defined('TEMPLATE_BACK') ? null : define('TEMPLATE_BACK', __DIR__ . DS . 'templates/back');
//defined('TEST') ? null : define('TEST', __DIR__ . DS . 'resources/db/');


defined('DB_HOST') ? null : define('DB_HOST', 'localhost');
defined('DB_USER') ? null : define('DB_USER', 'root');
defined('DB_PASS') ? null : define('DB_PASS', '');
defined('DB_NAME') ? null : define('DB_NAME', 'paint_tbl');
defined('CHARSET') ? null : define('CHARSET', 'utf8');
defined('MAX_SIZE') ? null : define('MAX_SIZE', 50);
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$connection->set_charset(CHARSET);

//include '../../resources/db/function.php';
require_once "function.php";

