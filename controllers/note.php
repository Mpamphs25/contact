<?php

    $config = require('config.php');

    $db = new Database($config['database']);

    $heading = 'Note';
  
    $notes = $db->query('select * from note where id = :id', ['id' => $_GET['id']])->fetch();
   
    require "views/note.php";

    