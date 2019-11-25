<?php

    if(isset($_POST['login_btn'])){
        
        require "configure.php";
        
        $email = $_POST['email'];
        $password = $_POST['psw'];

        if (empty($email) || empty($password)){
            header("location: index.php?error=emptyfields&emailid=".$email);
            exit();
        }
        else{
            $sql = "SELECT * FROM customer WHERE email=? AND password=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("location: index.php?error=sqlerror&emailid=".$email);
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "ss", $email, $password);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)){
                    if ($password == $row['password']){
                        session_start();
                        $_SESSION['fname'] = $row['first_name'];
                        $_SESSION['lname'] = $row['last_name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['rmail'] = "";

                        header("location: index.php?login=success");
                        exit();
                    }
                    else{
                        header("location: index.php?error=wrongpassword&emailid=".$email);
                        exit();
                    }
                }
                else{
                    header("location: index.php?error=nouser&emailid=".$email);
                    exit();
                }
            }
        }

    }
    else{
        header("location: login.php?error=sqlerror");
        exit();
    }
?>