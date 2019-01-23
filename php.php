<?php
    $name=$_GET["name"];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $stateofresidence = $_GET['stateofresidence'];
   
  echo "welcome".$name."<br>";
    echo "You have entered".$email."<br>";

if ($phone!= null || $phone!=""){
    echo "phonenumber:".$phone."<br>";
}
 if ($stateofresidence!= null || $stateofresidence!=""){
    echo "stateofresidence:".$stateofresidence."<br>";
 }
?>

    
