<?php
 $uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
 '/'       => 'controllers/index.php',
 '/about' => 'controllers/about.php',
 '/contact' => 'controllers/contact.php',
 '/notes' => 'controllers/notes.php',
  '/note'  => 'controllers/note.php',
  '/create-user' => 'controllers/create-user.php'
];


router($uri,$routes);