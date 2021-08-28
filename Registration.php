<?php
	include "config.php";
	
	if(isset($_POST["signup"])) {
	  $email = mysqli_real_escape_string($conn, $_POST["email"]);
	  $username = mysqli_real_escape_string($conn, $_POST["username"]);
	  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
	  $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));
 	  $phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
	  $token = md5(rand());	
	  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'"));

	  if ($password !== $cpassword){
		 echo ("<script>
			window.alert('Passwords did not match.');
			window.location.href='CreateAccountPage.php';
			</script>");
	  }else if($check_email > 0){
	 	  echo ("<script>
			window.alert('An account with this Email Address already exists.');
			window.location.href='CreateAccountPage.php';
			</script>");
	  }else{
		$sql = "INSERT INTO users (email, username, password, phone_number, token, status) VALUES ('$email', '$username', '$password', '$phone_number', '$token', '0')";
		$result = mysqli_query($conn, $sql);
		if ($result){
			$_POST["email"] = "";
			$_POST["username"] = "";
			$_POST["password"] = "";
			$_POST["cpassword"] = "";
			$_POST["phone_number"] = "";
			
			echo "<script>
			alert('User registered successfully.');
			window.location.href = 'SignInPage.php';
			</script>";
			
		}else{
		  echo ("<script>
			window.alert('User registration Failed.');
			window.location.href='CreateAccountPage.php';
			</script>");
		}
	  }
	}
?>	