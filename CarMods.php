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
		<title>Car Tuning & Modifications</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/navBar.css" rel="stylesheet">
		<link rel="stylesheet" href="css/CarMods.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
		
		<script src="https://kit.fontawesome.com/a003c65f08.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	

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
      
	  					<a href="#" class="nav-link navBarLink borderHover">Car Tuning & Mods</a>
						
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
<!-----------------MAIN CONTENT--------------------->
      <div id="jumbotron1" class="container-fluid">
       
        <div class="jumbotron"><h1 class="xtrm-logo"></h1><h2 class="heading1"><span style="font-size: 160px;">C</span>ar tuning &</h2><h2 class="heading2"><span style="font-size: 160px;">M</span>odifications</h2></div>
       
        <div class="container container1">
              <ul class="nav nav-tabs card-columns" role="tablist"> 
                <li  onclick="myFunction1()" class="card nav-item p-0 active"><a class="nav-link nav-link2" data-toggle="tab"  role="tab" href="#a"><img src="images/mods/engine.png" width="240px" height="220px"><span class="sub-headings">engine</span></a></li>
                <li  onclick="myFunction2()" class="card nav-item p-0"><a class="nav-link nav-link2" data-toggle="tab"  role="tab" href="#b"><img src="images/mods/brakes.png" width="240px" height="220px"><span class="sub-headings">brakes</span></a></li>
                <li  onclick="myFunction3()" class="card nav-item p-0"><a class="nav-link nav-link2" data-toggle="tab"  role="tab" href="#c"><img src="images/mods/suspension.png" width="240px" height="220px"><span class="sub-headings" style="font-size: 2em; bottom: 9px;">suspension</span></a></li>
                <li  onclick="myFunction4()" class="card nav-item p-0"><a class="nav-link nav-link2" data-toggle="tab" role="tab"  href="#d"><img src="images/mods/exhaust.png" width="240px" height="220px"><span class="sub-headings">exhaust</span></a></li>
                <li  onclick="myFunction5()" class="card nav-item p-0"><a class="nav-link nav-link2" data-toggle="tab"  role="tab" href="#e"><img src="images/mods/cooling.png" width="240px" height="220px"><span class="sub-headings">cooling</span></a></li>
                <li  onclick="myFunction6()" class="card nav-item p-0"><a class="nav-link nav-link2" data-toggle="tab" role="tab"  href="#f"><img src="images/mods/interior.png" width="240px" height="220px"><span class="sub-headings">interior</span></a></li>
                <li  onclick="myFunction7()" class="card nav-item p-0"><a class="nav-link nav-link2" data-toggle="tab" role="tab"  href="#g"><img src="images/mods/exterior.png" width="240px" height="220px"><span class="sub-headings" style="font-size: 2.3em; bottom: 4px;">exterior</span></a></li>
                <li  onclick="myFunction8()" class="card nav-item p-0"><a class="nav-link nav-link2" data-toggle="tab" role="tab"  href="#h"><img src="images/mods/charger.png" width="240px" height="220px" ><span class="sub-headings"  style="font-size: 1.7em; line-height: 30px; bottom: 8px;">super/turbo<br>charger</span></a></li>
              </ul>
               
              <div class="container-fluid container2 tab-content">
               <!------------ENGINE----------------> 
                <div id="a" class="tab-pane fade in active">
                 
                  <div id="engine" class="carousel slide" data-ride="carousel"  data-interval="30000">
                      <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                          <img src="images/mods/engine1.png" alt="Spark Plugs">
                          <h2>Spark<br>Plugs</h2>
                          <div class="carousel-text">
                            <h3>NGK 6619 Iridium IX Spark Plug</h3>
                            <div>Enjoy better fuel economy, smoother acceleration and quicker starts!<br>Designed for both high and low compression engines</div>
                            <div class="shop"><span>Mod Available At</span><br>H K G N Modification Works</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8213962915997!2d77.58516321479232!3d12.9191980908903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae150afbe144e9%3A0xa39003a4c139b127!2sH%20k%20g%20n%20modification%20works!5e0!3m2!1sen!2sqa!4v1608407862929!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//H+k+g+n+modification+works,+7th+main+,M+T+B+Area,jayanagar+5th+block,+Bengaluru,+Karnataka+560041,+India/@12.9191981,77.5851632,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3bae150afbe144e9:0xa39003a4c139b127!2m2!1d77.5873519!2d12.9191981" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/engine2.png" alt="Cold Air Intake">
                          <h2>Cold Air<br>intake</h2>
                          <div class="carousel-text">
                            <h3>airraid mxp series/aem brute force</h3>
                            <div>Dyno tested and Designed to offer maximum horsepower, torque and throttle WITHOUT requiring a tune or recalibration of the factory computer!</div>
                            <div class="shop"><span>Mod Available At</span><br>Auto-Matrix</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.090691684872!2d77.63989461482194!3d12.966048290859494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae141cd2c165eb%3A0xef23747176028a83!2sAuto-Matrix!5e0!3m2!1sen!2sqa!4v1608446515036!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.co.in/maps/dir//Auto-Matrix,+No:+11,+%22Prakash+Plaza%22+,+100+Ft+Road,+16th+Main+Rd,+HAL+2nd+Stage,+Indiranagar,+Bengaluru,+Karnataka+560008,+India/@12.9660517,77.6398946,17z/data=!4m16!1m6!3m5!1s0x3bae141cd2c165eb:0xef23747176028a83!2sAuto-Matrix!8m2!3d12.9660483!4d77.6420833!4m8!1m0!1m5!1m1!1s0x3bae141cd2c165eb:0xef23747176028a83!2m2!1d77.6420833!2d12.9660483!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                      </div>
  
                    <a class="carousel-control-prev" href="#engine" data-slide="prev">
                      <span><i class="far fa-arrow-alt-circle-left"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#engine" data-slide="next">
                      <span><i class="far fa-arrow-alt-circle-right"></i></span>
                    </a>
                  </div>
                </div>
                <!------------BRAKES----------------> 
                <div id="b" class="tab-pane fade">
                    
                    <div id="brakes" class="carousel slide" data-ride="carousel"  data-interval="30000">
                      <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                          <img src="images/mods/brake1.png" alt="Brake Pad">
                          <h2>Brake<br>Pad</h2>
                          <div class="carousel-text">
                            <h3>Akebono ProACT Ceramic Brake Pad</h3>
                            <div>High-Friction compound delivers dramatic/repeatable performance!<br>Rubberized mechanically-fixed anti-noise shims virtually eliminate noise</div>
                            <div class="shop"><span>Mod Available At</span><br>Global Cars</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.0932542531336!2d77.67495601744385!3d12.837250200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6d6a60d76331%3A0x383614d90d18e1d0!2sGlobal%20Cars%20-%20Multi%20brand%20car%20service%20center%20%2Cdenting%20and%20painting%2C%20mechanic%20services%2C%20restoration%20and%20modification%20of%20cars%2C!5e0!3m2!1sen!2sqa!4v1608451008717!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Global+Cars+-+Multi+brand+car+service+center+,denting+and+painting,+mechanic+services,+restoration+and+modification+of+cars,,+Plot+no+10,veerasandra,+industrial+area,+Hosur+Rd,+Electronic+City+Phase+II,+Electronic+City,+Bengaluru,+Karnataka+560100,+India/@12.8372502,77.674956,17z/data=!4m16!1m6!3m5!1s0x3bae6d6a60d76331:0x383614d90d18e1d0!2sGlobal+Cars+-+Multi+brand+car+service+center+,denting+and+painting,+mechanic+services,+restoration+and+modification+of+cars,!8m2!3d12.8372502!4d77.6771447!4m8!1m0!1m5!1m1!1s0x3bae6d6a60d76331:0x383614d90d18e1d0!2m2!1d77.6771447!2d12.8372502!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/brake2.png" alt="Brake Rotors">
                          <h2>Brake<br>Rotors</h2>
                          <div class="carousel-text">
                            <h3>AC Delco Professional Brake Rotors</h3>
                            <div>Designed to allow increased thermal mass which lessens brake fade regardless of the activity!</div>
                            <div class="shop"><span>Mod Available At</span><br>Favara Car World</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9587.906708017355!2d77.71707778863039!3d12.953844530575239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1215e64b3af1%3A0x6629038bc0174254!2sFavara%20Car%20World!5e0!3m2!1sen!2sqa!4v1608452029880!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Favara+Car+World,+175%2FA-49,+Varthur+Main+Road,+R+G+Halli,+Thubranhalli+,Bangalore,+Bengaluru,+Karnataka+560066,+India/@12.9538445,77.7170778,15.7z/data=!4m16!1m6!3m5!1s0x3bae1215e64b3af1:0x6629038bc0174254!2sFavara+Car+World!8m2!3d12.9556166!4d77.7184!4m8!1m0!1m5!1m1!1s0x3bae1215e64b3af1:0x6629038bc0174254!2m2!1d77.7184!2d12.9556166!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/brake3.png" alt="Brake Fluid">
                          <h2>Brake<br>Fluid</h2>
                          <div class="carousel-text">
                            <h3>Bosch ESI6-32N Brake Fluid</h3>
                            <div>Works easily on disc brakes, drum brakes, and ABS brakes!</div>
                            <div class="shop"><span>Mod Available At</span><br>SR MODS</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.043430383224!2d77.52850401479289!3d12.969072790857487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3daae8cd8857%3A0x199b39d3c369dff1!2sSR%20MODS!5e0!3m2!1sen!2sqa!4v1608452695927!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//SR+MODS,+%2318%2F9-1,+Vinayaka+Layout,+Marenahalli,+Vijayanagar,+Bengaluru,+Karnataka+560040,+India/@12.9690728,77.5295984,18z/data=!4m16!1m6!3m5!1s0x3bae3daae8cd8857:0x199b39d3c369dff1!2sSR+MODS!8m2!3d12.9690728!4d77.5306927!4m8!1m0!1m5!1m1!1s0x3bae3daae8cd8857:0x199b39d3c369dff1!2m2!1d77.5306927!2d12.9690728!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                      </div>
  
                    <a class="carousel-control-prev" href="#brakes" data-slide="prev">
                      <span><i class="far fa-arrow-alt-circle-left"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#brakes" data-slide="next">
                      <span><i class="far fa-arrow-alt-circle-right"></i></span>
                    </a>
                  </div>
                </div>

                <!------------SUSPENSION----------------> 
                <div id="c" class="tab-pane fade">
                  
                  <div id="suspension" class="carousel slide" data-ride="carousel"  data-interval="30000">
                      <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                          <img src="images/mods/suspension1.png" alt="Coil Overs">
                          <h2>Coil<br>overs</h2>
                          <div class="carousel-text">
                            <h3>Fortune Auto 500 Series CoilOvers</h3>
                            <div>Preserve and improve your factory ride quality, and also dramatically improve handling!</div>
                            <div class="shop"><span>Mod Available At</span><br>JR Car Accessories</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22803.800779064444!2d77.58298044012838!3d12.956160342960828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15db7b1dbd07%3A0x2a4e152ed3519f7b!2sJR%20Car%20Accessories!5e0!3m2!1sen!2sqa!4v1608456463605!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//JR+Car+Accessories,+%23+10%2F1,+Ground+Floor,+8th+Cross,+Sudhama+Nagar,+Bengaluru,+Karnataka+560027,+India/@12.9561603,77.5829804,14.45z/data=!4m16!1m6!3m5!1s0x3bae15db7b1dbd07:0x2a4e152ed3519f7b!2sJR+Car+Accessories!8m2!3d12.956982!4d77.591025!4m8!1m0!1m5!1m1!1s0x3bae15db7b1dbd07:0x2a4e152ed3519f7b!2m2!1d77.591025!2d12.956982!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/suspension2.png" alt="Air Spring">
                          <h2>Air<br>Spring</h2>
                          <div class="carousel-text">
                            <h3>Airlift Air Springs</h3>
                            <div>Prevents bouncing or sagging of the wheels and enables immediate tuning and the ability to adapt to adverse ride conditions!</div>
                            <div class="shop"><span>Mod Available At</span><br>Malnad Auto Treat</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23646.547318942845!2d77.6353079160774!3d12.909135088471531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae149ac18bedf9%3A0x713ee1c47e32476c!2sMalnad%20Auto%20Treat!5e0!3m2!1sen!2sqa!4v1608456593485!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Malnad+Auto+Treat,+17%2FN,+18th+Cross+Rd,+Sector+3,+HSR+Layout,+Bengaluru,+Karnataka+560102,+India/@12.9091351,77.6353079,14.4z/data=!4m16!1m6!3m5!1s0x3bae149ac18bedf9:0x713ee1c47e32476c!2sMalnad+Auto+Treat!8m2!3d12.9117521!4d77.6439281!4m8!1m0!1m5!1m1!1s0x3bae149ac18bedf9:0x713ee1c47e32476c!2m2!1d77.6439281!2d12.9117521!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/suspension3.png" alt="Tyre">
                          <h2>Tyre</h2>
                          <div class="carousel-text">
                            <h3>michelin tyres</h3>
                            <div>Boosts the comfort of your ride by increased road-handling<br>Bigger tyres and wheels decrease the noise levels of your vehicle and boost its fuel economy!</div>
                            <div class="shop"><span>Mod Available At</span><br>R M Works</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62196.96015896423!2d77.61786707910156!3d13.015919699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae172aafffffc1%3A0x972b6e64ee0b6132!2sR%20M%20Works!5e0!3m2!1sen!2sqa!4v1608456724283!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//R+M+Works,+Horamavu+Singal,+Bangalore,+Karnataka+560043,+Dodda+Banaswadi,+Bengaluru,+Karnataka+560043,+India/@13.0159197,77.6178671,13z/data=!4m16!1m6!3m5!1s0x3bae172aafffffc1:0x972b6e64ee0b6132!2sR+M+Works!8m2!3d13.0159197!4d77.652886!4m8!1m0!1m5!1m1!1s0x3bae172aafffffc1:0x972b6e64ee0b6132!2m2!1d77.652886!2d13.0159197!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                      </div>
  
                    <a class="carousel-control-prev" href="#suspension" data-slide="prev">
                      <span><i class="far fa-arrow-alt-circle-left"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#suspension" data-slide="next">
                      <span><i class="far fa-arrow-alt-circle-right"></i></span>
                    </a>
                  </div>

                </div>

                <!------------EXHAUST---------------->
                <div id="d" class="tab-pane fade">
                  
                  <div id="exhaust" class="carousel slide" data-ride="carousel"  data-interval="30000">
                      <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                          <img src="images/mods/exhaust1.png" alt="Cat Back">
                          <h2>Cat<br>Back</h2>
                          <div class="carousel-text">
                            <h3>takeda stainless steel cat back exhaust</h3>
                            <div>Manufactured from premium-quality T304 Stainless Steel Piping that is mandrel bent for a less restrictive exhaust flow!</div>
                            <div class="shop"><span>Mod Available At</span><br>Team PowerWheels</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.427444136797!2d77.59057891479328!3d13.008429790831755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae164c39ba4df7%3A0xfcddae8f013217a5!2sTeam%20Powerwheels!5e0!3m2!1sen!2sqa!4v1608460186198!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Team+Powerwheels,+Munireddypalya,+Jayamahal,+Bengaluru,+Karnataka+560006,+India/@13.0084298,77.5905789,17z/data=!4m16!1m6!3m5!1s0x3bae164c39ba4df7:0xfcddae8f013217a5!2sTeam+Powerwheels!8m2!3d13.0084298!4d77.5927676!4m8!1m0!1m5!1m1!1s0x3bae164c39ba4df7:0xfcddae8f013217a5!2m2!1d77.5927676!2d13.0084298!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/exhaust2.png" alt="Turbo Back">
                          <h2>Turbo<br>Back</h2>
                          <div class="carousel-text">
                            <h3>F87 M2 Signature Turbo-Back Exhaust</h3>
                            <div>Unique design to improve horsepower and provide additional clearance for off-roading!</div>
                            <div class="shop"><span>Mod Available At</span><br>Auto-Matrix</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62202.29786782097!2d77.56205614557462!3d12.994631290682339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef23747176028a83!2sAuto-Matrix!5e0!3m2!1sen!2sqa!4v1608460326268!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Auto-Matrix,+No:+11,+%22Prakash+Plaza%22+,+100+Ft+Road,+16th+Main+Rd,+HAL+2nd+Stage,+Indiranagar,+Bengaluru,+Karnataka+560008,+India/@12.9946313,77.5620561,13z/data=!4m16!1m6!3m5!1s0x0:0xef23747176028a83!2sAuto-Matrix!8m2!3d12.9660435!4d77.6420867!4m8!1m0!1m5!1m1!1s0x3bae141cd2c165eb:0xef23747176028a83!2m2!1d77.6420833!2d12.9660483!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/exhaust3.png" alt="Axle Back">
                          <h2>Axle<br>Back</h2>
                          <div class="carousel-text">
                            <h3>HKS Legamax Premium Axle-Back Exhaust</h3>
                            <div>Provides just the right blend of packing filament, core perforation pattern and cylindrical shape to deliver the intoxicating sound of power with every squeeze of the throttle!</div>
                            <div class="shop"><span>Mod Available At</span><br>The Car Shop</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62201.57549453993!2d77.65713289743238!3d12.997514340375961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a24cedc7f9f0e7b!2sThe%20Car%20Shop!5e0!3m2!1sen!2sqa!4v1608460451509!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//The+Car+Shop,+%234,Saraswathsmma+Complex,+Main+Road,+Kalkere+Cross,+560036,+1st+A+Cross+Rd,+Thambu+Chetty+Palya,+Ramamurthy+Nagar,+Bengaluru,+Karnataka+560016,+India/@12.9975143,77.6571329,13z/data=!4m16!1m6!3m5!1s0x0:0x4a24cedc7f9f0e7b!2sThe+Car+Shop!8m2!3d13.0211263!4d77.6790047!4m8!1m0!1m5!1m1!1s0x3bae10e0dbe3c3dd:0x4a24cedc7f9f0e7b!2m2!1d77.6790077!2d13.021123!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                      </div>
  
                    <a class="carousel-control-prev" href="#exhaust" data-slide="prev">
                      <span><i class="far fa-arrow-alt-circle-left"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#exhaust" data-slide="next">
                      <span><i class="far fa-arrow-alt-circle-right"></i></span>
                    </a>
                  </div>

                </div>

                <!-------------COOLING--------------->
                <div id="e" class="tab-pane fade">
                  
                    <div id="cooling" class="carousel slide" data-ride="carousel"  data-interval="30000">
                      <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                          <img src="images/mods/cooling1.png" alt="Performance Radiator">
                          <h2 style="font-size:1em;">Performance<br>Radiator</h2>
                          <div class="carousel-text">
                            <h3>mishimoto Aluminium Radiator</h3>
                            <div>Provides increased heat and pressure tolerance, improved heat dissipation, and improved cooling efficiency!</div>
                            <div class="shop"><span>Mod Available At</span><br>M2M Car Care</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5612481453763!2d77.62617331479248!3d12.935896990879282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1442de83aaf5%3A0xccb883462b6e83dd!2sM2M%20Car%20Care%20%26%20Accessories!5e0!3m2!1sen!2sqa!4v1608464139657!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//M2M+Car+Care+%26+Accessories,+Koramangala,+Bengaluru,+Karnataka+560034,+India/@12.935897,77.6261733,17z/data=!4m16!1m6!3m5!1s0x3bae1442de83aaf5:0xccb883462b6e83dd!2sM2M+Car+Care+%26+Accessories!8m2!3d12.935897!4d77.628362!4m8!1m0!1m5!1m1!1s0x3bae1442de83aaf5:0xccb883462b6e83dd!2m2!1d77.628362!2d12.935897!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/cooling2.png" alt="Intercooler">
                          <h2 style="font-size:1.3em;">inter<br>cooler</h2>
                          <div class="carousel-text">
                            <h3>Verti-Cooler Intercooler System</h3>
                            <div>Verti-Cooler combines the advantages of a large and free-flowing Process West core with a design that mounts the new intercooler at a 15 degree, near vertical angle in the engine bay!</div>
                            <div class="shop"><span>Mod Available At</span><br>Glamour Car Accessories</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5591452257318!2d77.61233321479247!3d12.936031890879196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae144e6eecef97%3A0x2e79c037fb1ea088!2sGlamour%20Car%20Accessories!5e0!3m2!1sen!2sqa!4v1608464233877!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Glamour+Car+Accessories,+369,+1st+A+Cross+Rd,+behind+A2B+Building,+KHB+Colony,+7th+Block,+Koramangala,+Bengaluru,+Karnataka+560095,+India/@12.9360319,77.6123332,17z/data=!4m16!1m6!3m5!1s0x3bae144e6eecef97:0x2e79c037fb1ea088!2sGlamour+Car+Accessories!8m2!3d12.9360319!4d77.6145219!4m8!1m0!1m5!1m1!1s0x3bae144e6eecef97:0x2e79c037fb1ea088!2m2!1d77.6145219!2d12.9360319!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                      </div>
  
                    <a class="carousel-control-prev" href="#cooling" data-slide="prev">
                      <span><i class="far fa-arrow-alt-circle-left"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#cooling" data-slide="next">
                      <span><i class="far fa-arrow-alt-circle-right"></i></span>
                    </a>
                  </div>
                </div>

                <!-------------INTERIOR--------------->
                <div id="f" class="tab-pane fade">

                  <div id="interior" class="carousel slide" data-ride="carousel"  data-interval="30000">
                      <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                          <img src="images/mods/int1.png" alt="Paddle Shifters">
                          <h2>Paddle<br>Shifters</h2>
                          <div class="carousel-text">
                            <h3>Alfa Romeo 4C Paddle Shifters</h3>
                            <div>Quality control guaranteed for precise fit!<br>Allows Quick gear shifting</div>
                            <div class="shop"><span>Mod Available At</span><br>Custom Kings</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17585.36347651604!2d77.61204043822515!3d12.938831444178003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8a4641ad521f462!2sCustom%20Kings!5e0!3m2!1sen!2sqa!4v1608470089704!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Custom+Kings,+%23819,+20th+Main+Rd,+Koramangala+8th+Block,+Koramangala,+Bengaluru,+Karnataka+560095,+India/@12.9388314,77.6120404,14.82z/data=!4m16!1m6!3m5!1s0x0:0xe8a4641ad521f462!2sCustom+Kings!8m2!3d12.9429989!4d77.6211548!4m8!1m0!1m5!1m1!1s0x3bae15e8be2924ed:0xe8a4641ad521f462!2m2!1d77.6221942!2d12.9423849!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/int2.png" alt="Custom Gauges">
                          <h2>Gauges</h2>
                          <div class="carousel-text">
                            <h3>Volt Triple Gauge Kit</h3>
                            <div>The triple gauge kit comes with dial mechanical instruments for measuring water temperature, oil pressure, and battery voltage!</div>
                            <div class="shop"><span>Mod Available At</span><br>Autofusion</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10998.32976154409!2d77.61754821051149!3d12.94011446795767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a6d5dfae17887d6!2sAutofusion!5e0!3m2!1sen!2sqa!4v1608470011592!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Autofusion,+%23.22,+2nd+Main+Rd,+k.r+garden,+Koramangala+8th+Block,+Ejipura,+Bengaluru,+Karnataka+560095,+India/@12.9401145,77.6175482,15.5z/data=!4m16!1m6!3m5!1s0x0:0x4a6d5dfae17887d6!2sAutofusion!8m2!3d12.9403221!4d77.6184082!4m8!1m0!1m5!1m1!1s0x3bae144c4b809603:0x4a6d5dfae17887d6!2m2!1d77.6204951!2d12.9426544!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/int3.png" alt="Seat Covers">
                          <h2>Seat<br>Covers</h2>
                          <div class="carousel-text">
                            <h3>Adeco Universal Fit Car Seat Covers</h3>
                            <div>Carefully sewn from the best quality waterproof materials and fabrics that will guarantee continued protection! Using these seat covers will help you to maintain your vehicle’s resale value</div>
                            <div class="shop"><span>Mod Available At</span><br>DC Car Designers</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.518719460332!2d77.62874921479249!3d12.93862489087754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1469d9db3249%3A0x51168d3257bf12a9!2sDC%20Car%20Designers!5e0!3m2!1sen!2sqa!4v1608469780097!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//DC+Car+Designers,+24,+100+Feet+Rd,+Ejipura,+Bengaluru,+Karnataka+560095,+India/@12.9386249,77.6287492,17z/data=!4m16!1m6!3m5!1s0x3bae1469d9db3249:0x51168d3257bf12a9!2sDC+Car+Designers!8m2!3d12.9386249!4d77.6309379!4m8!1m0!1m5!1m1!1s0x3bae1469d9db3249:0x51168d3257bf12a9!2m2!1d77.6309379!2d12.9386249!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                      </div>
  
                    <a class="carousel-control-prev" href="#interior" data-slide="prev">
                      <span><i class="far fa-arrow-alt-circle-left"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#interior" data-slide="next">
                      <span><i class="far fa-arrow-alt-circle-right"></i></span>
                    </a>
                  </div>

                </div>

                <!-------------EXTERIOR--------------->
                <div id="g" class="tab-pane fade">

                   <div id="exterior" class="carousel slide" data-ride="carousel"  data-interval="30000">
                      <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                          <img src="images/mods/ext1.png" alt="Body Wrap">
                          <h2 >Body<br>Wrap</h2>
                          <div class="carousel-text">
                            <h3>Car body vinyl wrap</h3>
                            <div>Cheaper alternative to getting a paint job!</div>
                            <div class="shop"><span>Mod Available At</span><br>Car Max Modification</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20760.616716883553!2d77.58128129139273!3d12.957631660655409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x379056b65c08112b!2sCar%20Max%20Modification!5e0!3m2!1sen!2sqa!4v1608473551447!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Car+Max+Modification,+%2351,+2nd+Cross,+K.P.+Tower,+J.C.+Road,+Bengaluru,+560002,+India/@12.9576317,77.5812813,14.58z/data=!4m16!1m6!3m5!1s0x0:0x379056b65c08112b!2sCar+Max+Modification!8m2!3d12.9563826!4d77.5799561!4m8!1m0!1m5!1m1!1s0x3bae15e66e7e00dd:0x379056b65c08112b!2m2!1d77.5800302!2d12.9569786!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/ext2.png" alt="Intercooler">
                          <h2>Chrome<br>Paint</h2>
                          <div class="carousel-text">
                            <h3>Chrome Paint Job</h3>
                            <div>Glossy and creates a bright silver finish!<br>The best chrome spray paint protects metal surfaces against scratches and chips</div>
                            <div class="shop"><span>Mod Available At</span><br><span style="font-size:.8em;">Motormind Automotive Designs</span></div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.6070023126344!2d77.65008831479385!3d13.060668990797472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae19ffe0eb669b%3A0x16b5668bddf29331!2sMotormind%20Automotive%20Designs!5e0!3m2!1sen!2sqa!4v1608473619799!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Motormind+Automotive+Designs,+6%2F1A,+6%2F2+Byrathi+Village,+Bidarahalli+Hobli,+Off+Hennur-Bagalur+Main+Road,+(Near+Legacy+School),+Bengaluru,+Karnataka+560077,+India/@13.060669,77.6500883,17z/data=!4m16!1m6!3m5!1s0x3bae19ffe0eb669b:0x16b5668bddf29331!2sMotormind+Automotive+Designs!8m2!3d13.060669!4d77.652277!4m8!1m0!1m5!1m1!1s0x3bae19ffe0eb669b:0x16b5668bddf29331!2m2!1d77.652277!2d13.060669!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                      </div>
  
                    <a class="carousel-control-prev" href="#exterior" data-slide="prev">
                      <span><i class="far fa-arrow-alt-circle-left"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#exterior" data-slide="next">
                      <span><i class="far fa-arrow-alt-circle-right"></i></span>
                    </a>
                  </div>

                </div>

                <!-------------SUPERCHARGERS/TURBOCHARGERS--------------->
                <div id="h" class="tab-pane fade">
                    
                    <div id="chargers" class="carousel slide" data-ride="carousel"  data-interval="30000">
                      <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                          <img src="images/mods/chargers1.png" alt="Superchargers">
                          <h2>Super<br>Charger</h2>
                          <div class="carousel-text">
                            <h3>Supercharger</h3>
                            <div> Featuring the most advanced and durable superchargers, with the industry's coolest charge air temperatures, much higher power levels are possible with higher boost and custom tuning!</div>
                            <div class="shop"><span>Mod Available At</span><br>Custom Kings</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17585.36347651604!2d77.61204043822515!3d12.938831444178003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8a4641ad521f462!2sCustom%20Kings!5e0!3m2!1sen!2sqa!4v1608470089704!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Custom+Kings,+%23819,+20th+Main+Rd,+Koramangala+8th+Block,+Koramangala,+Bengaluru,+Karnataka+560095,+India/@12.9388314,77.6120404,14.82z/data=!4m16!1m6!3m5!1s0x0:0xe8a4641ad521f462!2sCustom+Kings!8m2!3d12.9429989!4d77.6211548!4m8!1m0!1m5!1m1!1s0x3bae15e8be2924ed:0xe8a4641ad521f462!2m2!1d77.6221942!2d12.9423849!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/chargers2.png" alt="TruboChargers">
                          <h2>Turbo<br>Charger</h2>
                          <div class="carousel-text">
                            <h3>turbocharger</h3>
                            <div> Ideal turbo upgrade for those looking to increase the top-end power of their STI while maintaining low and mid-range response</div>
                            <div class="shop"><span>Mod Available At</span><br>Autofusion</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10998.32976154409!2d77.61754821051149!3d12.94011446795767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a6d5dfae17887d6!2sAutofusion!5e0!3m2!1sen!2sqa!4v1608470011592!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Autofusion,+%23.22,+2nd+Main+Rd,+k.r+garden,+Koramangala+8th+Block,+Ejipura,+Bengaluru,+Karnataka+560095,+India/@12.9401145,77.6175482,15.5z/data=!4m16!1m6!3m5!1s0x0:0x4a6d5dfae17887d6!2sAutofusion!8m2!3d12.9403221!4d77.6184082!4m8!1m0!1m5!1m1!1s0x3bae144c4b809603:0x4a6d5dfae17887d6!2m2!1d77.6204951!2d12.9426544!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img src="images/mods/chargers3.png" alt="TwinChargers">
                          <h2>Twin<br>Charger</h2>
                          <div class="carousel-text">
                            <h3>twincharger</h3>
                            <div>Twincharging allows getting high boost levels and is a great way to increase the power of a small engine with a high RPM range. Efficiencies of the turbo and supercharger are multiplied here!</div>
                            <div class="shop"><span>Mod Available At</span><br>Car Max Modification</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.2323512521248!2d77.57784151479268!3d12.956978590865472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15e66e7e00dd%3A0x379056b65c08112b!2sCar%20Max%20Modification!5e0!3m2!1sen!2sqa!4v1608475157183!5m2!1sen!2sqa" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.google.com/maps/dir//Car+Max+Modification,+%2351,+2nd+Cross,+K.P.+Tower,+J.C.+Road,+Bengaluru,+560002,+India/@12.9569786,77.5778415,17z/data=!4m16!1m6!3m5!1s0x3bae15e66e7e00dd:0x379056b65c08112b!2sCar+Max+Modification!8m2!3d12.9569786!4d77.5800302!4m8!1m0!1m5!1m1!1s0x3bae15e66e7e00dd:0x379056b65c08112b!2m2!1d77.5800302!2d12.9569786!3e2" target="_blank" role="button">Get Directions</a>
                          </div>   
                        </div>
                      </div>
  
                    <a class="carousel-control-prev" href="#chargers" data-slide="prev">
                      <span><i class="far fa-arrow-alt-circle-left"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#chargers" data-slide="next">
                      <span><i class="far fa-arrow-alt-circle-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>  
        </div>
      </div>  
     
      <footer class="panel-footer">
        <div class="footer-copyright text-center ">&copy; Copyright XtrmAuto 2020
        <span class="inline sclMedia"><a href="https://www.instagram.com"><img id="instaIcon" class="inline" src="images/Footer/InstagramIcon.png"></a></span>
        <span class="inline sclMedia"><a href="https://www.twitter.com"><img id="twitterIcon" class="inline" src="images/Footer/TwitterIcon.png"></a></span>  
        <span class="inline sclMedia"><a href="https://www.facebook.com"><img id="facebookIcon" class="inline" src="images/Footer/Facebook.png"></a></span>
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

function myFunction1() {
  var elmnt = document.getElementById("a");
  elmnt.scrollIntoView();
}

function myFunction2() {
  var elmnt = document.getElementById("b");
  elmnt.scrollIntoView();
}
    
    function myFunction3() {
  var elmnt = document.getElementById("c");
  elmnt.scrollIntoView();
}
    
    function myFunction4() {
  var elmnt = document.getElementById("d");
  elmnt.scrollIntoView();
}
    
    function myFunction5() {
  var elmnt = document.getElementById("e");
  elmnt.scrollIntoView();
}
    
    function myFunction6() {
  var elmnt = document.getElementById("f");
  elmnt.scrollIntoView();
}
  
    function myFunction7() {
  var elmnt = document.getElementById("g");
  elmnt.scrollIntoView();
}
  
    function myFunction8() {
  var elmnt = document.getElementById("h");
  elmnt.scrollIntoView();
}
    

    		
  </script>	

</body>


</html>
