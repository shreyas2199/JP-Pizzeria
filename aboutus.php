<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>JP Pizzeria: About Us</title>
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
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="./home.php"><img
                    src="/WebMiniProj/img/navLogo.png" height="30"
                    width="150"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php"><span
                                class="fa fa-home"></span> Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><span
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
                                            <button type='submit' class='btn btn-sm btn-block btn-warning' name='logout_btn'>
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
        <div>
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./home.php">Home</a>
                </li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
            <div class="col-12 col-sm">
                <h3>About Us</h3>
                <hr />
            </div>
        </div>

        <div class="row row-content align-content-center">
            <div class="col-12 col-sm-6">
                <h2>Our History</h2>
                <p>
                    Started in 2010, JP Pizzeria quickly
                    established itself as a culinary icon par excellence in
                    Hong Kong. With its unique brand of world fusion cuisine
                    that can be found nowhere else, it enjoys patronage from
                    the A-list clientele in Hong Kong. Featuring four of the
                    best three-star Michelin chefs in the world, you never
                    know what will arrive on your plate the next time you
                    visit us.
                </p>
                <p>
                    The restaurant traces its humble beginnings to
                    <em>The Frying Pan</em>, a successful chain started by
                    our CEO, Mr. Peter Pan, that featured for the first time
                    the world's best cuisines in a pan.
                </p>
            </div>
            <div class="col-sm">
                <div class="card">
                    <h3 class="card-header bg-primary text-white">
                        Facts AT a Glance
                    </h3>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-6">Started</dt>
                            <dd class="col-6">3 Feb. 2010</dd>
                            <dt class="col-6">Major Stake Holder</dt>
                            <dd class="col-6">Sreeram Fine Foods</dd>
                            <dt class="col-6">Last Year's Turnover</dt>
                            <dd class="col-6">$1,250,375</dd>
                            <dt class="col-6">Employees</dt>
                            <dd class="col-6">40</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-body bg-light">
                    <blockquote class="blockquote">
                        <p class="mb-0">
                            You better cut the pizza in four pieces because
                            I'm not hungry enough
                        </p>
                        <footer class="blockquote-footer">
                            Ajay R,
                            <cite title="Source Title">The Wit and Wisdom of
                                Ajay R, K. Manoj,
                                Kiran Books, 2019</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="row row-content align-content-center">
            <div class="col-12 col-sm">
                <h2>Corporate Leadership</h2>
                <h3>Ross Geller <small>Chief Epicurious Officer</small></h3>
                <div class="col col-sm d-none d-sm-block">
                    <p>
                        Our CEO, Ross, credits his hardworking East Asian
                        immigrant parents who undertook the arduous journey
                        to the shores of America with the intention of
                        giving their children the best future. His mother's
                        wizardy in the kitchen whipping up the tastiest
                        dishes with whatever is available inexpensively at
                        the supermarket, was his first inspiration to create
                        the fusion cuisines for which
                        <em>The Frying Pan</em> became well known. He brings
                        his zeal for fusion cuisines to this restaurant,
                        pioneering cross-cultural culinary connections.
                    </p>
                </div>
                <h3>
                    Chandler Bing
                    <small>Chief Food Officer</small>
                </h3>
                <div class="col col-sm d-none d-sm-block">
                    <p>
                        Our CFO, Bing, as he is affectionately referred to
                        by his colleagues, comes from a long established
                        family tradition in farming and produce. His
                        experiences growing up on a farm in the Australian
                        outback gave him great appreciation for varieties of
                        food sources. As he puts it in his own words,
                        <em>Everything that runs, wins, and everything that
                            stays, pays!</em>
                    </p>
                </div>
                <h3>Joey Tribbiani <small>Chief Taste Officer</small></h3>
                <div class="col col-sm d-none d-sm-block">
                    <p>
                        Blessed with the most discerning gustatory sense,
                        Joey, our CTO, personally ensures that every dish
                        that we serve meets his exacting tastes. Our chefs
                        dread the tongue lashing that ensues if their dish
                        does not meet his exacting standards. He lives by
                        his motto,
                        <em>You click only if you survive my lick.</em>
                    </p>
                </div>
                <h3>Monica Geller <small>Executive Chef</small></h3>
                <div class="col col-sm d-none d-sm-block">
                    <p>
                        Monica is one of New Yorks’s best Master Pizza Chefs in the
                        world. In addition to this she is a proud member of the
                        Italian Acrobatic Pizza Team whom in fact have won
                        various awards in pizza making competitions in Italy and
                        all across Europe; such as,
                        <em>Monte Carlo, Paris, Las Vegas, Miami, London, Rome,
                            Naples, Stuttgart, Dublin, Edinburgh and Milan.</em>
                    </p>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="col-12 col-sm-9">
                <h2>Facts &amp; Figures</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>&nbsp;</th>
                                <th>2013</th>
                                <th>2014</th>
                                <th>2015</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Employees</th>
                                <td>15</td>
                                <td>30</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <th>Guests Served</th>
                                <td>15000</td>
                                <td>45000</td>
                                <td>100,000</td>
                            </tr>
                            <tr>
                                <th>Special Events</th>
                                <td>3</td>
                                <td>20</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <th>Annual Turnover</th>
                                <td>$251,325</td>
                                <td>$1,250,375</td>
                                <td>~$3,000,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-sm-3"></div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./home.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.php">Contact</a></li>
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