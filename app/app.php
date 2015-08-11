<?php

    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Help me I'm stuck in the computer!! ";
    });

    return $app;

 ?>
