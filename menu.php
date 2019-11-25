<?php
    require "configure.php";
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
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php"><span
                                class="fa fa-home"></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutus.php"><span
                                class="fa fa-info"></span> About Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><span
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
                            <div class='col-12 col-sm-2 align-self-center'>
                                <div class='form-group row'>
                                    <div class='col-sm-12'>
                                        <p class='welcome'>Welcome ".$_SESSION['fname']." ".$_SESSION['lname']."</p>
                                    </div>
                                </div>
                                <div class='form-group row'>
                                    <div class='col col-sm-7'>
                                        <form action='logout.php' method='post'>
                                            <button type='submit' class='btn btn-block btn-sm btn-warning' name='logout_btn'>
                                            Logout
                                            </button>
                                        </form>
                                    </div>
                                    <div class='col col-sm-5'>
                                            <button type='submit' class='btn btn-block btn-sm btn-warning' onclick='show_cart()' id='cart_btn'>
                                            Cart
                                            </button>
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
                    
                    <?php
                        $query = "SELECT * FROM cart";
                        $result = mysqli_query($conn, $query);
                    ?>

                    <div class='table-responsive-lg' id='cart_body'>
                        <table class="rounded table table-light table-sm table-borderless table-hover">
                            <?php
                                $total = 0;
                                if($result){
                                    if(mysqli_num_rows($result)>0){
                                        echo "
                                        <thead class='thead-dark'>
                                            <tr>
                                                <th>Pizza</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        ";
                                        while($pizza = mysqli_fetch_assoc($result)){
                                            echo "
                                            <tr>
                                                <td>".$pizza['name']."</td>
                                                <td>".$pizza['quantity']." x ".$pizza['price']."</td>
                                                <td>".$pizza['price']*$pizza['quantity']."</td>
                                                <td> <form method='get' action='remove_cart.php'><input type='hidden' name='hidden_id' value=".$pizza['id'].">
                                                <button class='btn btn-danger btn-sm' name='rmv_btn'>x</button></form> </td>
                                            </tr>";
                                            $total = $pizza['price']*$pizza['quantity']+$total;
                                        }
                                        echo "<tr class='table-success'><td>Total</td><td></td><td>".$total."</td><td></td>
                        </table>
                        <button class='btn btn-light btn-sm btn-block'>Checkout</button>";
                                    }
                                    else{
                                        echo " 
                                        <thead class='thead-dark'>
                                            <tr>
                                                <th>Cart is empty.!</th>
                                            </tr>
                                        </thead>
                        </table>";
                                    }
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container row row-content">
        <h2>Non-Vegetarian</h2>
        <div class="card-deck">

            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/hawaiian_chicken.jpg">
                <div class="card-body text-center">
                    <h5 class="card-title" id="p1">Hawaiian Chicken
                    </h5>
                    <p class="card-text">smokey bbq sauce + smoked chicken +
                        creamy mozzarella.</p>
                    <p id="pr1">285</p>
                    <form action="addToCart.php" method="post">
                        <select class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br>
                        <button type="submit" name="add-btn"
                            onclick="add_cart('p1','pr1')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>

            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/loaded_pepparoni.jpg">
                <div class="card-body text-center">
                    <h5 class="card-title" id='p2'>Loaded Pepparoni</h5>
                    <p class="card-text">Pepparoni + hot sauce +
                        mozzarella</p>
                    <p id='pr2'>250</p>
                    <form action="addToCart.php" method="post"><select
                            class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br><button type="submit" name="add-btn"
                            onclick="add_cart('p2','pr2')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>

            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/caponata.jpg">
                <div class="card-body text-center">
                    <h5 class="card-title" id='p3'>Caponata</h5>
                    <p class="card-text">Rotisserie chicken + pizza sauce +
                        roasted eggplant</p>
                    <p id='pr3'>260</p>
                    <form action="addToCart.php" method="post"><select
                            class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br><button type="submit" name="add-btn"
                            onclick="add_cart('p3','pr3')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>

            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/frittata.png">
                <div class="card-body text-center">
                    <h5 class="card-title" id='p4'>Frittata</h5>
                    <p class="card-text">baked egg + pepperoni + parsley +
                        mozzarella cheese.</p>
                    <p id='pr4'>280</p>
                    <form action="addToCart.php" method="post"><select
                            class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br><button type="submit" name="add-btn"
                            onclick="add_cart('p4','pr4')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>

            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/chicken_masala.jpg">
                <div class="card-body text-center">
                    <h5 class="card-title" id='p5'>Chicken Tikka Masala</h5>
                    <p class="card-text">smoked chicken tikka +
                        cheddar</p>
                    <p id='pr5'>240</p>
                    <form action="addToCart.php" method="post"><select
                            class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br><button type="submit" name="add-btn"
                            onclick="add_cart('p5','pr5')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>

        </div>
    </div>

    <div class="container row row-content">
        <h2>Vegetarian</h2>
        <div class="card-deck">

            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/panner_tikka.png" height="10rem">
                <div class="card-body text-center">
                    <h5 class="card-title" id='p6'>Panner Tikka</h5>
                    <p class="card-text">smoked panner tikka +
                        mozzarella.</p>
                    <p id='pr6'>220</p>
                    <form action="addToCart.php" method="post"><select
                            class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br><button type="submit" name="add-btn"
                            onclick="add_cart('p6','pr6')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>

            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/vegan_jamaican.jpg">
                <div class="card-body text-center">
                    <h5 class="card-title" id='p7'>Vegan Jamaican</h5>
                    <p class="card-text"> pineapple + vegan cheese + jerk sauce.
                    </p>
                    <p id='pr7'>240</p>
                    <form action="addToCart.php" method="post"><select
                            class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br><button type="submit" name="add-btn"
                            onclick="add_cart('p7','pr7')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>

            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/grilled_veg.jpg">
                <div class="card-body text-center">
                    <h5 class="card-title" id='p8'>Grilled Veg</h5>
                    <p class="card-text">grilled veggies + hot sauce + goat
                        cheese. </p>
                    <p id='pr8'>230</p>
                    <form action="addToCart.php" method="post"><select
                            class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br><button type="submit" name="add-btn"
                            onclick="add_cart('p8','pr8')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>

            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/feta olive.jpg">
                <div class="card-body text-center">
                    <h5 class="card-title" id='p9'>Feta Pepper Olive</h5>
                    <p class="card-text">hot bellpeppers + olives +
                        mozzarella.</p>
                    <p id='pr9'>280</p>
                    <form action="addToCart.php" method="post"><select
                            class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br><button type="submit" name="add-btn"
                            onclick="add_cart('p9','pr9')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>
            <div class="card">
                <img class="img-thumbnail align-self-center"
                    src="/WebMiniProj/img/vegan_cashew.jpg">
                <div class="card-body text-center">
                    <h5 class="card-title" id='p10'>Vegan Cashew</h5>
                    <p class="card-text">cashew cheese + bellpeppers +
                        tyme</p>
                    <p id='pr10'>240</p>
                    <form action="addToCart.php" method="post"><select
                            class="form-control" name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><br><button type="submit" name="add-btn"
                            onclick="add_cart('p10','pr10')"
                            class="btn btn-primary">Add</button></form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function add_cart(id1, id2) {
            document.cookie = "pn=" + document.getElementById(id1).textContent;
            document.cookie = "pr=" + document.getElementById(id2).textContent;
        }
        document.getElementById("cart_body").style.display = "none";

        function show_cart() {
            var y = document.getElementById("cart_body");
            var x = document.getElementById("header_img");
            if (y.style.display === "none") {
                y.style.display = "block";
                x.style.display = "none";
            } else {
                y.style.display = "none";
                x.style.display = "block";
            }
        }
    </script>

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