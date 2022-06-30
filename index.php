<?php
    declare(strict_types=1);

    require 'Books.php';
    require 'Controller.php';

    session_start();

    $books = new Books();
    $controller = new Controller($books);

    $controller->init();

    
