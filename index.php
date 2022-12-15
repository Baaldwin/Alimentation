<?php

$user= {
  "name"=>"Alex",
  "age" => 30,
  "sexe" => "homme",
  "weight" => 70kg,
  "size" => 180,
  "imc" => 23.4,
  "email"=>"blabla@bb.fr",
  "isLogged" => true
};

if (!$user["isLogged"]){
  header("location:\login.php");
}

$page= [
 "title" => "Track Calorie - Accueil"
];

include_once ('./includes/header.php');
?>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col-sm-12">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
</div>
    <h1>Hello, world!</h1>

  <?php include_once ('./includes/footer.php');?>