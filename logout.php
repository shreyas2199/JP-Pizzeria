<?php
    require "configure.php";
    $sql = "SELECT id FROM cart";
    $query = "DELETE FROM cart WHERE id = ?";
    $cart_id = mysqli_query($conn, $sql);
    while($ele = mysqli_fetch_assoc($cart_id)['id']){
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $query);
        mysqli_stmt_bind_param($stmt, "i", $ele);
        mysqli_stmt_execute($stmt);
    }
    $sql = "SELECT id FROM reservation";
    $query = "DELETE FROM reservation WHERE id = ?";
    $reserve_id = mysqli_query($conn, $sql);
    while($ele = mysqli_fetch_assoc($reserve_id)['id']){
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $query);
        mysqli_stmt_bind_param($stmt, "i", $ele);
        mysqli_stmt_execute($stmt);
    }
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php");
?>