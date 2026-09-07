<?php
    $error="";
    $email="";
    $phone="";
    $errorPhone="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["email"])){
        $error= "email cannot be blank";
    }
    $email= $_POST["email"];
    if(empty($_POST["phone"])){
        $errorPhone= "phone number is blank";
    }
    $phone= $_POST["phone"];
}
?>