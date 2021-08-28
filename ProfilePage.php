<?php

	include "config.php";
	session_start();
	if(!isset($_SESSION["user_id"])){
		header("location:index.php");
		echo '<script>';
		echo 'alert("User not logged in.")';
		echo '</script>';
	}else{
	
		if(isset($_POST["username"])){
			$username = mysqli_real_escape_string($conn, $_POST["username"]);
			$email = mysqli_real_escape_string($conn, $_POST["email"]);
			$phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
			
			$sql = "SELECT * FROM users WHERE id = '{$_SESSION['user_id']}'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					
				}
			}
		}
	}
	
?>
<html>
	<head>
		<link href="css/profile.css" rel="stylesheet">
		<title>XtrmAuto</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="https://kit.fontawesome.com/160f8a0fd9.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link href="C:\Users\Aditya\Downloads\bootstrap-4.5.3-dist\css\bootstrap.min.css.map" rel="stylesheet">
	</head>
	
	<body class="jumbotron profile-page">
		<div class="wrapper">
			<h2>Profile</h2>
			<div class="" id="userImg">
				<div class="userCircle">
					<img src="Uploads/<?php echo $row["photo"]; ?>" alt="">
				</div>
			</div>
			<div class="inputbox">
				<input type="text" name="username" id="username" value="<?php echo $row['username'];?>" disabled>
			</div>
		</div>
	</body>
</html>