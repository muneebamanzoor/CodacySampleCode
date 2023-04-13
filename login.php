<?php
session_start();

require_once ('connection.php');


if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from registerform where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						
                        
						$_SESSION['loggedin'] = true;
						$_SESSION['username']=$username;
						$_SESSION['password']=$password;
						$_SESSION['email']=$user_data['email'];
						$_SESSION['address']=$user_data['address'];
                        $_SESSION['country']=$user_data['country'];
						$_SESSION['phone']=$user_data['phone'];
						
						
						header("Location:calligraphy.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>











<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="login.js"></script>
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
    background-image: url(https://images.unsplash.com/photo-1608501947097-86951ad73fea?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmxhY2slMjBwYWludGluZ3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80);
    background-position: center;
    background-size: cover;
}

.getstar {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

::before {
    content: '';
    position: absolute;
    top: 200px;
    background-image: url(https://images.unsplash.com/photo-1608501947097-86951ad73fea?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmxhY2slMjBwYWludGluZ3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80);
    background-size: cover;
    background-position: top center;
    opacity: 0.5;
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
    margin: 0 auto;
    background-color: black; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    display: block;
    font-size: 16px;
    border-radius: 5px;
}

.check2 {
    margin: 0 20%;
    background-color: #4CAF50; /* Green */
    color: white;
    padding: 10px 20px;
    text-align: center;
    display: block;
    font-size: 16px;
    border: none;
}

.check1:hover {
    opacity: 0.9;
    font-weight: lighter;
}

.check2:hover {
    opacity: 0.9;
    font-weight: lighter;
}
</style>
   
</head>

<body>
    <!------NavigationBar-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="200" width="200" /></a>
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
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="introduction.php">Introduction</a>
                                <a class="dropdown-item" href="mission.php">Our Mission</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown down1">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
                            <div class="dropdown-menu menu1" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item item4" href="calligraphy.php" >Calligraphy</a>
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

                        
                        <li class="nav-item dropdown down2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                LOGIN
                            </a>
                            <div class="dropdown-menu menu2" aria-labelledby="navbarDropdown">
                                
                                <a class="dropdown-item item2" href="login.php">As a Customer</a>

                            </div>
                        </li>


                    </ul>

                    <div class="dropdown">
                        <input type="text" placeholder="Search..." onclick="myFunction()" id="myInput" onkeyup="filterFunction()">
                        <div id="myDropdown" class="dropdown-content">
                            <a href="calligraphy.php" target="_blank">Calligraphy</a>
                            <a href="painting.php" target="_blank">Paintings</a>
                            <a href="sculptures.php" target="_blank">Sculptures</a>
                            <a href="photography.php" target="_blank">Photography</a>
                            <a href="abtract.php" target="_blank">Abstract</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

 <div class="getstar">
       
           
       

<div class="row" style="background-color: whitesmoke; margin-top:20px; margin-bottom:20px; border-radius:15px;"><hr />
    <div class="col-12">
        <hr />
        <h1 style=" text-align: center; font-family:Bahnschrift;">
            Account Login
        </h1>
        <hr />


        <form style="border: 1px solid  white; text-align: left; background-color:white;" method="POST"   >
          
           

            <fieldset style="border: 1px solid wheat;"><br />
                <legend style="text-align: center;">Costumer Login<br /></legend>
                <label style="width:20%"  class="label"><br />Username: &nbsp;</label>
                <input style="width:70%"  type="text"  name="username" placeholder="  Enter Username"><br>
                <br>
                <label style="width:20%">Password: &nbsp;</label>
                <input style="width:70%" type="password"  name="password" placeholder="  Enter Your Password"><br>

               

                <br>

                <input type="submit" value="Login" class="check1">
                <hr />

                
                <p style="text-align: center"> Don't have an account?<br />Create your account. It's free and only takes a minute.</p>
                <a style="margin-left:120px" href="signup.php" target="_blank" class="btn btn-primary btn-lg active check2 " role="button" aria-pressed="true">Create An Account</a>
            <br />
                
            </fieldset>
          
    </form>
    <br >
    <br >

    </div>
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
                        <a href="#"><li class="facebook"><img src="images/facebook1.png" width="30px" height="30px" style="margin-top: 20px; border-radius: 20px;"></li></a>
                        <a href="#"><li class="twitter"><img src="images/twitter.jpg" width="30px" height="30px" style="margin-top: 20px; border-radius: 20px;"></li></a>
                        <a href="#"><li class="instgram"><img src="images/instagram.jpg" width="30px" height="30px" style="margin-top: 20px; border-radius: 10px;"></li></a>
                        <a href="#"><li class="youtube"><img src="images/youtube.png" width="30px" height="30px" style="margin-top: 20px; border-radius: 10px;"></li></a>
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

            
            </body>
            </html>

