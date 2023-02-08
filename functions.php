<?php 
function dd($value){
        echo "<pre>";
        var_dump($value);
        echo "<pre>";
        die();
}

function abort($code){
    http_response_code($code);
    require "views/{$code}.php";
    die();
}


function router($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
       }else{
           abort(404);
       }
}