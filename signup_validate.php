<?php
    if (isset($_POST['signup_btn'])){

        require 'configure.php';

        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['emailid'];
        $pwd = $_POST['pwd'];
        $con_pwd = $_POST['con_pwd'];

        if (empty($fname) || empty($lname) || empty($email) || empty($pwd) || empty($con_pwd)){
            header("location: signup.php?error=emptyfields&firstName=".$fname."&lastName=".$lname."&emailid=".$email);
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("location: signup.php?error=inavlidemail&firstName=".$fname."&lastName=".$lname);
            exit();
        }
        else if ($pwd !== $con_pwd){
            header("location: signup.php?error=passwordcheck&firstName=".$fname."&lastName=".$lname."&emailid=".$email);
            exit();
        }
        else {

            $sql = "SELECT email FROM customer WHERE email=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("location: signup.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0) {
                    header("location: signup.php?error=emailtaken&firstName=".$fname."&lastName=".$lname);
                    exit();
                }
                else {
                    $sql = "INSERT INTO customer (first_name, last_name, email, password) values (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        header("location: signup.php?error=sqlerror");
                        exit();
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $pwd);
                        mysqli_stmt_execute($stmt);
                        header("location: home.php?signup=success");
                        exit();
                    }
                } 
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        header("location: signup.php?error=sqlerror");
        exit();
    }
?>