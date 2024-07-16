<?php
define ("WEBROOT", "http://localhost:8020");
require_once "../src/core/helpers.php";
require_once "../vendor/autoload.php";
use Core\Router;

Router::run();