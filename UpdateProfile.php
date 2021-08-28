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
	
	if(isset($_POST["submit"])){
		$username = mysqli_real_escape_string($conn, $_POST["username"]);
		$email = mysqli_real_escape_string($conn, $_POST["email"]);
		$phone_number = mysqli_real_escape_string($conn, ($_POST["phone_number"]));
		$npassword = mysqli_real_escape_string($conn, md5($_POST["newpassword"]));
		$cpassword = mysqli_real_escape_string($conn, md5($_POST["confirmpassword"]));
	
		if($npassword == $cpassword){
			if(isset($_FILES["photo"])){
				$photo_name = $_FILES["photo"]["name"];
				$photo_tmp_name = $_FILES["photo"]["tmp_name"];
				$photo_size = $_FILES["photo"]["size"];
				$photo_new_name = rand() . $photo_name;
				
				if($photo_size > 5242880){
					echo '<script>';
					echo 'alert("Photo size exceeds 5 MB. Upload a photo of size less than 5 MB.")';
					echo '</script>';
				}else{
					$sql = "UPDATE users SET password = '$npassword', photo = '$photo_new_name' WHERE id = '{$_SESSION["user_id"]}' ";	
					$result = mysqli_query($conn, $sql);
					if($result){
						echo '<script>';
						echo 'alert("Profile updated successfully.")';
						echo '</script>';
						move_uploaded_file($photo_tmp_name, "Uploads/" . $photo_new_name);
					}else{
						echo '<script>';
						echo 'alert("There was an error updating the profile.")';
						echo '</script>';	
					}
				}
			}
		}else{
			echo '<script>';
			echo 'alert("The passwords do not match. Try again.")';
			echo '</script>';
		}
	
	}
	
?>
<html>
	<head>
		<title>XtrmAuto</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="https://kit.fontawesome.com/160f8a0fd9.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link href="C:\Users\Aditya\Downloads\bootstrap-4.5.3-dist\css\bootstrap.min.css.map" rel="stylesheet">
		<link href="css/profile.css" rel="stylesheet">
		<link href="css/HomePage.css" rel="stylesheet">
		<link href="css/navBar.css" rel="stylesheet">
		
	</head>
	
	<body id="body">
		<nav class="navbar navbar-toggleable-md navbar-expand-md fixed-top" id="navBar" >
  
  			<a id="logoLink" class="form-inline" href="Welcome.php" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

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
		<div class="profile-page">
			<div class="wrapper">
				<h2>Profile</h2>
				<div class="userCircle">
					<i id="icon" style="position:absolute;" class="far fa-4x fa-user"></i>
					<?php 	
						if(isset($_SESSION["user_id"])){
							$sql = "SELECT * FROM users WHERE id = '{$_SESSION['user_id']}'";
							$res = mysqli_query($conn,  $sql);
							if (mysqli_num_rows($res) > 0) {
								while ($images = mysqli_fetch_assoc($res)) { 
					?>
					<div id="userImg">
						<img id="userImg" src="uploads/<?=$images['photo']?>">
					</div>
					<?php 		} 
							} 
						}else{
								
						}
					?>	
				</div>
				
				<form action="" method="post" enctype="multipart/form-data">
					<?php
					
					$sql = "SELECT * FROM users WHERE id = '{$_SESSION["user_id"]}'";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
					
					?>
					<div class="inputbox">
						<label for="username">Username</label>
						<input type="text" id="username" name="username" value="<?php echo $row['username'];?>" disabled>
					</div>
					<div class="inputbox">
						<label for="email">Email Id</label>
						<input type="text" id="email" name="email" value="<?php echo $row['email'];?>" disabled>
					</div>
					<div class="inputbox">
						<label for="phone_number">Phone Number</label>
						<input type="text" id="phone_number" name="phone_number" value="<?php echo $row['phone_number'];?>" disabled>
					</div>
					<div class="inputbox">
						<label for="newpassword">New Password</label>
						<input type="password" id="newpassword" name="newpassword" required>
					</div>
					<div class="inputbox">
						<label for="confirmpassword">Confirm Password</label>
						<input type="password" id="confirmpassword" name="confirmpassword" required>
					</div>
					<div class="inputbox" id="photobox">
						<label for="photo">Choose Photo</label>
						<input type="file" accept="image/" id="photo" name="photo" >
					</div>
					<div class="inputbox">
						<button class="btn" type="submit" name="submit" onclick="hideIcon()">Update Profile</button>
					</div>
					
					<?php
						}
					}	
					?>
				</form>
			</div>
		</div>
	</body>
	<script type="text/javascript">
	
	</script>
</html>