<?php
session_start();
    $config = require('config.php');

    $db = new Database($config['database']);
   $user = $_SESSION;
    // print_r($_SESSION['name']);
    // $heading = 'Welcome';
    
    // $user =
    //  $db->query('select * from user where id = :id', ['id' => $_GET['id']])->fetch();

    require "views/welcome.php";

    