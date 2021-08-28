<?php
	
	include "Connection.php";
	$atf = $_GET['addtofavourite'];
	
	if(isset($_GET['addtofavourite'])){
		$sql="INSERT INTO favourites(car_name, car_manfct, year) VALUES ('Seltos','Kia','2019')";
		$result=$mysqli->query($sql);
		$row=$result->fetch_assoc();
		echo "HI";
	}
	
?>