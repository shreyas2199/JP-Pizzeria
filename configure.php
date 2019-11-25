<?php
    $server_name = "localhost";
    $dBusername = "shreyas";
    $dBpassword = "Shreyas@1999";
    $dBname = "jp_pizza";

    $conn = mysqli_connect($server_name, $dBusername, $dBpassword, $dBname);

    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }
?>