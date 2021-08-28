<?php

	if(isset($_POST['token'])){
		$token = $_POST['token'];
		
		$resultSet = mysqli_query("SELECT status,token FROM users WHERE status = '0' AND token = '$token' LIMIT 1");
		if(mysqli_num_rows($resultSet) == 1){
			$update = "UPDATE users SET status = 1 WHERE token = '$token' LIMIT 1";
			if($update){
				echo '<script>';
				echo 'alert("Account is verified. You may now login")';
				echo '</script>';
			}
		}else{
			echo '<script>';
			echo 'alert("Account is invalid!")';
			echo '</script>';
		}
	}

?>