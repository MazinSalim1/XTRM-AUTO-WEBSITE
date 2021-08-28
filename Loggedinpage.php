<?php
	session_start();
	 
	if(array_key_exists("id", $_COOKIE)){
		$_SESSION['id'] = $_COOKIE['id'];
	}
	
	if(array_key_exists("id", $_SESSION)){
		echo "Logged in! <a href='index.html?logout=1'>Log out</a>";
	}
	else{
		header("location:SignInPage.php");
		echo "<script>";
		echo "There was an error trying to sign you in. Try again later.";
		echo "</script>";
	}
?>