<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>JP Pizzeria: Contact Us</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#"><img
                    src="/WebMiniProj/img/navLogo.png" height="30"
                    width="150"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php"><span
                                class="fa fa-home"></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutus.php"><span
                                class="fa fa-info"></span> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./menu.php"><span
                                class="fa fa-list"></span> Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><span
                                class="fa fa-address-card"></span>
                            Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-5">
                    <h1>JP Pizzeria</h1>
                    <p>
                        From the first wood fired furnace, the furnace is
                        eternal.
                        Inspired by the co-ordinates of Naples, Italy where the
                        first wood fired Pizzeria originated. Our recipes are
                        curated by Master Chef Monica Geller of New York. Curated
                        with a choice of over 50 toppings, 6 Cheese, 4 sauces
                        finest flour from Italy authentic Italian wood fired
                        oven, experience Pizza making like any other.
                    </p>
                </div>
                <?php
                        if (isset($_SESSION['fname'])) {
                            echo"
                            <div class='col-12 col-sm-3 align-self-center'>
                                <div class='form-group row'>
                                    <div class='col-sm-12'>
                                        <p class='welcome'>Welcome ".$_SESSION['fname']." ".$_SESSION['lname']."</p>
                                    </div>
                                </div>
                                <div class='form-group row'>
                                    <div class='col col-sm-12'>
                                        <form action='logout.php' method='post'>
                                            <button type='submit' class='btn btn-warning btn-sm btn-block' name='logout_btn'>
                                            Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>";
                        }
                        else{
                            echo "
                            <div class='col-12 col-sm-4 align-self-center'>
                                <form action='login_validate.php' method='post'>
                                    <div class='form-group row'>
                                        <label
                                        for='email'
                                        class='col-md-2 col-form-label'
                                        >Email</label>
                                        <div class='offset-sm-1 col-md-9'>
                                            <input
                                            type='text'
                                            class='form-control'
                                            id='email'
                                            name='email'
                                            placeholder='Email'
                                            />
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <label
                                        for='psw'
                                        class='col-md-2 col-form-label'
                                        >Password</label>
                                        <div class='offset-sm-1 col-md-9'>
                                            <input
                                            type='password'
                                            class='form-control'
                                            id='psw'
                                            name='psw'
                                            placeholder='Password'
                                            />
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <div class='offset-md-6 col-md-6 align-self-center'>
                                            <span class='psw'>Forgot <a href='#' style='color: crimson'>password?</a></span>
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <div class='col-md-12'>
                                            <button type='submit' class='btn btn-success btn-block' name='login_btn'>
                                            Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <form action='signup.php' method='post'>
                                    <div class='form-group row'>
                                        <div class='col-md-12'>
                                            <button type='submit' class='btn btn-primary btn-block' name='sign_up_btn'>
                                            Sign Up
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>";
                        }
                    ?>
                <div class="col-12 col-sm-3 align-self-center">
                    <div id="header_img">
                        <img src="/WebMiniProj/img/jumboLogo.PNG"
                            class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./home.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
                <h3>Contact Us</h3>
                <hr />
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12">
                <h3>Location Information</h3>
            </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                <h5>Our Address</h5>
                <address style="font-size: 100%">
                    121, Clear Water Bay Road<br />
                    Clear Water Bay, Kowloon<br />
                    HONG KONG<br />
                    <i class="fa fa-phone"></i>: +852 1234 5678<br />
                    <i class="fa fa-fax"></i>: +852 8765 4321<br />
                    <i class="fa fa-envelope"></i>:
                    <a href="mailto:confusion@food.net">confusion@food.net</a>
                </address>
            </div>
            <div class="col-12 col-sm-6 offset-sm-1">
                <h5>Map of our Location</h5>
            </div>
            <div class="col-12 col-sm-11 offset-sm-1">
                <div class="btn-group" role="group">
                    <a role="button" class="btn btn-success"
                        href="tel:+918147995077"><i class="fa fa-phone"></i>
                        Call</a>
                    <a role="button" class="btn btn-primary"><i
                            class="fa fa-skype"></i> Skype</a>
                    <a role="button" class="btn btn-info"
                        href="mailto:s.shreyas956@gmail.com"><i
                            class="fa fa-envelope"></i> E-mail</a>
                </div>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12">
                <h3>Send us your Feedback</h3>
            </div>
            <div class="col-12 col-md-9">
                <form>
                    <div class="form-group row">
                        <label for="firstName"
                            class="col-md-2 col-form-label">First Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control"
                                id="firstName" name="firstName"
                                placeholder="First Name" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastName"
                            class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control"
                                id="lastName" name="lastName"
                                placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telNum"
                            class="col-12 col-md-2 col-form-label">Contact
                            Tel.</label>
                        <div class="col-5 col-md-3">
                            <input type="tel" class="form-control" id="areaCode"
                                name="areaCode" placeholder="Area Code" />
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" class="form-control" id="telNum"
                                name="telNum" placeholder="Tel. Number" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailid"
                            class="col-md-2 col-form-label">E-mail</label>
                        <div class="col-md-10">
                            <input type="emailid" class="form-control"
                                id="emailid" name="emailid"
                                placeholder="E-mail" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"
                                    name="approve" id="approve" value="" />
                                <label class="form-check-label" for="approve">
                                    <strong>May we contact you?</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>E-mail</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feedback"
                            class="col-md-2 col-form-label">Your
                            Feedback</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="feedback"
                                name="feedback" rows="12"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary">
                                Send Feedback
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md"></div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./home.php">Home</a></li>
                        <li><a href="./aboutus.php">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        121, Clear Water Bay Road<br />
                        Clear Water Bay, Kowloon<br />
                        HONG KONG<br />
                        <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br />
                        <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br />
                        <i class="fa fa-envelope fa-lg"></i>:
                        <a
                            href="mailto:confusion@food.net">confusion@food.net</a>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google"
                            href="http://google.com/+"><i
                                class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook"
                            href="http://www.facebook.com/profile.php?id="><i
                                class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin"
                            href="http://www.linkedin.com/in/"><i
                                class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter"
                            href="http://twitter.com/"><i
                                class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google"
                            href="http://youtube.com/"><i
                                class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i
                                class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2019 JP Pizzeria</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <!-- jQuery library -->
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>

    <!-- Popper JS -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>

    <!-- Latest compiled JavaScript -->
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</body>

</html>