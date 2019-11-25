<?php
session_start();
require 'configure.php';
    if (isset($_POST['add-btn'])){
        if(isset($_SESSION['fname'])){
            $pizza_name = $_COOKIE['pn']; 
            $price = $_COOKIE['pr'];
            $q = $_POST['quantity'];
    
            $sql = "SELECT id FROM pizza WHERE name=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("location: menu.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $pizza_name);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);
                $pid = $row['id'];
            }
            $sql = "INSERT INTO cart (id, name, price, quantity) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("location: menu.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "isii", $pid, $pizza_name, $price, $q);
                mysqli_stmt_execute($stmt);
                header("location: menu.php?success");
                exit();
            }        
        }
        else{
            header("location: menu.php?notloggedin");
        }
    }
?>