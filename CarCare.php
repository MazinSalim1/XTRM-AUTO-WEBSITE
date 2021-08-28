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
    <title>Car Care</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <link href="css/CarCare.css" rel="stylesheet">
    
    <style type="text/css">

        #body{
          font-family:'Georgia', sans-serif ;
        }

    </style>
    
    <script src="https://kit.fontawesome.com/a003c65f08.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

  </head>
  
  <body id="body"  data-spy="scroll" data-target="#covidCareContainer" data-offset="20">
		
		<!--*********NAVBAR**********-->
		<nav class="navbar navbar-toggleable-md navbar-expand-sm fixed-top" id="navBar" >
  
  			<a id="logoLink" class="form-inline" href="Welcome.php" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

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

 					<li class="nav-item dropdown">

        				<a class="nav-link borderHover" id="buySellDropdown" href="buycars_page.php" data-toggle="" aria-haspopup="true" aria-expanded="false" >

          					Used Cars

        				</a>

        				<div class="" id="buySellDropdownMenu" aria-labelledby="navbarDropdown">
          					
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
			
			<div>
				<a href="UpdateProfile.php" id="profilebtn">Profile</a>
			</div>
			<div>
				<a href="Logout.php" id="logoutBtn">Logout</a>
			</div>

		</nav>

    <!--**********NAVBAR ENDS*************-->



    <div class="jumbotron " id="textJumbotron">
      <h1>Car Care</h1>
      <div class="container" id="textContainer">
          <h3>Why is Car Care So Important ?</h3>
          <p>For many, car maintenance is nothing more than filling up fuel tank and occasional engine oil change. If you believe checking your car before each drive or before going on a long road trip is a waste of time, you cannot be further from truth. Regular vehicle maintenance will not only ensure maximum car performance but will also prevent costly repairs. Sometimes, even the smallest defect that seems irrelevant to you may lead to a major problem which will consequently increase your car maintenance costs.
If, for some reason, car’s ability to properly run is impaired, safety risks increase for all vehicle occupants and everyone else on the road. A well-maintained car runs better and demonstrates impeccable performance. </p><p>This is why car maintenance is of utmost importance. In addition, vehicle maintenance equals better fuel economy. A properly maintained car will run better and thus be more fuel-efficient. With today’s fluctuating gas prices, regular car inspections will save you money spent on fuel. 
            Therefore, check your tire pressure, fuel lines and change filters according to manufacturer’s recommended service schedule.</p>
      </div>
      
      <div class="container" id="CoronaContainer">
        <h3>Seasonal Care</h3>
        <li>Under extreme heat, one way to avoid the sun’s harmful effects is to simply park in the shade if you will be leaving your car out for 
            hours but be aware of what you’re parking beneath! If parking in the shade isn’t an option, a windshield sun shade is a great choice 
            to assist in protecting your interior surfaces. It will greatly lower the internal temperature of your car, while preventing nasty 
            side effects from extreme heat. Avoid any potential issues by making sure your cooling system is in tip-top shape. Check out the belts, 
            as well as the coolant. Be sure to change these regularly.</li>
       
        <br>
        
        <li>Rain may provide a calming ambiance, but when it comes to your car, it can wreak some major havoc. To ensure safety, take 
            the proactive measure of washing and waxing, sealing, or coating your car. This serves to protect your car by creating a barrier
            between the car’s paint and the rain and dirt that is left behind. There are few things as detrimental to the interior of a car as
            water damage. Prevent rain from getting inside your vehicle by ensuring all openings are perfectly sealed. Check out the rubber 
            linings on doors, and immediately repair any that become damaged.</li>
        
        <br>
        
        <li>When bad weather comes to mind, one automatically conjures up an image of extreme blizzards. There’s nothing worse than having 
            to wake up early to scrape off all the ice and snow that accumulated on your car overnight. Avoid this early-morning hassle by 
            simply placing a towel over your windshield. This way, when you take the towel off in the morning, the snow will go with it. It 
            is also essential that your tires are in perfect working condition when you’re expecting a blizzard. When cold weather hits, the 
            pressure can get lower. Combine this with dangerous, snowy roads, and it can cause several issues for your car and your safety. 
            For those that live in areas that experience more frequent snowstorms, snow tires may be the way to go. These tires increase 
            traction, reduce snow build-up, and stay steady in even the iciest conditions.</li>
            
        <br>   
            
        <li>Any extreme temperature changes will affect your car, and this includes the extreme cold. Even if there is no snow or ice, 
            those frigid temperatures can do a number on your car. Batteries work harder in the winter, making it much more likely for worn 
            ones to stop working. Check out the battery’s health before the coldest days of winter start, so you won’t have to worry about 
            your battery giving out. Have any windshield cracks that need fixing? While they may not seem like a big deal now, come winter,
            they can get much worse. The colder temperatures cause the glass to contract, which could potentially make the cracks spread. 
            Make sure to repair these before the coldest weather hits. Using your wipers in the winter can feel like a fruitless endeavour. 
            Stop the freeze and forgo the streaks by investing in a winter-specific wiper fluid. These will include antifreeze properties,
            so you won’t have to worry about your windshield becoming filthy.</li>
      
      </div>

    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  <div class="container" id="covidCareContainer">
    <h3 style=" padding-bottom:5px;margin-bottom:20px; ">Covid Care</h3>
      <h5 style="margin-bottom:30px;">Coronavirus lockdown has quarantined millions of people across the country. While work from home means several offices wear a deserted
            look, car parking space in housing society has had an opposite effect. If your car is also parked for several days then you must
            follow these precautions to make sure it is in the running condition when you actually need them. </h5>
      
      <hr>
      
      <h3 style=" width:800px; text-align:left; padding:10px 5px; ">Safety Measures taken during Pandemic</h3><br>
        <p>In XTRM Auto, your safety is our priority. Here are a few steps we have taken to ensure the safety of our clients and employees</li>
        <li>All our vehicles are sanitized inside out before and after use </li><br>
        <li>All stores and offices are sanitized regularly</li><br>
        <li>Sanitizers are placed in all entry and exit points of the store</li><br>
        <li>Our employees are tested and their travel histories are recorded</li><br>
      
      <hr>
      
      <div id="navBtn" class="container">
        <div class="container " id="navBtn_1">
          <button style="width:150px; margin:10px; margin-bottom:120px; margin-top:-15px;"class="btn btn-primary" type="button" data-toggle="collapse" data-target="#covidCare_1" aria-expanded="false" aria-controls="covidCare_1" id="covidCareBtn_1" >
            Battery Check
          </button>
        </div>
        <div class="container" id="navBtn_2">
        <button style="width:150px; margin:10px; margin-bottom:120px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#covidCare_2" aria-expanded="false" aria-controls="covidCare_2" id="covidCareBtn_2" >
          Brake Callipers
        </button>
        </div>
        <div class="container" id="navBtn_3">
        <button style="width:150px; margin:10px; margin-bottom:125px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#covidCare_3" aria-expanded="false" aria-controls="covidCare_3" id="covidCareBtn_3">
          Tyre Pressure
        </button>
        </div>
        <div class="container" id="navBtn_4">
        <button style="width:150px; margin:10px; margin-bottom:125px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#covidCare_4" aria-expanded="false" aria-controls="covidCare_4" id="covidCareBtn_4">
          Parking
        </button>
        </div>
        <div class="container" id="navBtn_5">
        <button style="width:150px; margin:10px; margin-bottom:125px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#covidCare_5" aria-expanded="false" aria-controls="covidCare_5" id="covidCareBtn_5">
          Interiors
        </button>
        </div>  
        <div class="container" id="navBtn_6">
        <button style="width:150px; margin:10px; margin-bottom:50px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#covidCare_6" aria-expanded="false" aria-controls="covidCare_6" id="covidCareBtn_6" >
          Exteriors
        </button>
        </div>
      </div>
	  
	  <div class="container" id="mainContainer">
          <div id="covidCare_1" class="collapse ">
              <div class="card card-block container covidCareContainer">
                <h4> Battery Check</h4>
                  <p>The battery is one of the most vulnerable part of the car as it stays in a stagnant state for weeks if not months. 
                      Your battery is likely to lose charge easily in such a long period. You can do two things to check this, you can 
                      disconnect the battery wires so that the battery does not drain out while your car is parked during the lockdown. 
                      Alternatively, you can start your car once every couple of days and let the engine run for a period of 10 minutes 
                      for it to run all checks and keep everything in order. </p>
              </div>
          </div>
			
			<div id="covidCare_2" class="collapse">
            <div class="card card-block  container covidCareContainer">
              <h4> Brake Callipers</h4>
                <p>Brake callipers are prone to rust when they are out of function for a long time. If you are keeping the handbrake of your car engaged, 
                it might be another factor that leads to rusting.In order to avoid this, try not to engage the hand brake. If your car 
                stands on a plane surface, this might be an easy option. You can also use tyre stoppers or bricks to keep the car from moving from its 
                stationary position. </p>
            </div>
          </div>
		  
		  <div id="covidCare_3" class="collapse">
            <div class="card card-block container covidCareContainer">
            <h4> Tyre Pressure</h4>
              <p>Your car is prone to losing tyre pressure while it stands in a stationary position for a long time. Over a period of time, this could 
                  lead to a flat tyre. To check this, make sure that the tyre pressure in your car is kept at an optimum range. Moving your car, a couple 
                    of feet every week is also a good solution to this problem.</p>
            </div>
          </div>  
		  
		   <div id="covidCare_4" class="collapse">
            <div class="card card-block container covidCareContainer">
            <h4> Parking</h4>
              <p>Make sure that your car is parked at a spot where it is easily accessible in case of an emergency. Ideally it should be
                  under a shed so that the sun exposure is eliminated. Direct sunlight can affect the car's paintjob, as well as the leather 
                  inside the car is prone to melting at high temperatures Avoid stashing your car under sap-prone trees or in places where 
                  birds are known to congregate. </p>
            </div>
          </div>      
  
		<div id="covidCare_5" class="collapse">
            <div class="card card-block container covidCareContainer">
            <h4> Interiors</h4>
              <p>When the car is stationary for a long period of time, any smelly particle inside the car is bound to get aggravated and 
                  create a foul smell in the car. To avoid this, make sure that the interiors of the car are cleaned properly. You can also 
                    leave a small part of the window open for ventilation. </p>
            </div>
          </div> 
        
		
		<div id="covidCare_6" class="collapse">
            <div class="card card-block container covidCareContainer">
            <h4> Exteriors</h4>
              <p>When the car is stationary for a long period of time, any smelly particle inside the car is bound to get aggravated and 
                  create a foul smell in the car. To avoid this, make sure that the interiors of the car are cleaned properly. You can also 
                  leave a small part of the window open for ventilation.</p>
            </div>
         </div> 
     </div>
  </div>	
</div>
  
  <h2 style="text-decoration:underline; margin-top:40px; margin-bottom:40px; margin-left:150px;" id="faq">FAQ's</h2>
  
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         1. Are car rentals available for self-drive?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p>As you take a car rental service, you of course get the self-drive option. Due to COVID-19, most of the car rental companies, customers get to enjoy the self-drive option so that the social distancing protocol can be followed properly. </p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          2. Is car rental safe during the Pandemic?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>Car rental is one of the safest options during a pandemic since there will be no other person in the car from whom the virus can transmit. You can include the people in the car who you think are safe to travel with. You can be the driver of the car and use it just like your own car. From using it for daily needs to taking the car for a trip, you can use it the way you want.</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          3. What is the current process of car rental during the COVID-19?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>Due to COVID-19, many things have changed, including the process of car rental. Everything is being made as contactless as possible. It has become more convenient and streamlines as you just have to visit our site or install the XtrmAuto App from Google Play Store or iOS App Store and choose the car of your choice from the list. You can then book the car, after which you will receive a call from an executive from the company for the basic KYC. 
                A deep cleaning and sanitization program will be carried out then by the company. Once the car is ready, it will be delivered to your doorstep. The executive who delivers it will wear PPE gear. </p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          4. How does car rental return work during the Coronavirus outbreak?
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>If you are renting a car, you can reach out to the Company executives to know about the various options for returning the rental car. We will send our staff to collect 
                the car from your house for free of cost. You can also clear all your other queries when you get in touch with the Customer Service. </p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFiev">
          5. What guidelines does a car rental company follow for cleaning and sanitation?
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>We at XtrmAuto, follow a thorough cleaning process. The cleaning process includes vacuuming, wiping, washing, 
                and sanitizing the car with the top-notch quality disinfectant. Attention is paid more to over 20 high-touch points, which include 
                Key / key fob, Steering wheel, Steering column, Seat belts, Seat pockets/seat surfaces, Center console, Areas between seats & doorjambs, 
                Door interiors, Door pockets, Interior door handles, Exterior door handles, Areas between seats & consoles, Cupholders/compartments, 
                Accessory panel/touchscreen, Rearview mirror/side mirrors, Visors/visor mirrors, Instrument panel, Dashboard/vents, Gearstick/gear shift, 
                Trunk release, to name a few.</p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          6. Eligibility criteria for car rental?
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>The basic criterion for availing of a car rental service is that you need to be 21 years old or above and have a valid license for four-wheelers.
            You also need to have an ID and address proof, which has to be submitted to the company while taking the car rental service. You will need to submit
            the original license, and not one printed on an A4 size paper.</p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          7. Can I cancel my car rental?
        </button>
      </h2>
      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>Yes, you can go ahead and cancel the car rental service. You can do it through the app, the website, or just by making a call to XtrmAuto. 
            The charges of canceling the booking depend upon the time when you inform the company. You can refer to our Fee policy to get in-depth 
            information about the canceling process</p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingEight">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          8. Can I switch the car during COVID19?
        </button>
      </h2>
      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>Yes, you can switch the car even during the ongoing pandemic. However, you need to get in touch with the company,
                preferably through a phone call, after which the process of switching the car will be carried out.s</p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingNine">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          9. Can I extend my car rental booking?
        </button>
      </h2>
      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>You can easily extend your car rental booking. You will have to mention your Rental Agreement Number while your request to extend the car rental service. 
                You can get in touch with the company directly through a phone call to extend the service.</p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTen">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
          10. Should I clean my rental car before returning it and how?
        </button>
      </h2>
      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>We don’t require customers to sanitize their rental vehicles before returning them; however, we do expect rental cars to be returned in the same condition 
            that they were first rented in. Following guidance from leading health authorities and in partnership with the travel industry, we pledge to go above and 
            beyond our already rigorous cleaning protocols, including strict sanitizing procedures to protect the health and safety of all.</p>
        </div>
      </div>
    </div>
  
  
  
</div>

  

   
  
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
    
    
    document.getElementById("covidCareBtn_1").onclick = function(){
        document.getElementById("covidCare_1").style.display = "block";
    };
    document.getElementById("covidCareBtn_2").onclick = function(){
      document.getElementById("covidCare_2").style.display = "block";
    };
    document.getElementById("covidCareBtn_3").onclick = function(){
      document.getElementById("covidCare_3").style.display = "block";
    };
    document.getElementById("covidCareBtn_4").onclick = function(){
      document.getElementById("covidCare_4").style.display = "block";
    };
    document.getElementById("covidCareBtn_5").onclick = function(){
      document.getElementById("covidCare_5").style.display = "block";
    };  
    document.getElementById("covidCareBtn_6").onclick = function(){
      document.getElementById("covidCare_6").style.display = "block";
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
