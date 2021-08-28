<?php
include "Connection.php";
?>

<br>

<?php

$keyword_from_form = $_GET["keyword"];



echo "<h2>Showing List of </h2>";
$sql = "SELECT * FROM car WHERE manfct LIKE '". $keyword_from_form ."' UNION 
SELECT * FROM car WHERE model_name LIKE '". $keyword_from_form ."' UNION 
SELECT * FROM car WHERE price LIKE '". $keyword_from_form ."' UNION 
SELECT * FROM car WHERE color LIKE '%". $keyword_from_form ."%' UNION
SELECT * FROM car WHERE year_of_manfct LIKE '". $keyword_from_form ."'";


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "Model Name: " . $row["model_name"] . " Manufacturer: " . $row["manfct"] . " Price: " . $row["price"] . " Color: " . $row["color"] . " Model Year: " . $row["year_of_manfct"] . "<br>";
  }
} else {
  echo "0 results";
}

$mysqli->close();


?>