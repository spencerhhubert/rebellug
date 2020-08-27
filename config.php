<?php
$root=pathinfo($_SERVER['SCRIPT_FILENAME']);
define ('BASE_FOLDER', basename($root['dirname']));
define ('SITE_ROOT',    realpath(dirname(__FILE__)));
define ('SITE_URL',    'http://'.$_SERVER['HTTP_HOST'].'/'.BASE_FOLDER);

require_once(SITE_ROOT . "/vendor/autoload.php");
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(SITE_ROOT);
    $dotenv->load();

include_once SITE_ROOT . '/includes/dbconn.php';

include_once SITE_ROOT . '/includes/functions.php';
?>