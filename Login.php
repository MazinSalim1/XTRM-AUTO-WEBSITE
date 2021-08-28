<?php

	include "config.php";
	session_start();
	
	if(isset($_SESSION["user_id"])){
		header("location:welcome.php");
	}
	
	if(isset($_POST["signin"])) {
	  	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	  	$password = mysqli_real_escape_string($conn, md5($_POST["password"]));
	}
	
	$check_email = mysqli_query($conn, "SELECT id FROM users WHERE email = '$email' AND password = '$password'");
	if(mysqli_num_rows($check_email) > 0){
		$_POST["email"] = "";
		$_POST["password"] = "";
		$row = mysqli_fetch_assoc($check_email);
		$_SESSION["user_id"] = $row['id'];
		header ("location:welcome.php");
		echo '<script>';
		echo 'alert("Successfully logged in.")';
		echo '</script>';
	}else{
		echo "<script>
			alert('Login details is incorrect. Please try again.');
			window.location.href = 'SignInPage.php';
			</script>";
	}
	
?>