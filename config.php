<?php

// definim constantele globale ale proiectului
// const NR = 30; // valabilitate LOCALĂ
define('APP_PATH', 'myApp/'); // valabilitate GLOBALĂ - peste tot în aplicație
define('CONTROLLERS', 'controllers/');
define('MODELS', 'models/');
define('VIEWS', 'views/');


spl_autoload_register(function($className){

    // caută clasa în funcție de TIPUL fișierului
    $relPath = '';

    $class = strtolower($className);
    if(str_contains($class, 'controller')){
        $relPath = CONTROLLERS;
    }
    if(str_contains($class, 'model')){
        $relPath = MODELS;
    }
    if(str_contains($class, 'view')){
        $relPath = VIEWS;
    }

    $fileName = APP_PATH . $relPath . $className . '.php';
    if($fileName == ''){
        die('<h1>Invalid PATH</h1>');
    }
    if(file_exists($fileName)){
        require_once $fileName;
    }
    else {
        die("<h3>Class $className NOT found!</h3>");
    }
});