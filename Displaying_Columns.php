<?php
$sql = "SELECT * FROM car";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "Model Name: " . $row["model_name"]. "Manufacturer: " . $row["manfct"]. "Price: " . $row["price"]. "Color: " . $row["color"]. "Model Year: " . $row["year_of_manfct"]. "<br>";
  }
} else {
  echo "0 results";
}
?>