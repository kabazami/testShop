<?php
define('BASE', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('APP', BASE . 'app' . DIRECTORY_SEPARATOR);
define('APP_URL', dirname($_SERVER['SCRIPT_NAME']));


require APP . 'config/config.php';
require APP . 'core.php';
require APP . 'controller.php';

$app = new App();