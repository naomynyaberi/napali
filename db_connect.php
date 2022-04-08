<?php
    $host     ="localhost";
    $user     ="root";
    $pass     = "";
    $db_name  = "napali";
    $port     = "3306";

    $connection=
    mysqli_connect('localhost','root','','napali','3306');
    
    // $connection= mysqli_connect($host,$user,$pass,$db_name,$port);

   //check if connection failed
 if (!isset($connection)){
     die("DB connection failed!!!");
 }
 