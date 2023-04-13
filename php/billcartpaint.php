<?php 

session_start();

include("../connection.php");
	
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){	
$query="select * from registerform where username = '{$_SESSION['username']}' limit 1";
              $resultset = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));			
			  while( $record = mysqli_fetch_assoc($resultset) ) {
			
			  
			 $name=$record['username'];
			}
}
			
				
	
?>


	
	
	

	
	
	
	
<!DOCTYPE html>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistera</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
                   margin-top: 100px;
               }

                   ul.social-network li {
                       display: inline;
                       margin: 0 5px;
                       margin-top: 20px;
                   }

               .facebook {
                   margin-top: 30px;
               }
               /* footer social icons */

               /* .social-network a.icoFacebook:hover {
           background-color: royalblue;
         }

          .social-network a.icoLinkedin:hover {
           background-color: #007bb7;
         }
         .social-network a.icoinstagram:hover {
           background-color: royalblue;
         }
          */
               /* .social-network a.icoFacebook i,
         .social-network a.icoLinkedin:hover i {
          color: black;
         }
         .social-network a.icotwitter i,
         .social-network a.icoLinkedin:hover i {
           color: #fff;
         }
         .social-network a.icoinstagram i,
         .social-network a.icoLinkedin:hover i {
           color: #fff;
         }
         .social-network a.icoyoutube i,
         .social-network a.icoLinkedin:hover i {
           color: #fff;
         }

         .social-network a.socialIcon:hover,
         .socialHoverClass {
           color: #44BCDD; */
               /* } */

               /* .social-circle li a {
           display: inline-block;
           position: relative;
           margin: 0 auto 0 auto;
           -moz-border-radius: 50%;
           -webkit-border-radius: 50%;
           border-radius: 50%;
           text-align: center;
           width: 30px;
           height: 30px;
           font-size: 15px;
         }

        .social-circle li i {
           margin: 0;
           line-height: 30px;
           text-align: center;
         } */

               body {
                   width: 100%;
                   height: 100%;
                   background-image: url("https://img5.goodfon.com/wallpaper/nbig/c/fc/uzor-zolotoi-chernyi-fon.jpg");
                   background-position: center;
                   background-size: cover;
               }

               .getstar {
                   position: relative;
                   display: flex;
                   justify-content: center;
                   align-items: center;
                   height: 100vh;
               }

               ::before {
                   content: '';
                   position: absolute;
                   top: 200px;
                   background-image: url("data:image/jpeg;base64,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");
                   background-size: cover;
                   background-position: top center;
                   opacity: 0.5;
               }

               button {
                   position: relative;
                   font-size: 2rem;
                   text-align: center;
               }

               .check2 {
                   margin: 0 40% 0 40%;
                   background-color: black; /*gainsboro*/
                   ;
                   color: white;
                   text-decoration: none;
                   font-family: Candara;
                   padding: 15px 25px;
                   text-align: center;
                   display: block;
                   font-size: 20px;
                   font-weight: bold;
                   border: solid;
                   border-color: white;
                   border-radius: 50px;
               }

                   .check2:hover {
                       color: orangered;
                   }
                   .main_bill {
                       height:600px;
                       width:500px;
                       background-color:grey;
                       text-align:center;
                       margin-top:40px;
                       margin-left: 30%;}
                   
    </style>
</head>

<body>
       <!----NavigationBar-->
       <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php"><img src="https://i.pinimg.com/originals/66/f4/c3/66f4c3b275dc72c65407f04d07fb31ac.png" height="200" width="200" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link space" href="#">&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home" href="../index.php">HOME</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top:40px;">
                                <a class="dropdown-item" href="../introduction.php">Introduction</a>
                                <a class="dropdown-item" href="../mission.php">Our Mission</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown down1">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
                            <div class="dropdown-menu menu1" aria-labelledby="navbarDropdown" style="margin-top:40px;">
                                <a class="dropdown-item item4" href="../calligraphy.php" >Calligraphy</a>
                                <a class="dropdown-item item1" href="../photography.php" >Photography</a>
                                <a class="dropdown-item item2" href="../painting.php" >Paintings/Drawings</a>
                                <a class="dropdown-item item3" href="../sculptures.php" >Sculptures</a>
                                <a class="dropdown-item item4" href="../abtract.php" >Abstracts</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link media" href="../Contact Us.php" >CONTACT US</a>
                        </li>
                       



                        <li class="nav-item">
                            <a class="nav-link media" href="../exhibition.php">EXHIBITIONS</a>
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
                               
                                <a class="dropdown-item item2" href="../login.php">As a Customer</a>

                            </div>
                        </li>


                    </ul>

                    <div class="dropdown">
                        <input type="text" placeholder="Search..." onclick="myFunction()" id="myInput" onkeyup="filterFunction()">
                        <div id="myDropdown" class="dropdown-content">
                            <a href="../Calligraphy.php" target="_blank">Calligraphy</a>
                            <a href="../Painting.php" target="_blank">Paintings</a>
                            <a href="../Sculptures.php" target="_blank">Sculptures</a>
                            <a href="../Photography.php" target="_blank">Photography</a>
                            <a href="../Abtract.php" target="_blank">Abstract</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div class="main_bill">  
        
		
          <h1 class='bill'>BILL RECIPT</h1>
		  
		  
          
          <div> <h2>DELIVERY INFORMATION</h2> 
        <div> 
            <p><strong>NAME: </strong><?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $_SESSION['username'];} ?>   </p>
							   
							   
							   
            <p><strong>E-MAIL:</strong> <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $_SESSION['email'] ;} ?> </p>
            <p><strong>MOBILE NUMBER: </strong><?php 
			
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $_SESSION['phone'];} ?> </p>
            <p><strong>ADDRESS: </strong><?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $_SESSION['address'];} ?> </p>
        </div>
        <hr />
        <div> 
            <p><strong>TOTAL PRODUCTS: </strong><?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $_SESSION['count'];} ?> </p>
            <p><strong>TOTAL PRICE: </strong><?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){echo $_SESSION['total']; }?></p>
            <p><strong>DELIVERY CHARGES: FREE </strong></p>
            <p><strong>TOTAL BILL: </strong><?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){echo $_SESSION['total']; }?></p>
            <p><strong>PAYMENT: PAYMENT ON DELIVERY OF ORDER</strong></p>
        </div>
        <h2>ORDER WILL BE DILIVERED IN 5-6 WORKING DAYS</h2>
        </div>

         
        </div>
     </div>
                </diV>
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
                        <a href="../index.php">HOME</a>
                    </p>
                    <p>
                        <a href="../introduction.php">ABOUT</a>
                    </p>
                    <p>
                        <a href="../Contact Us.php">CONTACT</a>
                    </p>
                    
                    <p>
                        <a href="../exhibition.php">EXHIBITIONS</a>
                    </p>
                    <p>
                        <a href="../login.php">LOGIN</a>
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


