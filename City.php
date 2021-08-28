<?php

	include "config.php";
	session_start();
	if(!isset($_SESSION["user_id"])){
		header("location:index.php");
		echo '<script>';
		echo 'alert("User not logged in.")';
		echo '</script>';
	}else{
		
	}

?>
<html>

	<head>
	
		<meta http-equiv="content-type" charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>XtrmAuto</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
		<link href="css/CreateRedirectPage.css" rel="stylesheet">
		<link href="css/rentCheckout.css" rel="stylesheet">
		
		<script src="https://kit.fontawesome.com/a003c65f08.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
	


	</head>

	<style>

			#logoutBtn{
				color:black;
				border:1px solid black;
				padding:15px;
				border-radius:25px;
			}
			
			#logoutBtn:hover{
				text-decoration:none;
			}
			
			#logoutBtn:focus{
				outline:none;
			}
			
			#logoutBtn:focus{
				box-shadow:0 2px 5px grey;
				transform: translateY(4px);
				transition:0.2s;
			}
			
	</style>
	
	<body id="body">
		
		<!--**************************NAVBAR*****************************-->
		<nav class="navbar navbar-toggleable-md navbar-expand-sm fixed-top" id="navBar" >
  
  			<a id="logoLink" class="form-inline" href="Welcome.php" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
				<ul class="navbar-nav form-inline" id="navbar-container">

    				<li class="nav-item dropdown" >
						
						<a class="nav-link dropdown-toggle navBarLink borderHover" id="rentalDropdown" onClick="ren()" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
							Rental Service
						
						</a>
						
						<div class="dropdown-menu"  id="rentalDropdownMenu" aria-labelledby="navbarDropdown">

          					<a class="dropdown-item" href="rent1.php">Mahindra Scorpio</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent2.php">Vitara Brezza</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent3.php">Toyota Innova</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent4.php">Mahindra XUV300</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent5.php">Toyota Fortuner</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent6.php">Honda City</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent7.php">Tata Nexon</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent8.php">Toyota Camry</a>
							
        				</div>
						
        			</li>

 					 					<li class="nav-item ">

        				<a class="nav-link borderHover" id="buySellDropdown" href="buycars_page.php" data-toggle="" aria-haspopup="true" aria-expanded="false" >

          					Used Cars

        				</a>

        				<div class="" id="buySellDropdownMenu" aria-labelledby="navbarDropdown">
          					
        				</div>

      				</li>
					
					<li class="nav-item">
      
	  					<a href="CarMods.php" class="nav-link navBarLink borderHover">Car Tuning & Mods</a>
						
        			</li>
					
					<li class="nav-item">
      
	  					<a href="CarCare.php" class="nav-link navBarLink borderHover ">Car Care</a>
						
        			</li>
	  
    			</ul>
				
  			</div>
			<div>
				<a href="UpdateProfile.php" id="profilebtn">Profile</a>
			</div>
			<div>
				<a href="Logout.php" id="logoutBtn">Logout</a>
			</div>

		</nav>
		
		<div id="main-content" class="jumbotron">
			<div class="card-columns">
				<div class="card bg-light">
					<img class="card-img-top" src="images/Swiper/city.jpg" alt="City">
				</div>
			</div>
			<table>
				<tr>
					<td>ARAI Mileage</td>
					<td class="text-right">24.1 kmpl</td>
				</tr>
				<tr>
					<td>Engine Displacement</td>
					<td class="text-right">1498cc</td>
				</tr>
				<tr>
					<td>Max Power</td>
					<td class="text-right">97.9bhp@3750rpm</td>
				</tr>
				<tr>
					<td>Transmission Type</td>
					<td class="text-right">Manual</td>
				</tr>
				<tr>
					<td>Fuel Type</td>
					<td class="text-right">Diesel</td>
				</tr>
				<tr>
					<td>Seating Capacity</td>
					<td class="text-right">5</td>
				</tr>
				<tr>
					<td>Body Type</td>
					<td class="text-right">Sedan</td>
				</tr>
				<tr>
					<td>Airbags</td>
					<td class="text-right">6</td>
				</tr>
				<tr>
					<td>Bluetooth</td>
					<td class="text-right">&#10003;</td>
				</tr>
				<tr>
					<td>AUX</td>
					<td class="text-right">&#10003;</td>
				</tr>
			</table>
		</div>
		
			
		<br>

			
		
		
		
	<script type="text/javascript">
		
		$(document).ready(function(){
 		 $('[data-toggle="tooltip"]').tooltip();
		});	
			
		document.getElementById("rentalDropdown").onmousedown = function(){
			
			document.getElementById("rentalDropdownMenu").style.display = "block";
			
		};
			
		document.getElementById("rentalDropdownMenu").onmouseleave = function(){
			
			document.getElementById("rentalDropdownMenu").style.display = "none";
			
		};
			
		document.getElementById("buySellDropdown").onmousedown = function(){
			
			document.getElementById("buySellDropdownMenu").style.display = "block";
			
		};
			
		document.getElementById("buySellDropdownMenu").onmouseleave = function(){
			
			document.getElementById("buySellDropdownMenu").style.display = "none";
			
		};	

		document.getElementById("body").onscroll = function(){
			
			document.getElementById("goTopBtn").style.display = "block";
				
		};
		
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); 
  slides.transition = "smooth";
}
	

		</script>
	
	</body>

</html>