<?php
    require 'configure.php';

    if (isset($_POST['reserve-btn'])){

        $guests = $_POST['optradio'];
        $date = $_POST['rdate'];
        $time = $_POST['rtime'];
        $email = $_POST['rmail'];
        $name = $_POST['rname'];

        session_start();

        $_SESSION['rmail'] = "nouser";
        $_SESSION['guests'] = $guests;
        $_SESSION['date'] = $date;
        $_SESSION['time'] = $time;
        $_SESSION['rname'] = $name;

        if (empty($guests) || empty($date) || empty($time)){
            header("location: index.php?error=emptyfields==".$_SESSION['email']);
            exit();
        }

        
                else {
                    $sql = "INSERT INTO reservation (guests, time, date, email, name) values (?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        header("location: index.php?error=sqlerror");
                        exit();
                    }
                    else {
                        $_SESSION['rmail'] = $email;
                        mysqli_stmt_bind_param($stmt, "sssss", $guests, $time, $date, $email, $name);
                        mysqli_stmt_execute($stmt);
                        header("location: index.php?reservation=success=".$_SESSION['rmail']);
                        exit();
                    }
                } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    elseif (isset($_POST['cancel_reservation'])) {
        session_start();
        $sql = "DELETE FROM reservation WHERE email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $_SESSION['rmail']);
            mysqli_stmt_execute($stmt);
            unset($_SESSION['rmail']);
            header("location: index.php?reservation+canceled=".$_SESSION['rmail']);
            exit();
        }
    }
    else{
        header("location: index.php?error=sqlerror");
        exit();
    }
?>