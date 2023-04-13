﻿<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Our Mission - Artistera</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
        /* footer social icons */



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

        .vision {
            margin: 0.25%;
            position: relative;
            text-align: center;
            font-family: 'Lucida Handwriting';
            opacity: 0.9;
        }

        .visiontext {
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
            background-color: none;
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

        @media(max-width: 600) {

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

        .text {
            text-align: left;
            font-family: 'Times New Roman', Times, seri;
            font-style: normal;
            font-size: 20px;
            color: white;
        }

        .heading1 {
            font-style: normal;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .mission {
            margin-top: 30px;
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
                                <a class="dropdown-item item1" href="photography.php" >Photography</a>
                                <a class="dropdown-item item2" href="painting.php" >Paintings/Drawings</a>
                                <a class="dropdown-item item3" href="sculptures.php" >Sculptures</a>
                                <a class="dropdown-item item4" href="abtract.php" >Abstracts</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link media" href="Contact Us.php">CONTACT US</a>
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


    <div class="vision">
        <img src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YmxhY2t8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" height="100" class="d-block w-100" alt="calligraphy">
        <h1 class="visiontext">About Us - Mission</h1>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.arabic-calligraphy.com/wp-content/uploads/2018/09/calligraphy.png" height="400" width="600" class="d-block w-100" alt="slideimage1">
                <div class="carousel-caption d-none d-md-block">
                    <strong><h1 style="color: black;  text-align:right; font-weight:bolder; font-family: Papyrus;">Calligraphy</h1></strong>

                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i1.wp.com/doodlewash.com/wp-content/uploads/2019/05/January-Storm-1000w.jpg?fit=1000%2C581&ssl=1" height="400" width="600" class="d-block w-100" alt="slideimage2">
                <div class="carousel-caption d-none d-md-block">
                    <strong><h1 style="color: black; text-align:right; font-weight:bolder; font-family: Papyrus">Abstract Art</h1></strong>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://previews.123rf.com/images/olegdudko/olegdudko1908/olegdudko190803400/128880447-row-of-artist-paint-brushes-on-background.jpg" height="400" class="d-block w-100" alt="slideimage3">
                <div class="carousel-caption d-none d-md-block">
                    <strong><h1 style="color: darkslategray;  text-align:left; font-weight:bolder; font-family: Papyrus; ">Paintings</h1></strong>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.mos.cms.futurecdn.net/gvQ9NhQP8wbbM32jXy4V3j.jpg" height="400" class="d-block w-100" alt="slideimage4">
                <div class="carousel-caption d-none d-md-block">
                    <strong><h1 style="color: bisque;  text-align:right; font-weight:bolder; font-family: Papyrus;">Photography</h1></strong>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://webneel.com/daily/sites/default/files/images/daily/08-2020/23-modeled-sculpture-selena-wax-madame.jpg" height="400" class="d-block w-100" alt="slideimage5">
                <div class="carousel-caption d-none d-md-block">
                    <strong><h1 style="color: black;  text-align:left; font-weight:bolder; font-family: Papyrus;">Sculptures</h1></strong>
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
    <div class="row text-center">
        <div class="col-xs=12 col-sm-12 col-md-12 col-lg-12">
            
                <div class="header1">
                    <div class="about">
                    <h1 style="color: white ; font-family:cursive; margin-top: 20px;">Our Vision</h1>
                </div>
                    <hr />
<div id="divcontainer">
    <div class="d-inline-block" id="contentcolumn">
        <div class="innertext" style=" font-family:Arial;">
            <br>
            <p>Artistera Art Gallery was initially opened in 2015 inspired by the diverse talent shown by artists in Pakistan from all regions of the country. We enjoyed a liaison with artists and the patrons whose presence initiated exhibitions here.</p>

            <p>Artistera Art Gallery is well known for having some of the most prestigious paintings ever painted by Pakistani artists. The gallery continuously strives to maintain best relationships with the artists to ensure that customers get the best work. We are honored that Colin’s last three exhibitions took place at the gallery, and drew the interest of students and art connoisseurs alike.</p>

            <p>Our customers feel secure in buying paintings from us because we maintain a reputation in the art industry and have strict measures to ensure that only original artworks are delivered to them. Every art piece is delivered with utmost care and caution. We welcome you to visit our gallery and be the better judge.</p>
            <br />
            <p style="text-align:left; margin-left:10px; font-family:Arial;">
                Sohail Manzoor<br />
                Director - Artistera Art Gallery
            </p>
            
        
        </div>
    </div>

     <div class="d-inline-block" id="rightcolumn">
        <div class="innertext" style="text-align:center;"><img src="images/art.jpg" style="border: 1 px solid white; box-shadow: 3px 3px white;" height="300" width="280" /></div>
    </div>
</div> 
</div>
</div>
</div>
<hr />


  
    <section class="mission">
        <div class="container mission1 ">
           <div class="row text-center">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                 
                    <div class="heading2 "style="border: 1px solid white; box-shadow: 3px 3px grey; background-image:url(https://i.pinimg.com/474x/43/9d/c5/439dc597610eeef882c614577bb42aad.jpg);">
                        <br />
                       <h2 class="heading1"><span style="color: darkgoldenrod;"><strong><marquee>Our Services</marquee></strong></span></h2><hr style="color: darkgoldenrod;" />
                        <p class="text" style="margin: 20px; text-align:center">
                         We at Artistera Art gallery respects the choice of our customers in choosing us to buy Pakistani art work online. Every art for sale is a piece of Pakistani heritage and represents our colorful culture. These paintings are not only a wonderful collection but also essential in promoting our Pakistani culture where ever they are displayed.
                         <br />We provide genuine Pakistani artwork for sale that are available at our art gallery in Karachi Pakistan. All art gallery paintings can be delivered worldwide. You can inquire about paintings for sale by clicking on <a href="Contact%20Us.html" target="_blank" style="color:aliceblue;">Contact Us</a>.
                        </p>
                    </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >   
                <div class="heading2 " style="border: 1px solid white; box-shadow: 3px 3px grey; margin-bottom: 20px; background-image:url(https://i.pinimg.com/474x/43/9d/c5/439dc597610eeef882c614577bb42aad.jpg);">
                    <br />
                    <h3 class="heading1"><span style="color: darkgoldenrod;"><strong>News/Upcoming Events</strong></span></h3><hr style="color: darkgoldenrod;" />
                    <p class="text" style="margin: 20px; text-align:center;">
                        Artistera Art Gallery is about to announce a flat 25% <strong><span>SALE</span></strong> as an <a href="exhibition.html" target="_blank" style="color:aliceblue;">Independence Sale</a>  for our honourable customers on our limited services
                        including paintings, drawings, figuratives, sculptures etc. The details of the event will be published on on website. Also, our website is including <em>Fine Arts</em> and <em>Landscape</em> categories really soon to promote the heritage worldwide.
                        There will be an exhibition of displaying our all latest crafts and artworks for our customers. Don't dare to miss
                        this mega launch and regsiter yourself to get your hands on our Artist's work. Stay tuned to get updates about events and Exhibitions.
                    </p> 
             </div>
          </div>

           </div>
          </div>
  
     </section>  

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
</html>