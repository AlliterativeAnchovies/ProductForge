<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "ProductForge";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
else {
	$query = $_POST["Query"];
	$result = $conn->query($query);
	//$result = $conn->query("SELECT * FROM Tenants;");
	$counter = 0;
	echo "var firstname = [];";
	echo "var lastname = [];";
	echo "var price = [];";
	echo "var location = [];";
	echo "var description = [];";
	echo "var accomodation_type = [];";
	echo "var first_time_renter = [];";
	if ($result === false) {
		echo "console.log(".'"'."Invalid Query: ".'"'.$query.");";
	}
	else {
		while ($row = $result->fetch_assoc()) {
			//this goes through every row in the output query
			echo "firstname[".$counter."] = ".'"'.$row["firstname"].'"'.";";
			echo "lastname[".$counter."] = ".'"'.$row["lastname"].'"'.";";
			echo "price[".$counter."] = ".$row["price"].";";
			echo "location[".$counter."] = ".'"'.$row["location"].'"'.";";
			echo "description[".$counter."] = ".'"'.$row["description"].'"'.";";
			echo "accomodation_type[".$counter."] = ".'"'.$row["accomodation_type"].'"'.";";
			echo "first_time_renter[".$counter."] = ".$row["first_time_renter"].";";
			$counter = $counter+1;
		}
	}
}
?>