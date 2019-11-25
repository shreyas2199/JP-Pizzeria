<head>
    <title>test</title>
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
    <div class="row">

        <div class="card">
            <img class="img-thumbnail align-self-center"
                src="/WebMiniProj/img/hawaiian_chicken.jpg">
            <div class="card-body text-center">
                <h5 class="card-title" id="p1">Huwaian Chicken</h5>
                <p class="card-text">smokey bbq sauce + chicken pieces +
                    creamy mozzarella.</p>
                <p id="pr1">280</p>
                <form action="addToCart.php" method="post">
                    <button type="submit" name="add-btn" class="btn btn-primary"
                        onclick="add_cart('p1','pr1')">
                        Add
                    </button>
                </form>
            </div>
        </div>

        <div class="card">
            <img class="img-thumbnail align-self-center"
                src="/WebMiniProj/img/loaded_pepparoni.jpg">
            <div class="card-body text-center">
                <h5 class="card-title" id="p2">Loaded Pepparoni</h5>
                <p class="card-text">Loaded pepparoni + hot sauce +
                    mozzarella</p>
                <p id="pr2">250</p>
                <form action="addToCart.php" method="post">
                    <button type="submit" name="add-btn" class="btn btn-primary"
                        onclick="add_cart('p2','pr2')">
                        Add
                    </button>
            </div>
        </div>
    </div>
    <p id="demo"></p>
    <script>
    function add_cart(id1, id2){
        document.cookie = "pn=" + document.getElementById(id1).textContent;
        document.cookie = "pr=" + document.getElementById(id2).textContent;
        document.getElementById('demo').innerHTML = 5;
    }
    </script>

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