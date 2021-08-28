<?php

	include "config.php";
?>


<html>
	
	<head>
	
		<title>XtrmAuto</title>
		
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		
		<script src="https://kit.fontawesome.com/160f8a0fd9.js" crossorigin="anonymous"></script>

		<link  href="css/CreateAccountPage.css" rel="stylesheet">	
		
		<link href="css/navBar.css" rel="stylesheet">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
			
		
	
		<link href="C:\Users\Aditya\Downloads\bootstrap-4.5.3-dist\css\bootstrap.min.css.map" rel="stylesheet">
	
	
	
	<style>
	
		body{
		
			background-color:#F7F7F7;
			font-family:'Montserrat', sans-serif;
			font-weight:bold;
			font-size:17px;
		
		}
	
	
	</style>
	
	
	</head>
	
	<body id="body">
		
		<nav class="navbar navbar-toggleable-md navbar-expand-sm fixed-top" id="navBar" >
			
				<a id="logoLink" href="index.php" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
				<ul class="navbar-nav form-inline bold">

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
			
		</nav>
			
		<div class="jumbotron" id="jumbotron_1">
			
			<form id="form" action="Registration.php" method="post">			
				<div class="container" id="formContainer">
					<div class="form-group">
						<label for="email">Email Id: </label>
						<input class="form-control input" type="email" id="email" name="email" placeholder="example@email.com" required>
						
						<label for="username">Username:</label>
						<input class="form-control input" type="text" id="username" name="username" required >
						
						<label for="password">Password: </label>
						<input class="form-control input" type="password" name="password" placeholder="Password" id="newPassword" required>
						
						<label for="password">Confirm Password: </label>
						<input class="form-control input" type="password" name="cpassword" placeholder="Confirm Password" required>
						
						<label for="phone_number">Phn no:</label>
						<input class="form-control input" type="number" name="phone_number" id="phn_number" required>
						
						<button class="button bold" type="submit" name="signup" id="sgnUpBtn"  >Sign Up!</button >
					</div>
				</div>
			</form>
	
			<button class="button" style="display:none;" onclick='body.scrollTo({top:0, behavior:"smooth"});' id="goTopBtn">Top<img src="images/arrowmark.png" class="arrowMarkImg inline" style="transform: rotate(270deg); margin-left:15px; padding:2px 2px;"></button>	
		
		</div>
		
		
		
		
		<div class="modal fade myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
      
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title ">Xtrm</h3>
                        <button type="button" class="close" data-dismiss="modal" id="modalCloseBtn" >&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body text-center ">Great!You have created an account
                        <div><a href="index.php" role="button" class="btn ">Continue to site</a></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>  
		
		
		
		
		
		
		
		
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
		
			
			function validate(){
			
				var u_mail = document.getElementById("email");
				var new_pass = document.getElementById("newPassword");
				var cnf_pass = document.getElementById("confirmPassword");
				var card_num = document.getElementById("cardNumber");
				var dob = document.getElementById("dateOfBirth");
				var sgnUp_Btn = document.getElementById("sgnUpBtn");
			
				if(u_mail.value=="" && new_pass.value=="" && cnf_pass.value=="" && card_num.value=="" && dob.value==""){
					alert("You cannot leave the fields empty!!!");
					u_mail.style.border = "2px solid red";
					new_pass.style.border = "2px solid red";
					cnf_pass.style.border = "2px solid red";
					card_num.style.border = "2px solid red";
					dob.style.border = "2px solid red";
					return false;
				}				

				if(u_mail.value==""){
					alert("You cannot leave the fields empty!!!");
					u_mail.style.border = "2px solid red";
					return false;
				}		
				if(u_mail.value!=""){
					u_mail.style.border = "none";
					return true;
				}		
				
				if(new_pass.value==""){
					alert("You cannot leave the fields empty!!!");
					new_pass.style.border = "2px solid red";
					return false;
				}
				if(new_pass.value!=""){
					new_pass.style.border = "none";
					return true;
				}		
				
				if(cnf_pass.value==""){
					alert("You cannot leave the fields empty!!!");
					cnf_pass.style.border = "2px solid red";
					return false;
				}
				if(cnf_pass.value!=""){
					cnf_pass.style.border = "none";
					return true;
				}	
				
				if(card_num.value==""){
					alert("You cannot leave the fields empty!!!");
					card_num.style.border = "2px solid red";
					return false;
				}
				if(card_num.value!=""){
					card_num.style.border = "none";
					return true;
				}
				
				if(dob.value==""){
					alert("You cannot leave the fields empty!!!");
					dob.style.border = "2px solid red";
					return false;
				}
				if(dob.value!=""){
					dob.style.border = "none";
					return true;
				}
				
				
				else if(new_pass.value != cnf_pass.value){
					alert("Your passwords do not match!!");
					new_pass.style.border = "2px solid red";
					cnf_pass.style.border = "2px solid red";
					return false;
				}
				else{
					return true;
				}
				
				
			}
		
		
		
		
		</script>
		
	</body>
	
</html>
	
	
	
