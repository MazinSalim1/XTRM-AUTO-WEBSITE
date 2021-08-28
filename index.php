<html>
	<?php
		include "config.php";
	?>
	<head>
	
		<title>XtrmAuto</title>
		
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		
		<script src="https://kit.fontawesome.com/160f8a0fd9.js" crossorigin="anonymous"></script>

		
		<link href="css/style.css" rel="stylesheet">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
			
		
	
		<link href="C:\Users\Aditya\Downloads\bootstrap-4.5.3-dist\css\bootstrap.min.css.map" rel="stylesheet">
	
	<style>
	
		body{
		
			font-size:17px;
			font-weight:bold;
			font-family:'Montserrat', sans-serif;
			background-color:#212529;
			margin-right:-13px;
		
		}
		
	
	
	</style>
	
	
	</head>
	
	<body id="body">
		
		<nav class="navbar navbar-toggleable-md navbar-expand-md fixed-top" id="navBar" >
  
  			<a id="logoLink" class="form-inline" href="index.php" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
				<ul class="navbar-nav form-inline" id="navbar-container">

    				<li class="nav-item dropdown" >
						
						<a class="nav-link dropdown-toggle navBarLink borderHover" id="rentalDropdown" onClick="ren()" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
						
							Rental Service
						
						</a>
						
						<div class="dropdown-menu"  id="rentalDropdownMenu" aria-labelledby="navbarDropdown">

          					<a class="dropdown-item" href="rent1.html">Mahindra Scorpio</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent2.html">Vitara Brezza</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent3.html">Toyota Innova</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent4.html">Mahindra XUV300</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent5.html">Toyota Fortuner</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent6.html">Honda City</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent7.html">Tata Nexon</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent8.html">Toyota Camry</a>
							
        				</div>
						
        			</li>

 					<li class="nav-item">

        				<a class="nav-link  navBarLink borderHover" href="buycars_page.html">

          					Used Cars

        				</a>

      				</li>
					
					<li class="nav-item">
      
	  					<a href="CarMods.html" class="nav-link navBarLink borderHover">Car Tuning & Mods</a>
						
        			</li>
					
					<li class="nav-item">
      
	  					<a href="CarCare.html" class="nav-link navBarLink borderHover ">Car Care</a>
						
        			</li>
	  
    			</ul>
				
  			</div>
			
			<div>
			
				<button type="button" class="button" id="sgnInBtn" onclick="location.href='SignInPage.php';">Sign In</button>
			
			</div>

		</nav>
		
		
		<div class="jumbotron" id="jumbotron_1">
		
			<div id="formLogoText">
			<h1>XTRM</h1>
			</div> 
		
			<div id="scrollBgBox">
			
			</div>
			
			<div>
			
				<a class="box" id="scrollArrowBtn" type="">
				
					<span></span>
					<span></span>
					<span></span>
				
				</a>
			
			</div>
			
			
		</div>
		
		<div class="jumbotron parallax" id="parallaxJumbo_1">
		
			<p>Good cars get you from</p> <p>point A to point B..But great cars....</p><p>well, they just get you in Trouble</p>
		
		</div>
		
		<div class="jumbotron" id="jumbotron_2">
		
		
			<div class="container" id="txtCntr_1">
			
				<h1>About Us</h1>
				<div class="separatingBorder"></div>
			
			</div>
		
			<div class="container" id="txtCntr_2">
			
				We endeavour to provide Indian users the Best in World Service and Technology at Affordable Prices.
			
			</div>
		
			<div class="container" id="txtCntr_3">
			
				Be it business travel, leisure travel, intercity getaways or just city zipping - be spoilt for choices with our 
				exhaustive range of well-maintained Hatchbacks, Sedans, MUVs, SUVs, Hybrids and Luxury Cars. 
				We offer choices across various cities, ensuring you get the best rental cars at lowest prices.
			
			</div>
			
			<div class="container" id="txtCntr_4">
			
				Our cars come with unlimited kilometres so you can concentrate on counting memories, not kilometers. 
				You can either pick up the car from one of our predefined locations near you or have the car of your choize 
				hand delivered to your doorstep, office or your arrival airport. All cars are Sanitized and Disinfected 
				each time according to the standard protocol to ensure customer safety. So what are you waiting for? Time to book and 
				ride with Lowest Prices Guaranteed!
			
			</div>
			
			<div class="container" id="ftrCntr">
			
			
				<span id="tpLftSpn"><i class="fas fa-4x fa-infinity"></i><h3>Unlimited Kilometers</h3></span>
				<div class="verticalBorder" id="ftrVertBrdr"><span id="tpRghtSpn"><img src="images/Icons/dropOffKey.png"><h3>Anywhere Delivery</h3></span></div>
				<div class="horizontalBorder" id="ftrHrztBrdr"></div>
				<span id="btLftSpn"><img src="images/Icons/privacyIcon.png"><h3>Privacy & Freedom</h3></span></div>
				<span id="btRghtSpn"><img src="images/Icons/sanitize.png"><h3>Sanitized Cars</h3></span>
				
				
			</div>
			
			<div class="swiper-container">
				<div class="swiper-wrapper" id="swiperImg" style="text-transform:uppercase;">
					<div class="swiper-slide"><span class="swipeModel">Scorpio</span><a href="rent1.html"><img src="images/Swiper/scorpio.png"></a></div>
				  	<div class="swiper-slide"><span class="swipeModel">Vitara Breza</span><a href="rent2.html"><img src="images/Swiper/brezza.jpg"></a></div>
				  	<div class="swiper-slide"><span class="swipeModel">Toyota Innova</span><a href="rent3.html"><img src="images/Swiper/innova.png"></a></div>
				  	<div class="swiper-slide"><span class="swipeModel">Mahindra Xuv</span><a href="rent4.html"><img src="images/Swiper/xuv300.jpg"></a></div>
				  	<div class="swiper-slide"><span class="swipeModel">Toyota Fortuner</span><a href="rent5.html"><img src="images/Swiper/fortuner.jpg"></a></div>
				  	<div class="swiper-slide"><span class="swipeModel">Honda City</span><a href="rent6.html"><img src="images/Swiper/city.jpg"></a></div>
				  	<div class="swiper-slide"><span class="swipeModel">Tata Nexon</span><a href="rent7.html"><img src="images/Swiper/nexon.jpg"></a></div>
				  	<div class="swiper-slide"><span class="swipeModel">Toyota Camry</span><a href="rent8.html"><img src="images/Swiper/camry.jpg"></a></div>
			
				  	
  				</div>
			</div>
			
		
		</div>
		
		<div class="jumbotron parallax" id="jumbotron_3">
			
			<video class="" id="broncoVideo" muted>
			
				<source src="broncovideo.mp4" type="video/webm">
				
			</video>
			<div class="overlay"><h1>The All New Bronco is out</h1></div>
			
		</div>
		
		<div class="jumbotron parallax" id="jumbotron_4">
		
			<h3 id="appHeader">BOOK YOUR CARS <span><h1>ON THE GO</h1></span></h3>
			<a href="https://www.apple.com/qa/app-store/"><img class="inline" src="images/ParallaxJumbotrons/appstoreicon.png"id="appstoreicon"></a>
			<a href="https://play.google.com/store/apps?hl=en&gl=US"><img class="inline" src="images/ParallaxJumbotrons/playicon.png" ></a>
			
		
		</div>
		<div></div>	
	
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
		
		<button class="button" style="display:none;" onclick='body.scrollTo({top:0, behavior:"smooth"});' id="goTopBtn">Top<img src="images/arrowmark.png" class="arrowMarkImg inline" style="transform: rotate(270deg); margin-left:15px; padding:2px 2px;"></button>
		
		
		
		
		
		
		
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
			
			
			
			var swiper = new Swiper('.swiper-container', {
			  	
				effect: 'coverflow',
				grabCursor: true,
				centeredSlides: true,
			  	slidesPerView: 'auto',
				lazyLoading:true,
			  	coverflowEffect: {
				
					rotate: -20,
					stretch: 0,
					depth: 300,
					modifier: 1,
					slideShadows: true,
			 	
				}
	 
				
				
			});
			
		
			var broncovideo = $('#broncoVideo');
			broncovideo.on('mouseover', function(){
			
				broncovideo.get(0).play();
			
			});
			
			broncovideo.on('mouseout', function(){
			
				broncovideo.get(0).pause();				
			
			});
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
		</script>
		
		
			
	</body>

</html>



