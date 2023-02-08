<?php
  session_start();
$config =  require 'config.php';

require 'Validation.php';

$db = new Database($config['database']);
$errors = [
    //  'name' => '',
    //  'lname' => '',
    //  'tel' => '',
    //  'country' => '',
    //  'interest' => '',
    //  'story' => ''
];




if($_SERVER["REQUEST_METHOD"] === "POST"){
   
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $tel=$_POST['tel'];
    $country = $_POST['country'];
    $interest = $_POST['interest'];
    $story = $_POST['story'];
    

  if(!Validation::checkString($name)){
    $errors['name'] ='Please fill Your Name';
  }
   if(!Validation::checkString($lname)){
     $errors['lname'] = 'Please fill Your Last Name';
  }
   if(!Validation::checkString($tel,10,13)){
    $errors['tel'] = 'Please fill your Phone';
   }
   if(Validation::selectIsEmpty($country)){
     $errors['country'] = 'Please Check A City';
   }
  
    if(!Validation::checkString($story,1,500)){
     $errors['story'] ='Please fill  at least 500 characters';
  }



if(empty($errors)){
    $user = $db->query("INSERT INTO users (name,lastname,telephone,country, interest,story)
    VALUES (:name,:lastname,:telephone,:country,:interest,:story)",[
     'name' =>  $name ,
     'lastname' =>$lname,
     'telephone'=>$tel,
     'country' => $country,
     'interest' => $interest,
     'story' => $story
    ]);
    
    $_SESSION['name'] = $name;
    $_SESSION['lastname'] = $lname;
    header("Location:views/welcome.php");
}



   
}

$heading =' ';
 
require   'views/contact.view.php';