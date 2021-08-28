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
		<title>Vintage Collection</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/navBar.css" rel="stylesheet">
		<link rel="stylesheet" href="css/VintageCarsPage.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
		

		<script src="js/buycars_page.js"></script>
		<script src="https://kit.fontawesome.com/a003c65f08.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	

	</head>
	
	<body id="body" >
		 <div class="parallax1">
        <div class="caption1">
          <h1>CLASSIC CARS</h1>
        </div>
        <div class="bold quote1">B'coz in 60 years<br>No one will open a barn &<br> be excited to find a 2003 KIA
        </div>    
     </div>
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

 					<li class="nav-item dropdown">

        				<a class="nav-link  dropdown-toggle borderHover" id="buySellDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

          					Used Cars

        				</a>

        				<div class="dropdown-menu" id="buySellDropdownMenu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item " href="buycars_page.php">Used Cars</a>
							<div class="dropdown-divider"></div>
                           
							<a class="dropdown-item " href="VintageCarsPage.php">Vintage Collection</a>
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
	<!--***************NAVBAR ENDS*********************-->

	<!-----------------MAIN CONTENT--------------------->
	<div id="container1" class="container.fluid container1">
    <div class="row row1">
      <div class="jumbotron col-sm-9">
        <h3 class="jumbotron-text">1972 Ferrari Dino 246 GT</h3> 
      </div>
      <div class="jumbotron-sidetext col-sm-3 text-center">
        <h3>Current Bid : ₹55,00,00/-</h3>
        <div class="text-danger" id="timer"></div>
        
        <a role="button" href="#"><button  class="bttn" data-toggle="modal" data-target=".myModal"><i class="far fa-handshake"></i><br>make an offer</button></a>
        <br>
         
        <a role="button" href="tel:97450170109"><button  class="bttn"><i class="fas fa-headphones"></i><br>contact our xtrm specialist</button></a>
      
        <div class="info">
          <i class="fas fa-info-circle"></i><span>Please be aware that we are unable to remove bids on auction day. If you need a bid removed for this vehicle please email <span class="text-lowercase">info@xtrm.com</span></span>
        </div>
      </div>  
    </div>  
  </div> 

  <div class="parallax2">
        <div class="caption2">
        </div>
        <div class="quote2">Quality Never <br>Goes Out <br>of Style
        </div>    
     </div>

  <div class="container.fluid">
    <div class="row row2">
           
     <div class="scene">  
        <div class="card card1">
          <div class="card_face card_face--front"><img src="images/vintage/color1.jpeg" width="480px" height="330px"><span>1947 Rolls-Royce Wraith<span></div>
          <div class="card_face card_face--back">
            <table class="table">
              <thead>
                <tr>
                  <th>Current Bid</th>
                  <th class="text-right">₹22,50,300</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Time left</td>
                  <td class="text-right text-danger">28 Days</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td class="text-right">Rolls-Royce Wraith</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td class="text-right">1947</td>
                </tr> 
                <tr>
                  <td>Body type</td>
                  <td class="text-right">Saloon</td>
                </tr>
                <tr>
                  <td>Engine</td>
                  <td class="text-right">4.3L (260 cu in) I6</td>
                </tr>
                <tr>
                  <td>Bid Now</td>
                  <td class="text-right"><a role="button" href="#" class="bid_btn" data-toggle="modal" data-target=".myModal"><i class="fas fa-bullhorn"></i></a></td>
                </tr> 
              </tbody>
            </table> 
          </div>
        </div>
      </div>  

      <div class="scene">  
        <div class="card card2">
          <div class="card_face card_face--front"><img src="images/vintage/essex.jpg" width="480px" height="330px"><span>1929 ESSEX Super 6 <span></div>
          <div class="card_face card_face--back">
            <table class="table">
              <thead>
                <tr>
                  <th>Current Bid</th>
                  <th class="text-right">₹10,96,001</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Time left</td>
                  <td class="text-right text-danger">19 Days</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td class="text-right">Essex Super Six</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td class="text-right">1929</td>
                </tr> 
                <tr>
                  <td>Body type</td>
                  <td class="text-right">Sedan</td>
                </tr>
                <tr>
                  <td>Engine</td>
                  <td class="text-right">L(161.4 cu in) I6</td>
                </tr>
                <tr>
                  <td>Bid Now</td>
                  <td class="text-right"><a role="button" href="#" class="bid_btn" data-toggle="modal" data-target=".myModal"><i class="fas fa-bullhorn"></i></a></td>
                </tr> 
              </tbody>
            </table> 
          </div>
        </div>
      </div>  

       <div class="scene">  
        <div class="card card3">
          <div class="card_face card_face--front"><img src="images/vintage/corvette.jpg" width="480px" height="330px"><span>1963 Chevrolet Corvette<span></div>
          <div class="card_face card_face--back">
            <table class="table">
              <thead>
                <tr>
                  <th>Current Bid</th>
                  <th class="text-right">₹80,76,000</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Time left</td>
                  <td class="text-right text-danger">10 Days</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td class="text-right">Chevrolet Corvette</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td class="text-right">1963</td>
                </tr> 
                <tr>
                  <td>Body type</td>
                  <td class="text-right">Cabriolet/Roadster</td>
                </tr>
                <tr>
                  <td>Engine</td>
                  <td class="text-right">5.4L(327 cu in) V8</td>
                </tr>
                <tr>
                  <td>Bid Now</td>
                  <td class="text-right"><a role="button" href="#" class="bid_btn" data-toggle="modal" data-target=".myModal"><i class="fas fa-bullhorn"></i></a></td>
                </tr> 
              </tbody>
            </table> 
          </div>
        </div>
      </div>


       <div class="scene">  
        <div class="card card4">
          <div class="card_face card_face--front"><img src="images/vintage/jaguar.jpg" width="480px" height="330px"><span>1998 Jaguar XKR<span></div>
          <div class="card_face card_face--back">
            <table class="table">
              <thead>
                <tr>
                  <th>Current Bid</th>
                  <th class="text-right">₹20,69,000</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Time left</td>
                  <td class="text-right text-danger">15 Days</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td class="text-right">Jaguar XKR</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td class="text-right">1998</td>
                </tr> 
                <tr>
                  <td>Body type</td>
                  <td class="text-right">Cabriolet/Roadster</td>
                </tr>
                <tr>
                  <td>Engine</td>
                  <td class="text-right">4.0L(327 cu in) V8</td>
                </tr>
                <tr>
                  <td>Bid Now</td>
                  <td class="text-right"><a role="button" href="#" class="bid_btn" data-toggle="modal" data-target=".myModal"><i class="fas fa-bullhorn"></i></a></td>
                </tr> 
              </tbody>
            </table> 
          </div>
        </div>
      </div>


       <div class="scene">  
        <div class="card card5">
          <div class="card_face card_face--front"><img src="images/vintage/fordtorino.jpg" width="480px" height="330px"><span>1968 Ford Torino<span></div>
          <div class="card_face card_face--back">
            <table class="table">
              <thead>
                <tr>
                  <th>Current Bid</th>
                  <th class="text-right">₹23,18,00</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Time left</td>
                  <td class="text-right text-danger">12 Days</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td class="text-right">Ford Torino</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td class="text-right">1968</td>
                </tr> 
                <tr>
                  <td>Body type</td>
                  <td class="text-right">Coupe</td>
                </tr>
                <tr>
                  <td>Engine</td>
                  <td class="text-right">3.3L(289 cu in) I6</td>
                </tr>
                <tr>
                  <td>Bid Now</td>
                  <td class="text-right"><a role="button" href="#" class="bid_btn" data-toggle="modal" data-target=".myModal"><i class="fas fa-bullhorn"></i></a></td>
                </tr> 
              </tbody>
            </table> 
          </div>
        </div>
      </div>

      <div class="scene">  
        <div class="card card6">
          <div class="card_face card_face--front"><img src="images/vintage/carrera.jpg" width="480px" height="330px"><span>1974 Porsche 911 Carrera 2.7<span></div>
          <div class="card_face card_face--back">
            <table class="table">
              <thead>
                <tr>
                  <th>Current Bid</th>
                  <th class="text-right">₹44,50,000</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Time left</td>
                  <td class="text-right text-danger">4 days</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td class="text-right">Porsche 911 Carrera 2.7</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td class="text-right">1974</td>
                </tr> 
                <tr>
                  <td>Body type</td>
                  <td class="text-right">Cabriolet/Roadster</td>
                </tr>
                <tr>
                  <td>Engine</td>
                  <td class="text-right">2.7L(329 cu in) I6</td>
                </tr>
                <tr>
                  <td>Bid Now</td>
                  <td class="text-right"><a role="button" href="#" class="bid_btn" data-toggle="modal" data-target=".myModal"><i class="fas fa-bullhorn"></i></a></td>
                </tr> 
              </tbody>
            </table> 
          </div>
        </div>
      </div>

       <div class="scene">  
        <div class="card card7">
          <div class="card_face card_face--front"><img src="images/vintage/beetle.jpg" width="480px" height="330px"><span>1973 Volkswagen Beetle 1303 S<span></div>
          <div class="card_face card_face--back">
            <table class="table">
              <thead>
                <tr>
                  <th>Current Bid</th>
                  <th class="text-right">₹5,28,500</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Time left</td>
                  <td class="text-right text-danger">25 days</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td class="text-right">Volkswagen Beetle 1303 S</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td class="text-right">1973</td>
                </tr> 
                <tr>
                  <td>Body type</td>
                  <td class="text-right">Sedan/Saloon</td>
                </tr>
                <tr>
                  <td>Engine</td>
                  <td class="text-right">1100 cc H4</td>
                </tr>
                <tr>
                  <td>Bid Now</td>
                  <td class="text-right"><a role="button" href="#" class="bid_btn" data-toggle="modal" data-target=".myModal"><i class="fas fa-bullhorn"></i></a></td>
                </tr> 
              </tbody>
            </table> 
          </div>
        </div>
      </div>

      <div class="scene">  
        <div class="card card8">
          <div class="card_face card_face--front"><img src="images/vintage/indy.jpg" width="480px" height="330px"><span>1970 Maserati Indy 4.2<span></div>
          <div class="card_face card_face--back">
            <table class="table">
              <thead>
                <tr>
                  <th>Current Bid</th>
                  <th class="text-right">₹80,58,500</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Time left</td>
                  <td class="text-right text-danger">16 days</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td class="text-right">Maserati Indy 4.2</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td class="text-right">1970</td>
                </tr> 
                <tr>
                  <td>Body type</td>
                  <td class="text-right">Coupe</td>
                </tr>
                <tr>
                  <td>Engine</td>
                  <td class="text-right">4.9L V8</td>
                </tr>
                <tr>
                  <td>Bid Now</td>
                  <td class="text-right"><a role="button" href="#" class="bid_btn" data-toggle="modal" data-target=".myModal"><i class="fas fa-bullhorn"></i></a></td>
                </tr> 
              </tbody>
            </table> 
          </div>
        </div>
      </div>

      <div class="scene">  
        <div class="card card9">
          <div class="card_face card_face--front"><img src="images/vintage/ferrari.jpeg" width="480px" height="330px"><span>1972 Ferrari Dino 246 GT<span></div>
          <div class="card_face card_face--back">
            <table class="table">
              <thead>
                <tr>
                  <th>Current Bid</th>
                  <th class="text-right">₹55,00,000</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Time left</td>
                  <td class="text-right text-danger">Last Day</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td class="text-right">Ferrari Dino 246 GT</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td class="text-right">1972</td>
                </tr> 
                <tr>
                  <td>Body type</td>
                  <td class="text-right">Coupe</td>
                </tr>
                <tr>
                  <td>Engine</td>
                  <td class="text-right">2418 cc V6</td>
                </tr>
                <tr>
                  <td>Bid Now</td>
                  <td class="text-right"><a role="button" href="#container1" class="bid_btn"><i class="fas fa-bullhorn"></i></a></td>
                </tr> 
              </tbody>
            </table> 
          </div>
        </div>
      </div>
  
  </div> 

  <!-- The Modal -->
  <div class="modal fade myModal" class="">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-uppercase">make an offer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <img class="img-responsive" src="images/vintage/modal.png" width="798px" height="300px">
         <span>In order to make a bid, you must first register and then make a minimum deposit of ₹45,000 on your Xtrm Account. Remember that the deposit is refundable so long as you do not have any outstanding bids, exercised a Buy Now or made any offers.</span><br><br>

         <a  href="SignInPage.php">Please Click Here to Login</a>

        </div>
        
      
      </div>
    </div>
  </div>

<script>
//CARD1
var card1 = 
document.querySelector('.card1');
card1.addEventListener( 'click', function() {
  card1.classList.toggle('is-flipped');
});

//CARD 2
var card2 = 
document.querySelector('.card2');
card2.addEventListener( 'click', function() {
  card2.classList.toggle('is-flipped');
});

//CARD 3
var card3 = 
document.querySelector('.card3');
card3.addEventListener( 'click', function() {
  card3.classList.toggle('is-flipped');
});

//CARD 4
var card4 = 
document.querySelector('.card4');
card4.addEventListener( 'click', function() {
  card4.classList.toggle('is-flipped');
});

//CARD 5
var card5 = 
document.querySelector('.card5');
card5.addEventListener( 'click', function() {
  card5.classList.toggle('is-flipped');
});

//CARD 6
var card6 = 
document.querySelector('.card6');
card6.addEventListener( 'click', function() {
  card6.classList.toggle('is-flipped');
});

//CARD 7
var card7 = 
document.querySelector('.card7');
card7.addEventListener( 'click', function() {
  card7.classList.toggle('is-flipped');
});

//CARD8
var card8 = 
document.querySelector('.card8');
card8.addEventListener( 'click', function() {
  card8.classList.toggle('is-flipped');
});

//CARD9
var card9 = 
document.querySelector('.card9');
card9.addEventListener( 'click', function() {
  card9.classList.toggle('is-flipped');
});

// Set the date we're counting down to
var countDownDate = new Date("Apr 01, 2021 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer").innerHTML =  hours + "h : "
  + minutes + "m : " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);


</script>
</body>
<footer class="panel-footer">
  <div class="footer-copyright text-center ">&copy; Copyright XtrmAuto 2020
        <span class="inline sclMedia"><a href="https://www.instagram.com"><img id="instaIcon" class="inline" src="images/Footer/InstagramIcon.png"></a></span>
        <span class="inline sclMedia"><a href="https://www.twitter.com"><img id="twitterIcon" class="inline" src="images/Footer/TwitterIcon.png"></a></span>  
        <span class="inline sclMedia"><a href="https://www.facebook.com"><img id="facebookIcon" class="inline" src="images/Footer/Facebook.png"></a></span>
</footer>  
</html>
