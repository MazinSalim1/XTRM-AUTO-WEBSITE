<html>

	<head>
	
		<title>XtrmAuto</title>
		
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<script src="https://kit.fontawesome.com/160f8a0fd9.js" crossorigin="anonymous"></script>

		<link  href="css/ForgotPasswordPage.css" rel="stylesheet">	
		
		<link href="css/navBar.css" rel="stylesheet">
		

	
	
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
  
  			<a id="logoLink" class="form-inline" href="index.html" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
				<ul class="navbar-nav mr-auto form-inline bold" id="navbar-container">

    				<li class="nav-item dropdown" >
						
						<a class="nav-link dropdown-toggle navBarLink borderHover " id="rentalDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
						
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

 					<li class="nav-item dropdown">

        				<a class="nav-link  dropdown-toggle borderHover " id="buySellDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

          					Buy & Sell

        				</a>

        				<div class="dropdown-menu" id="buySellDropdownMenu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item " href="buycars_page.html">Used Cars</a>
							<div class="dropdown-divider"></div>
                            <a class="dropdown-item " href="Limo.html">Limo & Exotic Cars</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item " href="VintageCarsPage.html">Vintage Collection</a>
        				</div>

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
			
			<div class="container" id="formContainer">
			
				<form id=form" action="GetlinkRedirectPage.html">
			
					<label id="emailIdLabel">Email Id</label>
					
					<input class="inputHeight form-control" type="email" id="emailid" placeholder="Enter your Email Id" required>
					
					<p class="bold" id="verMsg">A verification mail will be sent to this Mail address.Make sure you have access to the Mail ID</p>
					
					<div class="separatingBorder"></div>
					
					<button class="button" type="submit" role="submit" id="getLinkBtn" onclick="return validate();" data-toggle="modal" data-target=".myModal">Get Link</button>
					
					<button class="button" type="button" id="cntToLgn" onclick="location.href='SignInPage.html'">Already have an account?</button>

					
				</form>
				
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
                    <div class="modal-body text-center ">We have sent a link for verification to your email. Be sure to check your spam folder too.
                        <div><a href="index.html" role="button" class="btn ">Continue to site</a></div>
                    </div>
                    
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
			
			
			
				
			document.getElementById("getLinkBtn").onclick = function(){
				
				document.getElementById("modalGetLink").style.display = "block";
			
			};
			
			this.onmouseup = function(){
			
				document.getElementById("modalGetLink").style.display = "none";
			
			}
				
			document.getElementById("resendLink").onclick = function(){
				
				alert("Your request for resending verification mail has been accepted. You will receive the mail in 5-10 minutes");
				
			};
			
			
			
			document.getElementById("cntToSite").onclick = function(){
			
				setTimeout("location.href = 'index.html';", 500);
			
			};
			
			document.getElementById("body").onscroll = function(){
			
				document.getElementById("goTopBtn").style.display = "block";
				
			};
			
			document.getElementById("cntToLgn").onclick = function(){
			
				setTimeout("location.href = 'SignInPage.html';", 500);
			
			}
			
			function validate(){
				
				var getLink_Btn = document.getElementById("getLinkBtn");
				var u_mail = document.getElementById("emailId");
				
				if(u_mail.value == ""){
					alert("Email Field is empty!!!");
					u_mail.style.border = "solid 2px red";
					return false;
				}
				else{
					return true;
				}
			}
			
			
			
		
		
		</script>
	

	
	
	</body>

</html>



