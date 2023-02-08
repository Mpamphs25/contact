<?php



$config =  require 'config.php';



$db = new Database($config['database']);


$notes =$db->query('SELECT * FROM note where user_id = 1')->fetchAll();



    $heading = 'Notes';
    require 'views/notes.php';