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
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Buy Cars</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
		
		<link href="css/navBar.css" rel="stylesheet">
		<link href="css/buycars_page.css" rel="stylesheet">
		
		
		<style>
			
			#search{
	border-radius:30px;
	padding:12px 50px 12px 15px; 
	border:0px solid black; 
	margin-bottom:30px; 
	position:relative;
	left:18px; 
	width:470px;
	font-size:20px !important;
}

body {
	font-family:'Oxygen', sans-serif;
	repeat:no-repeat;
	background-color:lightgrey;	
	font-size:17px;
	background-image:url("../images/CarComparison/1.jpg");
}
			
		</style>
		
		
		<script src="https://kit.fontawesome.com/a003c65f08.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	

	</head>
	
	<body id="body" >
		
		<!--*********NAVBAR**********-->
		<nav class="navbar navbar-toggleable-md navbar-expand-sm fixed-top" id="navBar" >
  
  			<a id="logoLink" class="form-inline" href="index.html" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
				<ul class="navbar-nav form-inline" id="navbar-container">

    				<li class="nav-item dropdown" >
						
						<a class="nav-link dropdown-toggle navBarLink borderHover" id="rentalDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
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

        				<a class="nav-link navBarLink borderHover" href="buycars_page.php">

          					Used Cars       				</a>

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
		
		
		
		
	<!--***********NAVBAR ENDS***********-->
	

	<!--*******MAIN CONTENT*******-->
	<div id="main-content" class="container.fluid">
		<div>
			<h1>Used Cars For Sale</h1>
			<label for="search"></label>
			<input type="text" id="search" onkeyup="myFunction()" placeholder="Search for a Model/Make/Year"><i id="searchIcon" class="fas fa-search"></i> 	
		</div>		
	<br>
		<div class="card-columns">

			<!---------SWIFT DZIRE------------>
  		
			<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/kia_seltos.jpeg" alt="Kia_Seltos">
    			<div class="card-img-overlay" >
						<span class="fa-stack fa-lg" >
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
						</span>
					<button class="button cardButton" onclick="location.href='Seltos.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target"><input type="hidden" name="manfct">Kia</h4>
      				<h6 class="card-title"><input type="hidden" name="car">Seltos<span class="badge badge-secondary" ><input type="hidden" name="year">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold" ><input type="hidden" name="price">??? 10,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
					
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>92,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Gray Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
    				</div>
    			</div>
  			</div>
		</form>
			
  			<!------------------------------->
  			<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/toyota_fortuner.jpeg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Fortuner.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Toyota</h4>
      				<h6 class="card-title">Fortuner<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 32,50,000</h3>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>5,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Richmond Circle, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Black Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
    				</div>
    			</div>
  			</div>
  			
  			<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/hyundai_creta.jpeg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Creta.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Hyundai</h4>
      				<h6 class="card-title">Creta<span class="badge badge-secondary">2018</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 8,00,000</h3>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>102,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Indiranagar, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>White Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  		
  			<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/benz_eclass.jpeg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Eclass.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Mercedes Benz</h4>
      				<h6 class="card-title">E Class<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 63,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>90,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Jayanagar, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Silver Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  
  			<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/nissan_sunny.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Sunny.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Nissan</h4>
      				<h6 class="card-title">Sunny<span class="badge badge-secondary">2015</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 4,00,000</h3>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>300,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Ernakulam City, Kerala</span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Brown Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
					</div>
    			</div>
  			</div>
  
  			<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/skoda_rapid.jpeg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Rapid.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Skoda</h4>
      				<h6 class="card-title">Rapid<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 11,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>87,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Blue Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/audi_a4.jpeg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='A4.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Audi</h4>
      				<h6 class="card-title">A4<span class="badge badge-secondary">2017</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 36,00,000</h3>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>100,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Mallapurram, Kerala </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Silver Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/Chevy_Silverado.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Silverado.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Chevrolet</h4>
      				<h6 class="card-title">Silverado<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 1,50,00,000</h3>
      					
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>87,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span></span>Bandra, Mumbai</div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Black Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/Ford_F150.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='F150.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Ford</h4>
      				<h6 class="card-title">F-150 Raptor<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 1,70,00,000</h3>
      					<span class="flex-fill text-center discount">Discount Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>300,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Blue Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/MINI_Cooper.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Cooper.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Mini</h4>
      				<h6 class="card-title">Cooper<span class="badge badge-secondary">2018</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 35,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>87,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>White Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/VW_Polo.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Polo.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Volkswagen</h4>
      				<h6 class="card-title">Polo<span class="badge badge-secondary">2016</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 19,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>120,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Whitefield, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Red Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/RangeRover_Vogue.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Vogue.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Range Rover</h4>
      				<h6 class="card-title">Vogue<span class="badge badge-secondary">2018</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 1,00,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>500,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Basavanagudi, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Grey Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Diesel</span></div>
						
    				</div>
    			</div>
  			</div>	
  			    <div class="card bg-light " >
    		  	<img class="card-img-top" src="images/buycars-page/brezza.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='vitaraBrezza.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Maruti Suzuki</h4>
      				<h6 class="card-title">Brezza<span class="badge badge-secondary">2018</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 10,00,000</h3>
      					
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>94,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>JP Nagar, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Orange Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Diesel</span></div>
						
    				</div>
    			</div>
  			</div>
  			    <div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/VW_Beetle.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Beetle.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Volkswagen</h4>
      				<h6 class="card-title">Beetle<span class="badge badge-secondary">2015</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 25,00,000</h3>
      					
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>900,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Koothatukullam, Kerala</span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Yellow Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 3 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  			    <div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/toyota_lc200.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Landcruiser.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Toyota</h4>
      				<h6 class="card-title">Land Cruiser<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 1,50,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>60,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Kochi, Kerala</span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>White Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  			    <div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/compass.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Compass.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Jeep</h4>
      				<h6 class="card-title">Compass<span class="badge badge-secondary">2018</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 14,00,000</h3>
      					
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>134,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Red Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/ford_bronco.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Bronco.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Ford</h4>
      				<h6 class="card-title">Bronco<span class="badge badge-secondary">2020</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 1,50,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>20,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Indiranagar, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Yellow Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/bmw_3.jpeg" alt="BMW_M3">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='3Series.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">BMW</h4>
      				<h6 class="card-title">3 Series<span class="badge badge-secondary">2010</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 8,00,000</h3>
      					
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>960,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Koramangala, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Orange Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  			    <div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/HEXA.jfif" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Hexa.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Tata</h4>
      				<h6 class="card-title">Hexa<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 9,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>124,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Blue Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Diesel</span></div>
						
    				</div>
    			</div>
  			</div>
  			    <div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/honda_civic.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Civic.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Honda</h4>
      				<h6 class="card-title">Civic<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 25,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>87,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Red Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
  			</div>
  			    <div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/mark2.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Ambassador.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Hindustan Motors</h4>
      				<h6 class="card-title">Ambassador Mark 2<span class="badge badge-secondary">1969</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 40,000</h3>
      					
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>400,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Willington Island, Kerala </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Black Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 4 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Diesel</span></div>
						
    				</div>
    			</div>
  			</div>
				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/ms800.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Maruti_800.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Maruti Suzuki</h4>
      				<h6 class="card-title">800<span class="badge badge-secondary">1983</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 50,000</h3>
      					
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>300,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>White Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 3 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Diesel</span></div>
						
    				</div>
    			</div>
			</div>
				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/ford_ecosport.jpeg" alt="ecosport">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Ecosport.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Ford</h4>
      				<h6 class="card-title">Ecosport<span class="badge badge-secondary">2018</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 12,00,000</h3>
      					
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>450,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Thani, Mumbai </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Red Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
			</div>		
				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/tata_harrier.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Harrier.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Tata</h4>
      				<h6 class="card-title">Harrier<span class="badge badge-secondary">2018</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 10,00,000</h3>
      				
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>100,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Basavanagudi, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Orange Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Diesel</span></div>
						
    				</div>
    			</div>
			</div>		
				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/thar.jpeg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Thar.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Mahindra</h4>
      				<h6 class="card-title">Thar<span class="badge badge-secondary">2020</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 15,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>87,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Grey Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
			</div>		
				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/toyota_innova.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Innova.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Toyota</h4>
      				<h6 class="card-title">Innova<span class="badge badge-secondary">2018</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 18,00,000</h3>
      					
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>87,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>White Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
			</div>		
				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/verna.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Verna.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Hyundai</h4>
      				<h6 class="card-title">Verna<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 13,50,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>92,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Black Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Diesel</span></div>
						
    				</div>
    			</div>
			</div>		
				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/XUV500.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='XUV500.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Mahindra</h4>
      				<h6 class="card-title">XUV 500<span class="badge badge-secondary">2019</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 15,00,000</h3>
      					<span class="flex-fill text-center discount">Offers Available</span>
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>87,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>HSR Layout, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Grey Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 1 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Diesel</span></div>
						
    				</div>
    			</div>
			</div>		
				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/toyota_supra.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg" >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Supra.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Toyota</h4>
      				<h6 class="card-title">Supra MK4<span class="badge badge-secondary">2002</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 30,00,000</h3>
      				
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>700,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Banashankari Stage 3, Bengaluru </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Midnight Purple Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Petrol</span></div>
						
    				</div>
    			</div>
			</div>		
				<div class="card bg-light " >
    			<img class="card-img-top" src="images/buycars-page/duster.jpg" alt="Suzuki-Swift-Dzire_Front">
    			<div class="card-img-overlay">
    				<span class="fa-stack fa-lg " >
  						<i class="fas fa-circle fa-stack-2x"></i>
  						<i class="fas fa-heart fa-stack-1x" data-toggle="tooltip" data-placement="top" title="Add To Favourites" onclick="style.color='#CB3D3D'"></i>
					</span>
					<button class="button cardButton" onclick="location.href='Duster.php'" type="submit">Contact Dealer</button>
    			</div>
    			<div class="card-body">
      				<h4 class="card-title target">Renault</h4>
      				<h6 class="card-title">Duster<span class="badge badge-secondary">2015</span></h6>
      				<div class="d-flex justify-content-between">	
      					<h3 class="flex-fill border-right bold">??? 8,00,000</h3>
      				
      				</div>
      				<hr>	
    				<div class="card-text">
    					<div><i class="fas fa-tachometer-alt fa-fw"></i><span>393,000 km</span></div>
						<div><i class="fas fa-map-marker-alt fa-fw"></i><span>Kochi, Kerala </span></div>
						<div><i class="fas fa-fill-drip fa-fw"></i><span>Brown Exterior</span></div>
						<div><i class="fas fa-car-crash fa-fw"></i><span>No Accidents, 2 Owner</span></div>
						<div><i class="fas fa-gas-pump fa-fw"></i><span>Diesel</span></div>
						
    				</div>
    			</div>
			</div>
		</div>

	</div>


		<!-------------- MODAL ----------->
  		<div class="modal fade myModal" id="likeModal">
    		<div class="modal-dialog modal-dialog-centered">
      			<div class="modal-content">
      
        			<!-- Modal Header -->
        			<div class="modal-header">
         				<h3 class="modal-title">sign in to xtrm</h3>
          				<button type="button" class="close" data-dismiss="modal" id="modalCloseBtn" >&times;</button>
        			</div>
        			<!-- Modal body -->
        			<div class="modal-body text-center">Sign up to view your favorite cars across devices and get price drop alerts
        				<div><a href="CreateAccountPage.php" role="button" class="btn btn-outline-dark">Sign Up</a></div>
          				<div id="login"><a href="SignInPage.php">Already have an Account? Login</a></div>
        			</div>
        			
      			</div>
    		</div>
  		</div>
		
	<div class="container buyCarContainer" id="buyCarContainer" >
	
		<p>Sign in to Buy</p>
		<button class="button" type="button" id="buyCarBtn">Sign in</button>
		
	</div>
	
        
      </div>
    </div>
  </div>
	
	
	<footer class="panel-footer" style="margin-bottom:0px !important;">
	<footer class="panel-footer" style="margin-bottom:0px !important;">
		
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
	
		<button class="button" style="display:none;" onclick='body.scrollTo({top:0, behavior:"smooth"});' id="goTopBtn">Top<img src="images/arrowmark.png" class="arrowMarkImg inline" style="transform: rotate(270deg); margin-left:15px; padding:2px 2px;"></button>

	
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
		function myFunction() {
		  var input = document.getElementById("search");
		  var filter = input.value.toLowerCase();
		  var nodes = document.getElementsByClassName('card');

		  for (i = 0; i < nodes.length; i++) {
			if (nodes[i].innerText.toLowerCase().includes(filter)) {
			  nodes[i].style.display = "inline-block";
			} else {
			  nodes[i].style.display = "none";
			}
		}	
	}
	
	
	
	
	
		
	</script>
	
	</body>

</html>
