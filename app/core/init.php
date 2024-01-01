<?php

spl_autoload_register(function($class){
    require $filename = "../app/models/".$class.".php";
});

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
require 'view.php';
require 'App.php';
