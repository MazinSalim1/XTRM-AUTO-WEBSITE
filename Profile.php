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