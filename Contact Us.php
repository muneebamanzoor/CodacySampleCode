﻿<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Contact Us - Artistera</title>
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

        .contact {
            margin: 0.25%;
            position: relative;
            text-align: center;
            font-family: 'Lucida Handwriting';
            opacity: 0.9;
        }

        .contacttext {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: goldenrod;
        }

        h2 {
            color: goldenrod;
            margin-left: 20px;
            font-family: Papyrus;
            font-weight: bold;
        }

        h3 {
            color: whitesmoke;
            margin-left: 30px;
            font-family: Arial;
            font-weight: lighter;
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
                                <a class="dropdown-item item4" href="calligraphy.php" >Calligraphy</a>
                                <a class="dropdown-item item1" href="photography.php">Photography</a>
                                <a class="dropdown-item item2" href="painting.php" >Paintings/Drawings</a>
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
    
    

    <div class="contact">
        <img src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YmxhY2t8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" height="100" class="d-block w-100" alt="calligraphy">
        <h1 class="contacttext">Contact Us</h1>
    </div>


    <hr />
    <hr />
    <div>&nbsp;</div>
    <h2 style="text-align:center">Find Us on Map</h2>
    <hr />
    <div class="mapouter">
        <div class="gmap_canvas"><iframe class="gmap_iframe" width="80%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=2 PECHS, Karachi, Karachi City,&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
        <style>
            .mapouter {
                position: relative;
                text-align: center;
                width: 100%;
                height: 400px;
            }

            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                width: 100%;
                height: 400px;
            }

            .gmap_iframe {
                height: 400px !important;
            }
        </style>
    </div>
    <hr />
    <hr />
    <h2>Our Address</h2>
    <hr />
        <h3>Address</h3>
            <p style=" margin-left:30px; color:antiquewhite; font-weight:lighter;">
            P.E.C.H.S Block 2 <br />
            Artisteria Art Gallery near Pakistan Employees Co-Operative Housing Society Block 2 PECHS, 75400.<br />
            Karachi City.<br />
            Pakistan.
            </p>
        <h3>Contact Info</h3>
            <p style=" margin-left:30px; color:antiquewhite; font-weight:lighter;">
                UAN: 111-729-526<br />
                CELL: 92-311-1729526<br />
                DIAL: (+0092-213) 4130786-90<br />
            </p>
        <h3>Email</h3>
            <p style=" margin-left:30px; color:antiquewhite; font-weight:lighter;">
                email: <a href="info@artgaleriaartistry.com">info@artgaleriaartistry.com</a>
            </p>
    <hr />

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
        <div class="footer-copyright ml-0 px-5 py-3">Copyright © 2020 
          <a href="#" style="color: white;">Art Studio</a>
          
        
        
        </div>
        
        
        <!-- Copyright -->
      
      </footer>
      <script>
      $(document).ready(function(){
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
</html>l>