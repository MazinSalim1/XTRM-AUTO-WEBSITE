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
		<link href="css/checkout_car.css" rel="stylesheet">
		<link href="css/navBar.css" rel="stylesheet">
		
		<script src="https://kit.fontawesome.com/a003c65f08.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
	


	</head>
	
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
					<img class="card-img-top" src="images/buycars-page/tata_harrier.jpg" alt="Tata_Harrier">
				</div>
			</div>
			<table>
				<tr>
					<th>Model</th>
					<td>Harrier</td>
				</tr>
				<tr>
					<th>Manufacturer</th>
					<td>Tata</td>
				</tr>
				<tr>
					<th>Color</th>
					<td>Orange</td>
				</tr>
				<tr>
					<th>Model Year</th>
					<td>2018</td>
				</tr>
				<tr>
					<th>Price</th>
					<td>Rs 10,00,000</td>
				</tr>
				
				<tr>
					<th>Distance</th>
					<td>100,000 KM</td>
				</tr>
				<tr>
					<th>Location</th>
					<td>Basavangudi,Bengaluru</td>
				</tr>
				<tr>
					<th>Accidents</th>
					<td>0</td>
				</tr>
				<tr>
					<th>Fuel Type</th>
					<td>Diesel</td>
				</tr>
				<tr>
					<th>Owners</th>
					<td>2</td>
				</tr>
			</table>
			<a href="buycars_page.php" style="position:relative; float:right; top:-170px;right:85px;">Click here to browse used cars</a>
			<div id="phoneicon">
				<img style="width:30px;height:30px;position:relative;z-index:-1;float:right;bottom:100px;right:40px;" src="/images/icons/phoneicon.png">
				<p style="float:right;position:relative;bottom:100px;left:230px;font-family: 'devil_tail_-_personal_useRg';">Dealer Contact: +91 7755303063</p>
			</div>
		</div>
		
		<div class="slideshow-container">
			  <div class="mySlides fade">
				<div class="numbertext">1 / 30</div>
				<img src="images/buycars-page/bmw_3.jpeg" style="width:100%">
				<div class="text">BMW M3</div>
			  </div>
			  <div class="mySlides fade">
				<div class="numbertext">2 / 30</div>
				<img src="images/buycars-page/audi_a4.jpeg" style="width:100%">
				<div class="text">Audi A4</div>
			  </div>
			  <div class="mySlides fade">
				<div class="numbertext">3 / 30</div>
				<img src="images/buycars-page/benz_eclass.jpeg" style="width:100%">
				<div class="text">Benz E-Class</div>
			  </div>
			  <div class="mySlides fade">
				<div class="numbertext">4 / 30</div>
				<img src="images/buycars-page/AUDI_R8.jpg" style="width:100%">
				<div class="text">Audi R8</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">5 / 30</div>
				<img src="images/buycars-page/BMW_M7.jpg" style="width:100%">
				<div class="text">BMW M7</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">6 / 30</div>
				<img src="images/buycars-page/brezza.jpg" style="width:100%">
				<div class="text">Vitara Brezza</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">7 / 30</div>
				<img src="images/buycars-page/Cadillac_Escalade.jpg" style="width:100%">
				<div class="text">Cadillac Escalade</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">8 / 30</div>
				<img src="images/buycars-page/Chevy_Silverado.jpg" style="width:100%">
				<div class="text">Chevrolet Silverado</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">9 / 30</div>
				<img src="images/buycars-page/compass.jpg" style="width:100%">
				<div class="text">Jeep Compass</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">10 / 30</div>
				<img src="images/buycars-page/duster.jpg" style="width:100%">
				<div class="text">Nissan Duster</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">11 / 30</div>
				<img src="images/buycars-page/ford_bronco.jpg" style="width:100%">
				<div class="text">Ford Bronco</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">12 / 30</div>
				<img src="images/buycars-page/ford_ecosport.jpeg" style="width:100%">
				<div class="text">Ford Ecosport</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">13 / 30</div>
				<img src="images/buycars-page/Ford_F150.jpg" style="width:100%">
				<div class="text">Ford F-150 Raptor</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">14 / 30</div>
				<img src="images/buycars-page/HEXA.jfif" style="width:100%">
				<div class="text">Tata Hexa</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">15 / 30</div>
				<img src="images/buycars-page/honda_civic.jpg" style="width:100%">
				<div class="text">Honda Civic</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">16 / 30</div>
				<img src="images/buycars-page/MINI_Cooper.jpg" style="width:100%">
				<div class="text">Mini Cooper</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">17 / 30</div>
				<img src="images/buycars-page/ms800.jpg" style="width:100%">
				<div class="text">Maruti 800</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">18 / 30</div>
				<img src="images/buycars-page/nissan_sunny.jpg" style="width:100%">
				<div class="text">Nissan Sunny</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">19 / 30</div>
				<img src="images/buycars-page/kia_seltos.jpeg" style="width:100%">
				<div class="text">Kia Seltos</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">20 / 30</div>
				<img src="images/buycars-page/RangeRover_Vogue.jpg" style="width:100%">
				<div class="text">Range Rover Vogue</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">21 / 30</div>
				<img src="images/buycars-page/skoda_rapid.jpeg" style="width:100%">
				<div class="text">Skoda Rapid</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">22 / 30</div>
				<img src="images/buycars-page/tata_harrier.jpg" style="width:100%">
				<div class="text">Tata Harrier</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">23 / 30</div>
				<img src="images/buycars-page/thar.jpeg" style="width:100%">
				<div class="text">Mahindra Thar</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">24 / 30</div>
				<img src="images/buycars-page/toyota_fortuner.jpeg" style="width:100%">
				<div class="text">Toyota Fortuner</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">25 / 30</div>
				<img src="images/buycars-page/toyota_innova.jpg" style="width:100%">
				<div class="text">Toyota Innova</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">26 / 30</div>
				<img src="images/buycars-page/toyota_lc200.jpg" style="width:100%">
				<div class="text">Toyota LandCruiser</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">27 / 30</div>
				<img src="images/buycars-page/toyota_supra.jpg" style="width:100%">
				<div class="text">Toyota Supra</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">28 / 30</div>
				<img src="images/buycars-page/VW_Beetle.jpg" style="width:100%">
				<div class="text">Volkswagen Beetle</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">29 / 30</div>
				<img src="images/buycars-page/VW_Polo.jpg" style="width:100%">
				<div class="text">Volkswagen Polo</div>
			  </div><div class="mySlides fade">
				<div class="numbertext">30 / 30</div>
				<img src="images/buycars-page/XUV500.jpg" style="width:100%">
				<div class="text">Mahindra XUV500</div>
			  </div>

			 
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
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
