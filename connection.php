<?php

$host_name = "sql203.epizy.com";
$user_name = "epiz_33824684";
$password = "chVyq9F063Z";
$database_name = "epiz_33824684_oprau";

$con = mysqli_connect($host_name,$user_name,$password,$database_name);
if(!$con){
    echo "<script>alert('connection error')</script>";
}



?>