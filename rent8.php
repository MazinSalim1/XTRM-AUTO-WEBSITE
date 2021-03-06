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
<html lang="en-US">

	<head>
	
		<meta http-equiv="content-type" charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Toyota Camry SE 2018</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="css/rent.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="imagerotator/html/css/basic.css"/>
	
		
		<link href="css/navBar.css" rel="stylesheet">
		
		
	
		<script src="js/buycars_page.js"></script>
		<script src="https://kit.fontawesome.com/a003c65f08.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	

  		<script type="text/javascript" src="imagerotator/html/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="imagerotator/html/js/imagerotator.js"></script>


	</head>
	
	<body id="body" >
		
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
		
		
	<!--***************NAVBAR ENDS*********************-->

	<!-----------------MAIN CONTENT--------------------->
	<div class="container.fluid">
		<div class="row">
			<div class="col-sm-9">	
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
  					<!-- Indicators -->
  					<ul class="carousel-indicators">
    					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    					<li data-target="#myCarousel" data-slide-to="1"></li>
  					</ul>
  
  					<!-- The slideshow -->
  					<div class="carousel-inner">
    					<div class="carousel-item active">
      						<iframe width="100%" height="100%" src="https://360.hum3d.com/view/213206/" frameborder="0"></iframe>
    					</div>
    					<div class="carousel-item">
      						<img src="images/rent8/int.jpg" alt="Interior" width="100%" height="100%">
    					</div>
  					</div>
  
  					<!-- Left and right controls -->
  					<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    					<span class="carousel-control-prev-icon"></span>
  					</a>
  				   	<a class="carousel-control-next" href="#myCarousel" data-slide="next">
    					<span class="carousel-control-next-icon"></span>
  					</a>
				</div>
			</div>	

			<div class="col-sm-3">
				<!-- Nav tabs -->
  				<ul id="tbs" class="nav nav-tabs nav-justified">
    				<li class="nav-item p-0">
      					<a class="nav-link navlink1 active" data-toggle="tab" href="#keyfeatures">Key Features</a>
    				</li>
    				<li id="rentnow" class="nav-item p-0 ">
      					<a class="nav-link navlink1" data-toggle="tab" href="#rent">Rent</a>
    				</li>
  				</ul>

  				<!-- Tab panes -->
  				<div class="tab-content">
    				<div id="keyfeatures" class="tab-pane active">
    					<table class="table">
    						<tbody>
      							<tr>
        							<td>ARAI Mileage</td>
        							<td class="text-right">19.16 Kmpl</td>
     						 	</tr>
     						 	<tr>
        							<td>Engine Displacement</td>
        							<td class="text-right">2487cc</td>
     						 	</tr>
     						 	<tr>
        							<td>Max Power</td>
        							<td class="text-right">214.5bhp@5700rpm</td>
     						 	</tr>

     						 	<tr>
        							<td>Transmission Type</td>
       								<td class="text-right">Manual</td>
     						 	</tr>
      							<tr>
        							<td>Fuel Type</td>
        							<td class="text-right">Petrol</td>
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
        							<td class="text-right">9</td>
      							</tr>
      							<tr>
        							<td>Bluetooth</td>
        							<td class="text-right">&#10003;</td>
      							</tr>
      							<tr>
        							<td>AUX</td>
        							<td class="text-right">&#10003;</td>
      							</tr>
   							</tbody>
  						</table>
    				</div>
    				<div id="rent" class="tab-pane fade">
    					<h5 >Select Colour</h5>
      					<ul id="colors" class="nav nav-tabs">
    						<li class="nav-item p-0 active"><a class="nav-link navlink2" data-toggle="tab" href="#white"><img src="images/rent8/white.png" alt="PlatinumWhitePearl"></a></li>
    						<li class="nav-item p-0"><a class="nav-link navlink2" data-toggle="tab" href="#brown"><img src="images/rent8/bronze.png" alt="PhantomBrown"></a></li>
    						<li class="nav-item p-0"><a class="nav-link navlink2" data-toggle="tab" href="#black"><img src="images/rent8/black.png" alt="BurningBlack"></a></li>
    						<li class="nav-item p-0"><a class="nav-link navlink2" data-toggle="tab" href="#silver"><img src="images/rent8/silver.png" alt="SilverMetallic"></a></li>
    						<li class="nav-item p-0"><a class="nav-link navlink2" data-toggle="tab" href="#red"><img src="images/rent8/red.png" alt="RedMicaMetallic"></a></li>
  						</ul>

  						<div class="tab-content colors_spacing">
    						<div id="white" class="tab-pane fade in active">Platinum White Pearl</div>
    						<div id="brown" class="tab-pane fade">Phantom Brown</div>
    						<div id="black" class="tab-pane fade">Burning Black</div>
    						<div id="silver" class="tab-pane fade">Silver Metallic</div>
  							<div id="red" class="tab-pane fade">Red Mica Metallic</div>
						</div>

						<hr>
					
						 <form action="/action_page.php">
    		
      						<div>
  								<label for="fromtime">When do you need the Car?</label>
  								<input type="datetime-local" class="form-control" id="fromtime" placeholder="When do you need a car?" name="fromtime">
        						
      						</div>
      						<div>
        						<label for="totime">Till when do you need it?</label>
        						<input type="datetime-local" class="form-control" id="totime" placeholder="Till when do you need it?" name="totime">
        					</div>	
   							<div class="input-group">
  								<input type="text" class="form-control location" aria-label="Text input with dropdown button" placeholder="Enter location for Car Delivery">
  								<div class="input-group-append">
    								<button id="map-icon" class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-map-marker-alt"></i></button>
	    							<div class="dropdown-menu location">
    	 	 							<a id="location" class="dropdown-item" href="#"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248831.7767896143!2d77.50033484354744!3d12.972074638522143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka%2C%20India!5e0!3m2!1sen!2sqa!4v1606379829551!5m2!1sen!2sqa" width="200" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></a>
    								</div>
  								</div>
  							</div>	
  						</form>

              <h5>Additional Services</h5>
              <div class="add-serv">
              
              <div class="pl-2 pr-2 d-flex justify-content-between">
                  <div class="">Childseater</div>
                  <div>-???1499</div>
              </div>
              <div class="mb-4 pl-2 pr-2 d-flex justify-content-between">
                  <div class="">Driver</div>
                  <div>-???2099<span>/day</span></div>
              </div>
            </div>

            <a class="custombtn" href='https://www.indiarentacar.com/car-rental-delhi/toyota-camry/' target="_blank" rel="noopener noreferrer" style="padding-left: 120px; padding-right: 130px;">Contact Now</a>




  					</div>
				</div>

			</div>	
		</div>
	</div>
<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
          <img src="images/money-icon.png" width="200px">
          <br>Sign in to continue to payment<br>
          <a href="SignInPage.php"><button type="button" class="btn" >Sign In</button></a>
        </div>
        
        
      </div>
    </div>
  </div>
			
	</body>
	
	<footer class="panel-footer d-flex text-white justify-content-between">
		<a href="rent7.php" role="button" class="btn btn-primary bold">TATA Nexon 2017</a>
    <div class="text-center" id="carmodel">Toyota Camry<br><span>SE 2018<span></div>
	 <div id="rentprice" style="font-size: 1.7em; padding-top: 4px; ">???36,699<span id="xsmall">/month</span></div>
		<a href="CarComparisonPage.php" role="button" class="links"> Compare With <br>Other Models</a>	
	
		<a href="rent1.php" role="button" class="btn btn-primary bold">Mahindra Scorpio 2015 S10</a>



	</footer>
	
	<script type="text/javascript">
		
		
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
		</script>
	

</html>