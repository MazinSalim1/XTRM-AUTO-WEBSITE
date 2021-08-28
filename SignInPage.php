
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
		<link href="css/navBar.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<link href="C:\Users\Aditya\Downloads\bootstrap-4.5.3-dist\css\bootstrap.min.css.map" rel="styleshee">
		<link href="css/SignInPage.css" rel="stylesheet">
	<style>
	
		body{
		
			background-color:#F7F7F7;
			font-family:'Montserrat', sans-serif;
			font-weight:bold;
			font-size:17px;
		
		}
	
		.button{
		
		width-min:100px;
		width:auto;
		border:2px outset black;
		border-radius:25px;
		padding:10px 7px ;
		background-color:transparent;
		transition:0.4s;

	}
	
	.button:hover{
		
		border-color:lightgrey !important;
		transition:0.4s;
		font-size:17px;		
		box-shadow:2px 5px 10px black;		
		background-image:linear-gradient(to bottom right, dodgerblue, dodgerblue);
	
	}
	
	.button:active{
	
		box-shadow:0 2px 5px grey;
		transform: translateY(4px);
		transition:0.2s;
		
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

 					<li class="nav-item ">

        				<a class="nav-link navBarLink borderHover" href="buycars_page.html">

          					Used Cars       				</a>

      				</li>
					
					<li class="nav-item">
      
	  					<a href="CarMods.html" class="nav-link navBarLink borderHover">Car Tuning & Mods</a>
						
        			</li>
					
					<li class="nav-item">
						<a href="CarCare.html" class="nav-link navBarLink borderHover ">Car Care</a>
					</li>
    			</ul>
  			</div>

		</nav>
			
		<div class="jumbotron" id="jumbotron_1">
		
			
			
			<form id="form" method="post" action="Login.php">
				
				<div class="container" id="formContainer">
						
					<div class="form-group" >
							
							<label for="email">Email Id:</label>
							<input class="form-control input" type="text" name="email" placeholder="Email Address" value="<?php echo $_POST['email'];?>"><br>
							<label for="password">Password:</label>
							<input class="form-control input" type="password" name="password" placeholder="Password" value="<?php echo $_POST['password'];?>">
							
							<input class="button" id="lgnBtn" name="signin" role="button" type="submit" value="Log in">	
						
							<div style="opacity:0.1;" class="separatingBorder"></div>
							
						<button class="button " type="button" id="sgnUpBtn" onclick="location.href='CreateAccountPage.php'">Create Account</button>
							
					</div>
						
				</div>
				
			</form>
			
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
			
			
			function validate(){	
			
				const password = document.getElementById("password");
				const u_mail = document.getElementById("email");
				const form = document.getElementById("form");
				
				document.getElementById("password").value = "123456789";
					
					if(u_mail.value == "" || password.value.length == ""){
						alert("You cannot leave these fileds empty!!");
						u_mail.style.border = "2px solid red";
						password.style.border = "2px solid red";
						return false;
					}	
					else{
						return true;
					}
					
				});
			}
				
		
			
		
		
		
		</script>
			
	</body>
	
</html>
	
	
	
	
	
