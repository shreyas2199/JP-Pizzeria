<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>JP Pizzeria: Home</title>
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
    <link rel="stylesheet" href="css/styles.css" />

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
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><span
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
                    <li class="nav-item">
                        <a class="nav-link" href="./contactus.php"><span
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
                                            <button type='submit' class='btn btn-sm btn-warning btn-block' name='logout_btn'>
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
                                            <button type='submit' class='btn btn-primary btn-block' name='sign_out_btn'>
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
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-5 order-sm-last col-md-4">
                <h3>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col col-sm-3 col-md-3">
                <div class="media order-sm-first">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                        src="/WebMiniProj/img/panner-tikka.png">
                </div>
            </div>
            <div class="col-sm-4 col-md-5">
                <h2 class="mt-0">Paneer Tikka Pizza</h2>
                <p>
                    A unique combination of Mama’s Sauce + Mozzarella Cheese +
                    Onion + Garlic + Green Capsicum + Paneer Tikka + Green
                    Chili.
                    An indian variation to the popular italian pizza recipe
                    flavoured with
                    marinated tikka sauce and paneer. the recipe is very similar
                    to the
                    one served in indian pizza hut centre with thick crust. also
                    the same
                    recipe can also be prepared with wheat flour as compared to
                    the maida
                    or all purpose flour.
                </p>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-first col-md-3">
                <h3>This Month's Promotions</h3>
            </div>
            <div class="col-sm-4 col-md-5">
                <h2 class="mt-0">Weekend Grand Buffet</h2>
                <p>
                    Featuring mouthwatering combinations with a choice of
                    five different salads, six enticing appetizers, six main
                    entrees and five choicest desserts. Free flowing bubbly
                    and soft drinks. All for just $19.99 per person. Six main
                    entrees and five choicest desserts. Free flowing bubbly
                    and soft drinks. All for just $19.99 per person.
                </p>
            </div>
            <div class="col col-sm-4 col-md-4 order-sm-last">
                <div class="media">
                    <img class="d-flex ml-3 img-thumbnail align-self-center"
                        src="img/buffet.jpg">
                </div>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-4">
                <h3>Meet our Culinary Specialists</h3>
            </div>
            <div class="col col-sm-4 col-md-3">
                <div class="media order-sm-first">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                        src="/WebMiniProj/img/chef.jpg">
                </div>
            </div>
            <div class="col-sm-4 col-md-5">
                <h2>Monica Geller</h2>
                <h4>Executive Chef</h4>
                <p>
                    Monica Geller is one of New York’s best Master Pizza Chefs in
                    the world.
                    In addition to this she is a proud member of the Italian
                    Acrobatic
                    Pizza Team whom in fact have won various awards in pizza
                    making
                    competitions in Italy and all across Europe; such as Monte
                    Carlo, Paris,
                    Las Vegas, Miami, London, Rome, Naples, Stuttgart, Dublin,
                    Edinburgh and Milan.
                </p>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['fname']) && !isset($_SESSION['rmail']) ) {
    echo "<div class='container row-content'>  
    <div class='card col col-sm-7'>
                <h3 class='card-header bg-primary' id='reserve-card'>
                    Reserve Table
                </h3>
                <form action='reserveTable.php' method='post'>
                <div class='card-body'>
                    <dl class='row'>
                        <dt class='col-6'>Number Of Guests</dt>
                        <dd class='col-6'>
                            <div class='form-check-inline'>
                                <label class='form-check-label'>
                                    <input type='radio' class='form-check-input'
                                        name='optradio' value='1'>1
                                </label>
                            </div>
                            <div class='form-check-inline'>
                                <label class='form-check-label'>
                                    <input type='radio' class='form-check-input'
                                        name='optradio' value='2'>2
                                </label>
                            </div>
                            <div class='form-check-inline'>
                                <label class='form-check-label'>
                                    <input type='radio' class='form-check-input'
                                        name='optradio' value='3'>3
                                </label>
                            </div>
                            <div class='form-check-inline'>
                                <label class='form-check-label'>
                                    <input type='radio' class='form-check-input'
                                        name='optradio' value='4'>4
                                </label>
                            </div>
                            <div class='form-check-inline'>
                                <label class='form-check-label'>
                                    <input type='radio' class='form-check-input'
                                        name='optradio' value='5'>5
                                </label>
                            </div>
                            <div class='form-check-inline'>
                                <label class='form-check-label'>
                                    <input type='radio' class='form-check-input'
                                        name='optradio' value='6'>6
                                </label>
                            </div>
                        </dd>
                        <dt class='col-6'>Date</dt>
                        <dd class='col-6'><input name='rdate'
                                type='date' style='border: 1px solid #ccc;
                                box-sizing: border-box;'></input></dd>
                        <dt class='col-6'>Time</dt>
                        <dd class='col-6'><input name='rtime'
                                type='time' style='border: 1px solid #ccc;
                                box-sizing: border-box;'></input></dd>
                        <dt class='col-6'>Email</dt>
                        <dd class='col-6'><input name='rmail'
                                type='text' style='border: 1px solid #ccc;
                                box-sizing: border-box;'></input></dd>
                        <dt class='col-6'>Name</dt>
                        <dd class='col-6'><input name='rname'
                                type='text' style='border: 1px solid #ccc;
                                box-sizing: border-box;'></input></dd>
                        <dt class='col-6'><button class='btn btn-success' name='reserve-btn' type='submit'>Reserve Table</button></dt>        
                    </dl>
                </div>
            </form>
    </div></div>";
    }
    elseif (isset($_SESSION['rmail'])) {
        echo " <div class='container row-content'> 
        <div class='card col col-sm-7'>
                <h3 class='card-header bg-primary'>
                    Table Reserved
                </h3>
                <form action='reserveTable.php' method='post'>
                <div class='card-body'>
                    <dl class='row'>
                        <dt class='col-6'>Number Of Guests</dt>
                        <dd class='col-6'>
                            <div class='form-check-inline'>
                                <label class='form-check-label'>".
                                    $_SESSION['guests']."
                                </label>
                            </div>
                        </dd>
                        <dt class='col-6'>Date</dt>
                        <dd class='col-6'><span>".$_SESSION['date']."</span></dd>
                        <dt class='col-6'>Time</dt>
                        <dd class='col-6'><span>".$_SESSION['time']."</span></dd> 
                        <dt class='col-6'>Reserved For</dt>
                        <dd class='col-6'><span>".$_SESSION['rname']."</span></dd>  
                    </dl>
                    <input type='hidden' name='hidden_rmail' value=".$_SESSION['rmail'].">
                    <button class='btn btn-danger btn-sm' name='cancel_reservation'>Cancel Reservation</button>
                </div>
            </form>
    </div></div>";
    }
?>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.php">About Us</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        121, Clear Water Bay Road<br />
                        Clear Water Bay, Kowloon<br />
                        HONG KONG<br />
                        <span class="fa fa-phone"></span> +852 1234 5678<br />
                        <span class="fa fa-fax"></span> +852 8765 4321<br />
                        <span class="fa fa-envelope"></span>
                        <a
                            href="mailto:confusion@food.net">confusion@food.net</a>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google"
                            href="http://google.com/+"><i
                                class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook"
                            href="http://www.facebook.com/profile.php?id="><i
                                class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin"
                            href="http://www.linkedin.com/in/"><i
                                class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter"
                            href="http://twitter.com/"><i
                                class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google"
                            href="http://youtube.com/"><i
                                class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i
                                class="fa fa-envelope-o fa-lg"></i></a>
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