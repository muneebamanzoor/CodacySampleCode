<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("art", "Producttb");
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Shopping Calligraphy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>
    <style>

        .footer {
            background-color: #333333;
            color: white;
        }

        .footer-copyright {
            background-color: #316DC3;
        }

        .material-icons {
            color: #427900;
        }

        ul.social-network {
            list-style: none;
            display: inline;
            margin-left: -60px !important;
            padding: 0;
        }

        ul.social-network li {
            display: inline;
            margin: 0 5px;
        }


        body {
            width: 100%;
            height: 100%;
            background-image: url("https://img5.goodfon.com/wallpaper/nbig/c/fc/uzor-zolotoi-chernyi-fon.jpg");
            background-position: center;
            background-size: cover;
        }


        button {
            position: relative;
            font-size: 2rem;
            text-align: center;
        }

        .calligraphy {
            margin: 0.25%;
            position: relative;
            text-align: center;
            font-family: 'Lucida Handwriting';
            opacity: 0.9;
        }

        .calligraphytext {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: goldenrod;
        }

        #divcontainer {
            display: flex;
            float: none;
            width: 100%;
        }

        #contentcolumn {
            margin: 0 0px 0 0px;
        }

        #rightcolumn {
            float: right;
            width: 300px;
            margin-left: 0px;
        }

        .innertext {
            margin: 10px;
            font-family: Arial;
            color: white;
        }

        @media(max-width: 840px) {

            #rightcolumn {
                float: none;
                width: 100%;
                margin-left: 0;
                clear: both;
            }


            #contentcolumn {
                margin-left: 0;
            }
        }

        @media(max-width: 600px) {

            #contentcolumn {
                margin-left: 0;
            }
        }

        h2 {
            color: goldenrod;
            margin-left: 20px;
            font-family: Papyrus;
            font-weight: bold;
        }

        .btn-primary {
            float: none;
            margin: 0 30% 0 33%;
            background-color: slategrey;
            border: none;
            border-radius: 0;
            opacity: 0.8;
        }

        .btn-primary:hover {
            opacity: 1;
        }

        .card {
            width: 21rem;
            opacity: 0.8;
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
            cursor: pointer;
        }

        .card:hover {
            opacity: 1;
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        }
    </style>
</head>

<body>
<!------NavigationBar-->
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="https://i.pinimg.com/originals/66/f4/c3/66f4c3b275dc72c65407f04d07fb31ac.png" height="200" width="200" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link space" href="#">&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home" href="index.php">HOME</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top:40px;">
                                <a class="dropdown-item" href="introduction.php">Introduction</a>
                                <a class="dropdown-item" href="mission.php">Our Mission</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown down1">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
                            <div class="dropdown-menu menu1" aria-labelledby="navbarDropdown" style="margin-top:40px;">
                                <a class="dropdown-item item4" href="calligraphy.php">Calligraphy</a>
                                <a class="dropdown-item item1" href="photography.php" >Photography</a>
                                <a class="dropdown-item item2" href="painting.php" >Paintings/Drawings</a>
                                <a class="dropdown-item item3" href="sculptures.php" >Sculptures</a>
                                <a class="dropdown-item item4" href="abtract.php" >Abstracts</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link media" href="Contact Us.php" >CONTACT US</a>
                        </li>
                       



                        <li class="nav-item">
                            <a class="nav-link media" href="exhibition.php">EXHIBITIONS</a>
                        </li>

                        <!-- <li class="nav-item dropdown down2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SignUp
                            </a>
                            <div class="dropdown-menu menu2" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item item2" href="SignUp1.html">As an Artist</a>
                                <a class="dropdown-item item2" href="SignUp2.html">As a Customer</a>

                            </div>
                        </li> -->
                        <li class="nav-item dropdown down2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                LOGIN
                            </a>
                            <div class="dropdown-menu menu2" aria-labelledby="navbarDropdown" style="margin-top:40px;">
                               
                                <a class="dropdown-item item2" href="login.php">As a Customer</a>

                            </div>
                        </li>
                        <li class="nav-item">
                        <form action="php/cart.php">
                            <button class="btn btn-outline-success" type="submit">
                                <img src="./upload/cart.png" width="20" height="20">&nbsp;Cart
                                <?php

                                if (isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                }else{
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                }

                                ?>
                            </button>
                        </form>
                    </li>

                    </ul>

                    <div class="dropdown">
                        <input type="text" placeholder="Search..." onclick="myFunction()" id="myInput" onkeyup="filterFunction()">
                        <div id="myDropdown" class="dropdown-content">
                            <a href="Calligraphy.php" target="_blank">Calligraphy</a>
                            <a href="Painting.php" target="_blank">Paintings</a>
                            <a href="Sculptures.php" target="_blank">Sculptures</a>
                            <a href="Photography.php" target="_blank">Photography</a>
                            <a href="abstract.php" target="_blank">Abstract</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

<div class="calligraphy">
    <img src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YmxhY2t8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" height="100" class="d-block w-100" alt="calligraphy">
    <h1 class="calligraphytext">Calligraphy</h1>
</div>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.wallpaperuse.com/wallp/15-156841_m.jpg" height="400" width="600" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>By: Asghar Bugti</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://wallpaperaccess.com/full/209122.jpg" height="400" width="600" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>By: Hassan Khan</h5>

            </div>
        </div>
        <div class="carousel-item">
            <img src="https://i.pinimg.com/originals/3d/1a/15/3d1a15bd570fce54d471d4d33181fa4d.jpg" height="400" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>By: Daniyal Bakhtiyar</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div id="divcontainer">
    <div class="d-inline-block" id="contentcolumn">
        <div class="innertext">
            <br> <p>Calligraphy is a visual art which is associated with writing. It is defined as the art of giving form to written letters that incites the emotions of the viewers. Calligraphy can be done using a broad tip instrument, a brush, or other writing instruments such as pencil or pen.</p>

            <p>At Artistera Art Gallery you will find interesting calligraphy paintings by Famous Pakistani artists. We are proud to have such an exquisite collection of calligraphy art for sale that will add color, style and depth wherever they are put.</p>

            <p>Islamic calligraphy is associated with geometric Islamic art that is often found on walls and ceilings of mosque as a part of Arabic heritage. However modern calligraphy differs from functional inscription and design to fine-art in which letters may or may not be readable. Choose from among famous calligraphy paintings for sale by these artists and it will surely be a collection to keep at your home or offices.</p>

            <p>There are many famous Pakistani artists who have been world famous for their excellence over this style of paintings. Few popular names include Ismail Lateef who is an award winning extraordinary calligrapher, Hassan Khan, Asghar Bugti, Sadequain who was considered as the finest calligraphers of Pakistan and Bukhari, Daniyal Bakhtiyar also adds up to the known names in calligraphers in Pakistan. Below you will find all the calligraphy paintings for sale we have at our art gallery.</p>
        </div>
    </div>

    <div class="d-inline-block" id="rightcolumn">
        <div class="innertext" style="text-align:center;"><img src="https://i.pinimg.com/originals/5b/3b/25/5b3b257121b5268013241276741f5109.jpg" height="300" width="280" /></div>
    </div>
</div>

<hr />
<div>&nbsp;</div>
<h2>Available Calligraphy Arts:</h2>
<hr />
<div class="container">
    <div class="row">
        <?php
        $result= $database -> getData();
        while ($row =mysqli_fetch_assoc($result)) {
            component($row['artist_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
        ?>
    </div>
</div>

<div>
        <hr />
        <div class="d-inline-block"><a><img src="images/p1.jpg" height="200" width="230" /></a></div>
        <div class="d-inline-block"><a><img src="images/p2.jpg" height="200" width="200" /></a></div>
        <div class="d-inline-block"><a><img src="images/p3.jpg" height="200" width="200" /></a></div>
        <div class="d-inline-block"><a><img src="images/p4.jpg" height="200" width="200" /></a></div>
        <div class="d-inline-block"><a><img src="images/p5.jpg" height="200" width="200" /></a></div>
        <div class="d-inline-block"><a><img src="images/p6.jpg" height="200" width="200" /></a></div>
        <div class="d-inline-block"><a><img src="images/p7.jpg" height="200" width="230" /></a></div>
        <hr />
    </div>


<footer class="page-footer font-small footer">

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-0">

        <!-- Grid row -->
        <div class="row mt-0">

            <!-- Grid column -->
            <div class="col-md-6 col-lg-4 col-xl-3 mb-2 mt-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Head Office</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><i class="material-icons" style="font-size: smaller;">phone</i> A-25, Bahadurabad Chowrangi Karachi, Pakistan</p>
                <p><i class="material-icons" style="font-size: smaller;">public</i> UAN: 111-999-526</p>
                <p><i class="material-icons" style="font-size: smaller;">phone</i> (+0092-213) 4176586-90</p>
                <p><i class="material-icons" style="font-size: smaller;">phone</i> CELL: 92-311-123456</p>
                <p><i class="material-icons" style="font-size: smaller;">phone</i> USA NO +1(716)761 7792</p>
                <p><i class="material-icons" style="font-size: smaller;">phone</i>UK NO (+44)1123 940 6256</p>
                <p><i class="material-icons" style="font-size: smaller;">email</i> info@art-studio.com</p>


            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-2 mt-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
               
                <p>
                        <a href="index.php">HOME</a>
                    </p>
                    <p>
                        <a href="introduction.php">ABOUT</a>
                    </p>
                    <p>
                        <a href="Contact Us.php">CONTACT</a>
                    </p>
                    
                    <p>
                        <a href="exhibition.php">EXHIBITIONS</a>
                    </p>
                    <p>
                        <a href="login.php">LOGIN</a>
                    </p>

            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2 mt-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Connect With Us</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                <ul class="social-network social-circle">
                    <a href="https://www.facebook.com/" target="_blank"><li class="facebook"><img src="images/facebook1.png" width="30px" height="30px" style="margin-top: 20px; border-radius: 20px;"></li></a>
                    <a href="https://twitter.com/?lang=en" target="_blank"><li class="twitter"><img src="images/twitter.jpg" width="30px" height="30px" style="margin-top: 20px; border-radius: 20px;"></li></a>
                    <a href="https://www.instagram.com/" target="_blank"><li class="instgram"><img src="images/instagram.jpg" width="30px" height="30px" style="margin-top: 20px; border-radius: 10px;"></li></a>
                    <a href="https://www.youtube.com/" target="_blank"><li class="youtube"><img src="images/youtube.png" width="30px" height="30px" style="margin-top: 20px; border-radius: 10px;"></li></a>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright ml-0 px-5 py-3">
        Copyright © 2020
        <a href="#" style="color: white;">Art Studio</a>



    </div>


    <!-- Copyright -->

</footer>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });
</script>


</body>
</html>

