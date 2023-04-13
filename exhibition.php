<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exhibitions - Artistera</title>
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

        label {
            margin-left: 30px;
        }

        .check {
            margin-left: 100px;
        }

        .check1 {
            margin-left: 180px;
        }

        .check2 {
            margin-left: 80px;
            background-color: teal !important;
            border: 1px solid white !important;
            font-style: none;
            margin-bottom: 30px;
        }

        .exhibition {
            margin: 0.25%;
            position: relative;
            text-align: center;
            font-family: 'Lucida Handwriting';
            opacity: 0.9;
        }

        .exhibitiontext {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: goldenrod;
        }

        .exhibition-text {
            text-align: left;
            font-family: Papyrus;
            margin-left: 80px;
            font-size: large;
        }

        .col-12 {
            width: 80%;
            height: auto;
            text-align: center;
            margin: 5% 10%;
            border-radius: 20px;
            background-size: cover;
            background-image: url(https://c4.wallpaperflare.com/wallpaper/573/732/47/golden-hours-wallpaper-preview.jpg);
            background-repeat: no-repeat;
        }

        .container {
            width: 80%;
            height: auto;
            text-align: center;
            margin: 5% 10%;
            border-radius: 20px;
            background-size: cover;
            background-image: url(https://c4.wallpaperflare.com/wallpaper/573/732/47/golden-hours-wallpaper-preview.jpg);
            background-repeat: no-repeat;
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
                                <a class="dropdown-item item2" href="painting.php">Paintings/Drawings</a>
                                <a class="dropdown-item item3" href="sculptures.php" >Sculptures</a>
                                <a class="dropdown-item item4" href="abtract.php">Abstracts</a>

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
                               
                                <a class="dropdown-item item2" href="login1.php">As a Customer</a>

                            </div>
                        </li>


                    </ul>

                    <div class="dropdown">
                        <input type="text" placeholder="Search..." onclick="myFunction()" id="myInput" onkeyup="filterFunction()">
                        <div id="myDropdown" class="dropdown-content">
                            <a href="Calligraphy.php" target="_blank">Calligraphy</a>
                            <a href="Painting.php" target="_blank">Paintings</a>
                            <a href="Sculptures.php" target="_blank">Sculptures</a>
                            <a href="Photography.php" target="_blank">Photography</a>
                            <a href="Abtract.php" target="_blank">Abstract</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div class="exhibition">
        <img src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YmxhY2t8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" height="100" class="d-block w-100" alt="calligraphy">
        <h1 class="exhibitiontext">Online Exhibitions</h1>
    </div>

    <div class="row text-center">
        <div class="col-12 ">
            <br />
            <h1 class="exhibition-text" style="font-size: xx-large; font-weight:bolder; margin-top: 20px;">Upcoming Exhibitions</h1>
            <a href="#"><img src="https://www.thesiddiqsonsgroup.com/wp-content/uploads/2019/08/14thaugustbanner-pakistan-1200x675.jpg" style="text-align: center; margin:3% 5%; height: 400px; width: 90%;"></a><br>
            <p class="exhibition-text">Coming Soon</p>
            <p class="exhibition-text">14th August Celebrations</p>
            <p class="exhibition-text">Days:  10th August - 14th August, 2021</p><br />
        </div>
        <!-- <div class="col-12 " style="margin-top: 20px; background-color: whitesmoke; width: 80%; height: auto; text-align: center; margin-left: 120px; margin-bottom: 30px;">
            <h1 class="exhibition-text" style="font-size: xx-large; margin-top: 20px;">Past Exhibitions</h1>
        </div>
         -->
    </div>
    <div class="container">
        <br />
        <h1 class="exhibition-text" style="font-size: xx-large; font-weight:bolder; margin-top: 20px;">Past Exhibitions</h1>
        <br />
        <div class="row">

            <div class="col">
                <div class="card">
                    <a href="#"><img src="images/ex1.jpeg" height="400" width="400" class="card-img-top" alt="Image1"></a>
                    <div class="card-body">
                        <p style="text-align: left;">C.O.R.E - Exhibition</p>
                        <h3 class="card-title">POPE.L</h3>
                        <p class="card-text">Four Panels<br />March 5 - April 10, 2021<br /></p>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#"><img src="images/ex3.jpeg" height="400" width="400" class="card-img-top" alt="Image1"></a>
                    <div class="card-body">
                        <p style="text-align: left;">BRAINS - Exhibition</p>
                        <h3 class="card-title">EDDIE MARTINEZ</h3>
                        <p class="card-text">Inside Thoughts<br />January 21 - February 27, 2021<br /></p>


                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card">
                    <a href="#"><img src="images/ex2.jpeg" height="400" width="400" class="card-img-top" alt="Image1"></a>
                    <div class="card-body">
                        <p style="text-align: left;">Mean Inverter - Exhibition</p>
                        <h3 class="card-title">JULIJE KNIFER</h3>
                        <p class="card-text">Meander<br />January 9 - February 15, 2021<br /></p>


                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col">
                <div class="card">
                    <a href="#"><img src="images/ex4.jpeg" height="400" width="400" class="card-img-top" alt="Image1"></a>
                    <div class="card-body">
                        <p style="text-align: left;">GROWTH- Exhibition</p>
                        <h3 class="card-title">JOE BRADLEY AND CHRIS MARTIN</h3>
                        <p class="card-text">Growth <br />March 1 - April 6, 2020<br /></p>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#"><img src="images/ex5.jpeg" height="400" width="400" class="card-img-top" alt="Image1"></a>
                    <div class="card-body">
                        <p style="text-align: left;">Years Together - Exhibition</p>
                        <h3 class="card-title">JACOLBY SATTERWHITE</h3>
                        <p class="card-text">We are in hell when we hurt each other<br />September 21 - Octuber 6, 2019<br /></p>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#"><img src="images/ex6.jpeg" height="400" width="400" class="card-img-top" alt="Image1"></a>
                    <div class="card-body">
                        <p style="text-align: left;">JEFA Exhibition</p>
                        <h3 class="card-title">THE ESTATE OF GENERAL IDEA</h3>
                        <p class="card-text">Jiggurat<br />November 30 - December 18, 2018<br /></p>


                    </div>
                </div>
            </div>




        </div>
        <div class="row" style="margin-top: 20px; margin-bottom: 30px;">
            <div class="col">
                <div class="card">
                    <a href="#"><img src="images/ex7.jpeg" height="400" width="400" class="card-img-top" alt="Image1"></a>
                    <div class="card-body">
                        <p style="text-align: left;">Explore the Town - Exhibition</p>
                        <h3 class="card-title">MARTHA ROSLER</h3>
                        <p class="card-text">If you can't afford to live here then MOVE!<br />July 7 - July 9, 2016<br /></p>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#"><img src="images/ex8.jpeg" height="400" width="400" class="card-img-top" alt="Image1"></a>
                    <div class="card-body">
                        <p style="text-align: left;">The Bed Club - Exhibition</p>
                        <h3 class="card-title">KARL HAENDEL</h3>
                        <p class="card-text">Organic Bedfellow<br />Octuber 5 - December 20, 2016<br /></p>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#"><img src="images/ex9.jpeg" height="400" width="400" class="card-img-top" alt="Image1"></a>
                    <div class="card-body">
                        <p style="text-align: left;">Inauguration - Exhibition</p>
                        <h3 class="card-title">SARAH BRAHMAN</h3>
                        <p class="card-text">Yours<br />Octuber 7 - Decmeber 6, 2014<br /></p>
                    </div>
                </div>
                <br />
            </div>




        </div>
        <hr />
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