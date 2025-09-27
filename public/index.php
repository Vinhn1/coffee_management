<?php
    session_start();
    require_once __DIR__ . "/../config/constants.php";
    require_once __DIR__ . "/../config/db.php";
    require_once __DIR__ . "/../app/core/Router.php";

    $router = new Router();
    $router->run();
?>