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
    <link href="login_styles.css" rel="stylesheet" />
</head>

<body>
    <div class="jumbotron">
        <div class="imgbox">
            <img src="img/jumboLogo.png" alt="Avatar" class="avatar">
        </div>

        <form action="signup_validate.php" method="post">
            <div class="form-group row">
                <label for="firstName" class="col-md-3 col-form-label">First
                    Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="firstName"
                        placeholder="First Name" />
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-md-3 col-form-label">Last
                    Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="lastName"
                        placeholder="Last Name" />
                </div>
            </div>
            <div class="form-group row">
                <label for="emailid"
                    class="col-md-3 col-form-label">E-mail</label>
                <div class="col-md-9">
                    <input type="emailid" class="form-control" name="emailid"
                        placeholder="E-mail" />
                </div>
            </div>
            <div class="form-group row">
                <label for="pwd"
                    class="col-md-3 col-form-label">Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" name="pwd"
                        placeholder="Password" />
                </div>
            </div>
            <div class="form-group row">
                <label for="con_pwd" class="col-md-3 col-form-label">Confirm
                    Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" name="con_pwd"
                        placeholder="Password" />
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-md-3 col-md-9">
                    <button type="submit" name="signup_btn"
                        class="btn btn-success btn-block">
                        Signup
                    </button>
                </div>
            </div>
        </form>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./home.html">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
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