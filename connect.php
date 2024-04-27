<?php
    $serverName = "localhost";
    $userName = "root";
    $password="";
    $dbName="lab_work_5";
    $con=mysqli_connect($serverName,$userName,$password,$dbName);
    if(!$con){
        echo(mysqli_connect_error());
    }
?>