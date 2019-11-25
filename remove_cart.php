<?php
    require "configure.php";
    if(isset($_GET['rmv_btn'])){
        $pizza_id = $_GET['hidden_id'];
        $query = "DELETE FROM cart WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$query);
        mysqli_stmt_bind_param($stmt, 's', $pizza_id);
        mysqli_stmt_execute($stmt);
        header("location: menu.php?itemremoved=".$pizza_id);
        exit();
    }
?>