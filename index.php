<?php
    error_reporting (E_ALL);
    //include 'const.php';

    //Записываем в константу путь к корню сайта
    $sitePath = realpath (dirname (__FILE__));
    define ("SITE_PATH", $sitePath);

    require_once SITE_PATH . '/application/core/router.php';
    Router::start ();
?>