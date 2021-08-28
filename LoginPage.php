<?php

	session_start();
	
	if(!isset($_SESSION["user_id"])){
		header("location:index.php");
	}
	
	if(isset($_POST["submit"])){
		$email = mysqli_real_escape_string($lnik,$_POST["email"]);
		$password = mysqli_real_escape_string($lnik,$_POST["password"]);
	}

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
  
  			<a id="logoLink" class="form-inline" href="index.html" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
				<ul class="navbar-nav form-inline" id="navbar-container">

    				<li class="nav-item dropdown" >
						
						<a class="nav-link dropdown-toggle navBarLink borderHover" id="rentalDropdown" onClick="ren()" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
						
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

          					Buy & Sell

        				</a>

        				<div class="dropdown-menu" id="buySellDropdownMenu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item " href="buycars_page.php">Used Cars</a>
							<div class="dropdown-divider"></div>
                            <a class="dropdown-item " href="Limo.php">Limo & Exotic Cars</a>
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
			</div>

		</nav>
			
		<div class="jumbotron" id="jumbotron_1">
		
			
			
			<form id="form" method="post" enctype="multipart/form-data">
				<?php
				
					$query = "SELECT * FROM user_info WHERE id='{$_SESSION["id"]}'";
					$result = mysqli_query($link,$query);
					if(mysqli_num_rows($result)>0){
						while($row = mysqli_fetch_assoc($result)){
					
				?>
				<div class="container" id="formContainer">			
					<div class="form-group">
							<label for="email">Email Id:</label>
							<input class="form-control input" type="text" name="email" placeholder="Email Address" value="<?php echo $row['email_ID'];?>"><br>
							<label for="password">Password:</label>
							<input class="form-control input" type="password" name="password" placeholder="Password" value="<?php echo $row['user_pass'];?>">
							<input type="hidden" name="Createacc" value="0">
							<input class="button" id="lgnBtn" role="button" type="submit" value="Log in">	
				<?php 
						}
					}
				?>		
						<div class="separatingBorder"></div>
						<button class="button " type="button" id="sgnUpBtn" onclick="location.href='CreateAccountPage.php'">Create Account</button>
						<button class="button " type="button" id="frgtBtn" onclick="location.href='ForgotPasswordPage.php'">Forgot Password?</button>
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
			
			document.getElementById("lgnInBtn").onclick = function(){
			
				setTimeout("location.href = 'index.php';", 500);
			
			};
			
			document.getElementById("sgnUpBtn").onclick = function(){
			
				setTimeout("location.href = 'CreateAccountPage.php';", 500);
			
			};
			
			document.getElementById("frgtBtn").onclick = function(){
			
				setTimeout("location.href = 'ForgotPasswordPage.php';", 500);
			
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
	
	
	
	
	
