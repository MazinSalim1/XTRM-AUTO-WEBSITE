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
	
		<title>XtrmAuto</title>
		
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<script src="https://kit.fontawesome.com/160f8a0fd9.js" crossorigin="anonymous"></script>

		
		
		<link href="css/navBar.css" rel="stylesheet">
	
		<link href="css/CarComparisonPage.css" rel="stylesheet">
		
		
		
		
	
	<style>
	
		body{
		
			font-size:17px;
			font-weight:bold;
			font-family:'Montserrat', sans-serif;
			margin-bottom:100px;
			background-image:url("images/CarComparison/1.jpg");
			
		}
	
	
	</style>
	
	
	</head>
	
	<body id="body">
	
	<div class="container-fluid">
		
		<nav class="navbar navbar-toggleable-md navbar-expand-md fixed-top" id="navBar" >
  
  			<a id="logoLink" class="form-inline" href="welcome.php" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
				<ul class="navbar-nav form-inline" id="navbar-container">

    				<li class="nav-item dropdown" >
						
						<a class="nav-link dropdown-toggle navBarLink borderHover" id="rentalDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
						
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

 					<li class="nav-item dropdown">

        				<a class="nav-link borderHover" id="buySellDropdown" href="buycars_page.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

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
		
	</div>
	
	<div class="jumbotron" id="jumbotron_1">
	
		<h1>The Car you drive says a Lot about You...</h1>
	
	</div>
	
	
	<div class="dropdown" id="carDropdownBtn">
	
		<span style="font-style:italic; border-bottom:2px inset black;" class="bold">Select Your Car:</span>
		<button class="button dropdown-toggle" type="button" id="carDropdown" data-toggle="#carDropdown" aria-haspopup="true" aria-expanded="false">
			Choose
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="carDropdownMenu">
			
			<a class="dropdown-item" href="#card_1" id="option_1">Mahindra Scorpio 2015</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#card_2" id="option_2">Vitara Brezza 2016</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#card_3" id="option_3">Toyota Innova Crysta 2017</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#card_4" id="option_4">Mahindra XUV300 2019</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#card_5" id="option_5">Toyota Fortuner 2016</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#card_6" id="option_6">Honda City 2017</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#card_7" id="option_7">Tata Nexon 2017</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#card_8" id="option_8">Toyota Camry SE 2018</a>			
			
		</div>
	</div>
		
	<div class="dropdown" id="compareCarDropdownBtn">
	
		<span class="bold" style="font-style:italic; border-bottom:2px inset black;">Compare With:</span>
		<button class="button dropdown-toggle" type="button" id="compareCarDropdown" data-toggle="#compareCarDropdown" aria-haspopup="true" aria-expanded="false">
			Choose
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="compareCarDropdownMenu">
			
			<a class="dropdown-item" href="#compareCard_1" id="compareOption_1">Mahindra Scorpio 2015</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#compareCard_2" id="compareOption_2">Vitara Brezza 2016</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#compareCard_3" id="compareOption_3">Toyota Innova Crysta 2017</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#compareCard_4" id="compareOption_4">Mahindra XUV300 2019</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#compareCard_5" id="compareOption_5">Toyota Fortuner 2016</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#compareCard_6" id="compareOption_6">Honda City 2017</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#compareCard_7" id="compareOption_7">Tata Nexon 2017</a>
			<div class="separatingBorder"></div>
			<a class="dropdown-item" href="#compareCard_8" id="compareOption_8">Toyota Camry SE 2018</a>	
	
		</div>
	</div>
	

	
	
<!--******************COMPARISON BLOCKS**********************-->
	
<div class="container" id="mainCardContainer" >

	
	<div class="" id="card_1">
		
		<div class="card mb-3">
			<img src="images/Swiper/scorpio.png" class="card-img-top" alt="scorpio-image" >
			<div class="card-body">
			<h5 class="card-title">Mahindra Scorpio</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Scorpio	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2015	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Blue	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Black/Blue	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						16.36 Kmpl
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						2179 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Manual	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						460 Litres	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear	</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>12.44 - 16.31 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>

	</div>

	<div class="" id="card_2">
		
		<div class="card mb-3">
			<img src="images/Swiper/brezza.jpg" class="card-img-top" alt="brezza-image" >
			<div class="card-body">
			<h5 class="card-title">Vitara Brezza</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Vitara Brezza	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2016	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Blue	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Black	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						24.3 Kmpl	
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1248 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Manual	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						328 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>7.12-10.59 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>

	</div>

	<div class="" id="card_3">
		
		<div class="card mb-3">
			<img src="images/Swiper/innova.png" class="card-img-top" alt="innova-image" >
			<div class="card-body">
			<h5 class="card-title">Toyota Innova</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 45 mins ago</small></p>
			</div>
		
			
			<table width="100%">
			
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance:
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Innova Crysta	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2017	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Maroon/White	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Black/Brown	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						13.68 Kmpl	
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						2393 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic/Manual
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						300 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear	</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>13.88-24.67 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fa-2x far fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>

	</div>



	<div class="" id="card_4">
		
		<div class="card mb-3">
			<img src="images/Swiper/xuv300.jpg" class="card-img-top" alt="xuv300-image">
			<div class="card-body">
			<h5 class="card-title">Mahindra XUV300</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 1 Hr ago</small></p>
			</div>
			
			
			
			<table width="100%">
				<tbody>
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						XUV300	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2019	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Mettalic Red
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Beige	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						20 Kmpl	
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1497 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic	</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						259 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear	</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>7.94-12.29 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				
				
				</tbody>
				
			</table>
			
		</div>

	</div>

	<div class="" id="card_5">
		
		<div class="card mb-3">
			<img src="images/Swiper/fortuner.jpg" class="card-img-top" alt="fortuner-image" >
			<div class="card-body">
			<h5 class="card-title">Toyota Fortuner</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Fortuner	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2016	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						White	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Bronze	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						12.9 Kmpl
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						2755 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						296 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger		
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>28.66-36.88 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				
				
				</tbody>
				
			</table>
			
		</div>

	</div>

	<div class="" id="card_6">
		
		<div class="card mb-3">
			<img src="images/Swiper/city.jpg" class="card-img-top" alt="city-image" >
			<div class="card-body">
			<h5 class="card-title">Honda City</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						City	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2017	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Grey	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Beige	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						17.4 Kmpl
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1497 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Manual	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Petrol	</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						328 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front 	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						None		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>7.34-11.40 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>
		
	</div>

	<div class="" id="card_7">
		
		<div class="card mb-3">
			<img src="images/Swiper/nexon.jpg" class="card-img-top" alt="nexon-image" >
			<div class="card-body">
			<h5 class="card-title">Tata Nexon</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Nexon	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2017	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Blue	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Beige	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						21.5 Kmpl
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1497 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						350 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front 	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>6.99-12.70 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>
		
	</div>

	<div class="" id="card_8">
		
		<div class="card mb-3">
			<img src="images/Swiper/camry.jpg" class="card-img-top" alt="camry-image" >
			<div class="card-body">
			<h5 class="card-title">Toyota Camry</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Camry SE	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2017	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Black	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Beige	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						19.6 Kmpl
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1497 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Petrol	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						587 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						None		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>23.45-39.02 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>
		
	</div>


</div>	

<div class="verticalBorder" id="sepBdr"></div>
		
	
<!--***************************BUY CARS CARDS******************************-->
	

<div class="container" id="mainCompareCardContainer">
	
	<div class="" id="compareCard_1">
		
		<div class="card mb-3">
			<img src="images/Swiper/scorpio.png" class="card-img-top" alt="scorpio-image" >
			<div class="card-body">
			<h5 class="card-title">Mahindra Scorpio</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		
			
			<table width="100%">
			
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance<span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Scorpio	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2015	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Blue	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Black/Blue	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						16.36 Kmpl
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						2179 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Manual	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						460 Litres	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear	</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>12.44-16.31 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>

	</div>

	<div class="" id="compareCard_2">
		
		<div class="card mb-3">
			<img src="images/Swiper/brezza.jpg" class="card-img-top" alt="brezza-image" >
			<div class="card-body">
			<h5 class="card-title">Vitara Brezza</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance<span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Vitara Brezza	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2016	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Blue	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Black	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						24.3 Kmpl	
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1248 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Manual	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						328 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>7.12-10.59 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>

	</div>

	<div class="" id="compareCard_3">
		
		<div class="card mb-3">
			<img src="images/Swiper/innova.png" class="card-img-top" alt="innova-image" >
			<div class="card-body">
			<h5 class="card-title">Toyota Innova</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 45 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Innova Crysta	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2017	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Maroon/White	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Black/Brown	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						13.68 Kmpl	
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						2393 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic/Manual
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						300 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear	</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>13.88-24.67 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fa-2x far fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>

	</div>



	<div class="" id="compareCard_4">
		
		<div class="card mb-3">
			<img src="images/Swiper/xuv300.jpg" class="card-img-top" alt="xuv300-image" >
			<div class="card-body">
				<h5 class="card-title">Mahindra XUV300</h5>
				<p class="card-text"></p>
				<p class="card-text"><small class="text-muted">Last updated 1 Hr ago</small></p>
			</div>
			
			<table width="100%">
				<tbody>
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						XUV300	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2019	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Mettalic Red
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Beige	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						20 Kmpl	
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1497 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic	</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						259 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear	</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>7.94-12.29 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				
				
				</tbody>
				
			</table>
			
		</div>

	</div>

	<div class="" id="compareCard_5">
		
		<div class="card mb-3">
			<img src="images/Swiper/fortuner.jpg" class="card-img-top" alt="fortuner-image" >
			<div class="card-body">
			<h5 class="card-title">Toyota Fortuner</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance<span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Fortuner	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2016	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						White	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Bronze	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						12.9 Kmpl
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						2755 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						296 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear 	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking<span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>28.66-36.88 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>
		
	</div>

	<div class="" id="compareCard_6">
		
		<div class="card mb-3">
			<img src="images/Swiper/city.jpg" class="card-img-top" alt="city-image" >
			<div class="card-body">
			<h5 class="card-title">Honda City</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						City	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2017	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Grey	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Beige	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						17.4 Kmpl
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1497 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Manual	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Petrol	</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						328 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front 	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						None		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>7.34-11.40 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>
		
	</div>

	<div class="" id="compareCard_7">
		
		<div class="card mb-3">
			<img src="images/Swiper/nexon.jpg" class="card-img-top" alt="nexon-image" >
			<div class="card-body">
			<h5 class="card-title">Tata Nexon</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Nexon	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2017	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Blue	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Beige	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						21.5 Kmpl
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1497 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Diesel	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						350 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front 	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>6.99-12.70 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>
		
	</div>

	<div class="" id="compareCard_8">
		
		<div class="card mb-3">
			<img src="images/Swiper/camry.jpg" class="card-img-top" alt="camry-image" >
			<div class="card-body">
			<h5 class="card-title">Toyota Camry</h5>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
			</div>
		
			
			<table width="100%">
				<tbody>
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Emission Norm Compliance <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						BS VI	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Model <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Camry SE	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Year <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						2017	
					</td>
				
				</tr>
				
				<tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Exterior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Black	
					</td>
				
				</tr><tr>	
					
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Interior Color <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Beige	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Mileage <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						19.6 Kmpl
					</td>
				
				</tr>	
				
				
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Engine Displ. <span class="coln">:</span>
					</td>
					
					<td class="col-lg-6 col-xs-6 value-spec">
						1497 cc	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Transmission <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Automatic	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fuel Type <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Petrol	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Boot Space <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						587 Liters	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Power Windows <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Front and Rear	
					</td>
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Airbags <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Driver and Passenger	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						ABS <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Central Locking <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec ">
						Yes	
					</td>
				
				</tr>	
				
				<tr>	
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Fog Lamps <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						None		
					</td>
				
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						Price <span class="coln">:</span>
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="fas fa-rupee-sign"></i>23.45-39.02 Lakh</span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<i class="fab fa-bluetooth-b"></i> Bluetooth
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-check-circle"></i></span>	
					</td>
					
				</tr>
				
				<tr>
				
					<td class="col-lg-6 col-xs-6 label-spec compareCardHeader">
						<span><i class="fa fas fa-ship"></i></span> Cruise Control 
					</td>
				
					<td class="col-lg-6 col-xs-6 value-spec">
						<span><i class="far fa-2x fa-times-circle"></i></span>	
					</td>
					
				</tr>
				
				</tbody>
				
			</table>
			
		</div>
		
	</div>

</div>




<!--************************END OF BUY CARS CARDS**************************-->	
	
	
	
<!--**************END OF BLOCKS*******************-->
	<div>

		<button class="button" style="display:none;" onclick='body.scrollTo({top:0, behavior:"smooth"});' id="goTopBtn">Top<img src="images/arrowmark.png" class="arrowMarkImg inline" style="transform: rotate(270deg); margin-left:15px; padding:2px 2px;"></button>

	</div>	
	
	
		
		
	<script type="text/javascript">
		
		
			document.getElementById("rentalDropdown").onclick = function(){
			
				document.getElementById("rentalDropdownMenu").style.display = "block";
			
			};
			
			document.getElementById("rentalDropdownMenu").onmouseleave = function(){
			
				document.getElementById("rentalDropdownMenu").style.display = "none";
			
			};
			
			document.getElementById("buySellDropdown").onclick = function(){
			
				document.getElementById("buySellDropdownMenu").style.display = "block";
			
			};
			
			document.getElementById("buySellDropdownMenu").onmouseleave = function(){
			
				document.getElementById("buySellDropdownMenu").style.display = "none";
			
			};
			
			
			document.getElementById("body").onscroll = function(){
			
				document.getElementById("goTopBtn").style.display = "block";
				
			};
			
			document.getElementById("carDropdown").onclick = function(){
			
				document.getElementById("carDropdownMenu").style.display = "block";
			
			};
			
			document.getElementById("carDropdownMenu").onmouseleave = function(){
			
				document.getElementById("carDropdownMenu").style.display = "none";
			
			};
		
			document.getElementById("compareCarDropdown").onclick = function(){
			
				document.getElementById("compareCarDropdownMenu").style.display = "block";
			
			};
			
			document.getElementById("compareCarDropdownMenu").onmouseleave = function(){
			
				document.getElementById("compareCarDropdownMenu").style.display = "none";
			
			};
			
			document.getElementById("option_1").onclick = function(){
			
				document.getElementById("card_1").style.display = "block";
				document.getElementById("card_2").style.display = "none";
				document.getElementById("card_3").style.display = "none";
				document.getElementById("card_4").style.display = "none";
				document.getElementById("card_5").style.display = "none";
				document.getElementById("card_6").style.display = "none";
				document.getElementById("card_7").style.display = "none";
				document.getElementById("card_8").style.display = "none";
			
			
			}
			
			document.getElementById("option_2").onclick = function(){
			
				document.getElementById("card_2").style.display = "block";
				document.getElementById("card_1").style.display = "none";
				document.getElementById("card_3").style.display = "none";
				document.getElementById("card_4").style.display = "none";
				document.getElementById("card_5").style.display = "none";
				document.getElementById("card_6").style.display = "none";
				document.getElementById("card_7").style.display = "none";
				document.getElementById("card_8").style.display = "none";
			
			
			}
			
			document.getElementById("option_3").onclick = function(){
			
				document.getElementById("card_3").style.display = "block";
				document.getElementById("card_2").style.display = "none";
				document.getElementById("card_1").style.display = "none";
				document.getElementById("card_4").style.display = "none";
				document.getElementById("card_5").style.display = "none";
				document.getElementById("card_6").style.display = "none";
				document.getElementById("card_7").style.display = "none";
				document.getElementById("card_8").style.display = "none";
			}
			
			document.getElementById("option_4").onclick = function(){
			
				document.getElementById("card_4").style.display = "block";
				document.getElementById("card_2").style.display = "none";
				document.getElementById("card_3").style.display = "none";
				document.getElementById("card_1").style.display = "none";
				document.getElementById("card_5").style.display = "none";
				document.getElementById("card_6").style.display = "none";
				document.getElementById("card_7").style.display = "none";
				document.getElementById("card_8").style.display = "none";
			}
			
			document.getElementById("option_5").onclick = function(){
			
				document.getElementById("card_5").style.display = "block";
				document.getElementById("card_2").style.display = "none";
				document.getElementById("card_3").style.display = "none";
				document.getElementById("card_4").style.display = "none";
				document.getElementById("card_1").style.display = "none";
				document.getElementById("card_6").style.display = "none";
				document.getElementById("card_7").style.display = "none";
				document.getElementById("card_8").style.display = "none";
			
			}
			
			document.getElementById("option_6").onclick = function(){
			
				document.getElementById("card_6").style.display = "block";
				document.getElementById("card_2").style.display = "none";
				document.getElementById("card_3").style.display = "none";
				document.getElementById("card_4").style.display = "none";
				document.getElementById("card_5").style.display = "none";
				document.getElementById("card_1").style.display = "none";
				document.getElementById("card_7").style.display = "none";
				document.getElementById("card_8").style.display = "none";
			
			}
			
			document.getElementById("option_7").onclick = function(){
			
				document.getElementById("card_7").style.display = "block";
				document.getElementById("card_2").style.display = "none";
				document.getElementById("card_3").style.display = "none";
				document.getElementById("card_4").style.display = "none";
				document.getElementById("card_5").style.display = "none";
				document.getElementById("card_6").style.display = "none";
				document.getElementById("card_1").style.display = "none";
				document.getElementById("card_8").style.display = "none";
			
			}
			
			document.getElementById("option_8").onclick = function(){
			
				document.getElementById("card_8").style.display = "block";
				document.getElementById("card_2").style.display = "none";
				document.getElementById("card_3").style.display = "none";
				document.getElementById("card_4").style.display = "none";
				document.getElementById("card_5").style.display = "none";
				document.getElementById("card_6").style.display = "none";
				document.getElementById("card_7").style.display = "none";
				document.getElementById("card_1").style.display = "none";
			
			}
			
			document.getElementById("compareOption_1").onclick = function(){
			
				document.getElementById("compareCard_1").style.display = "block";
				document.getElementById("compareCard_2").style.display = "none";
				document.getElementById("compareCard_3").style.display = "none";
				document.getElementById("compareCard_4").style.display = "none";
				document.getElementById("compareCard_5").style.display = "none";
				document.getElementById("compareCard_6").style.display = "none";
				document.getElementById("compareCard_7").style.display = "none";
				document.getElementById("compareCard_8").style.display = "none";
			
			
			}
			
			document.getElementById("compareOption_2").onclick = function(){
			
				document.getElementById("compareCard_2").style.display = "block";
				document.getElementById("compareCard_1").style.display = "none";
				document.getElementById("compareCard_3").style.display = "none";
				document.getElementById("compareCard_4").style.display = "none";
				document.getElementById("compareCard_5").style.display = "none";
				document.getElementById("compareCard_6").style.display = "none";
				document.getElementById("compareCard_7").style.display = "none";
				document.getElementById("compareCard_8").style.display = "none";
			
			
			}
			
			document.getElementById("compareOption_3").onclick = function(){
			
				document.getElementById("compareCard_3").style.display = "block";
				document.getElementById("compareCard_2").style.display = "none";
				document.getElementById("compareCard_1").style.display = "none";
				document.getElementById("compareCard_4").style.display = "none";
				document.getElementById("compareCard_5").style.display = "none";
				document.getElementById("compareCard_6").style.display = "none";
				document.getElementById("compareCard_7").style.display = "none";
				document.getElementById("compareCard_8").style.display = "none";
			
			
			}
			
			document.getElementById("compareOption_4").onclick = function(){
			
				document.getElementById("compareCard_4").style.display = "block";
				document.getElementById("compareCard_2").style.display = "none";
				document.getElementById("compareCard_3").style.display = "none";
				document.getElementById("compareCard_1").style.display = "none";
				document.getElementById("compareCard_5").style.display = "none";
				document.getElementById("compareCard_6").style.display = "none";
				document.getElementById("compareCard_7").style.display = "none";
				document.getElementById("compareCard_8").style.display = "none";
			
			
			}
			
			document.getElementById("compareOption_5").onclick = function(){
			
				document.getElementById("compareCard_5").style.display = "block";
				document.getElementById("compareCard_2").style.display = "none";
				document.getElementById("compareCard_3").style.display = "none";
				document.getElementById("compareCard_4").style.display = "none";
				document.getElementById("compareCard_1").style.display = "none";
				document.getElementById("compareCard_6").style.display = "none";
				document.getElementById("compareCard_7").style.display = "none";
				document.getElementById("compareCard_8").style.display = "none";
			
			
			}
			
			document.getElementById("compareOption_6").onclick = function(){
			
				document.getElementById("compareCard_6").style.display = "block";
				document.getElementById("compareCard_2").style.display = "none";
				document.getElementById("compareCard_3").style.display = "none";
				document.getElementById("compareCard_4").style.display = "none";
				document.getElementById("compareCard_5").style.display = "none";
				document.getElementById("compareCard_1").style.display = "none";
				document.getElementById("compareCard_7").style.display = "none";
				document.getElementById("compareCard_8").style.display = "none";
			
			
			}
			
			document.getElementById("compareOption_7").onclick = function(){
			
				document.getElementById("compareCard_7").style.display = "block";
				document.getElementById("compareCard_2").style.display = "none";
				document.getElementById("compareCard_3").style.display = "none";
				document.getElementById("compareCard_4").style.display = "none";
				document.getElementById("compareCard_5").style.display = "none";
				document.getElementById("compareCard_6").style.display = "none";
				document.getElementById("compareCard_1").style.display = "none";
				document.getElementById("compareCard_8").style.display = "none";
			
			
			}
			
			document.getElementById("compareOption_8").onclick = function(){
			
				document.getElementById("compareCard_8").style.display = "block";
				document.getElementById("compareCard_2").style.display = "none";
				document.getElementById("compareCard_3").style.display = "none";
				document.getElementById("compareCard_4").style.display = "none";
				document.getElementById("compareCard_5").style.display = "none";
				document.getElementById("compareCard_6").style.display = "none";
				document.getElementById("compareCard_7").style.display = "none";
				document.getElementById("compareCard_1").style.display = "none";
			
			
			};
			
			
		
		
		
		</script>
	
		
	
	</body>
	
	<footer class="panel-footer">
		
			<div class="container-fluid">
				
				<div class="row">
					
					
					
					<div id="address" class="col-md-4">
					
						
						
						<hr class="d-md-none">
					
					</div>
					
					<div id="hours" class="col-md-4">
						
						<span></span><br>
						
						<hr class="d-md-none">
					
					</div>
					
				</div>
				
					
				
				<div class="footer-copyright text-center ">&copy; Copyright XtrmAuto 2020
				<span class="inline sclMedia"><a href="https://www.instagram.com"><img id="instaIcon" class="inline" src="images/Footer/InstagramIcon.png"></a></span>
				<span class="inline sclMedia"><a href="https://www.twitter.com"><img id="twitterIcon" class="inline" src="images/Footer/TwitterIcon.png"></a></span>	
				<span class="inline sclMedia"><a href="https://www.facebook.com"><img id="facebookIcon" class="inline" src="images/Footer/Facebook.png"></a></span>
					
				
				</div>
			
			</div>

		</footer>

</html>



