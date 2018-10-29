<?php
define("DIR",__DIR__);
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", DIR . DS);
define("CONTROLLER_PATH", ROOT . "controller" . DS);
define("MODEL_PATH", ROOT . "model" . DS);
define("VIEW_PATH", ROOT . "view" . DS);
define("CORE_PATH", ROOT . "core" . DS);
define("CONFIG_PATH", CORE_PATH . "config.php");
define("TEMPLATE_PATH", VIEW_PATH . "template" . DS);
define("URL_PROTOCOL", 'http://');
define("URL_DOMAIN", $_SERVER['HTTP_HOST']);
define("URL_SUB_FOLDER", dirname($_SERVER['SCRIPT_NAME']));
define("URL", URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
define("ADMIN_TEMPLATE", URL . "/view/template/admin/");
define("USER_TEMPLATE", URL . "/view/template/index/");
define("UPLOAD_PATH", DIR . '\uimg\\');
define("UPLOAD_URL", URL . '/uimg/');
define("LOGIN_ADMIN_URL", URL . "/admin/auth/login");
define("LOGIN_USER_URL", URL . "/musteri/auth/login");

session_start();

require CORE_PATH . "application.php";

$app = new Application();
$app->start();
?>
