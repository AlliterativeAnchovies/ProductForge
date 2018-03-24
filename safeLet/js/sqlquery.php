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
	//$query = $_POST["name"];
	//$result = $conn->query($query);
	$result = $conn->query("SELECT * FROM Tenants;");
	$counter = 0;
	while ($row = $result->fetch_assoc()) {
		//this goes through every row in the output query
		echo "var firstname = [];";
		echo "var firstname[".$counter."] = ".$_row["firstname"].";";
		echo "var lastname = [];";
		echo "var lastname[".$counter."] = ".$_row["lastname"].";";
		echo "var price = [];";
		echo "var price[".$counter."] = ".$_row["price"].";";
		echo "var location = [];";
		echo "var location[".$counter."] = ".$_row["location"].";";
		echo "var description = [];";
		echo "var description[".$counter."] = ".$_row["description"].";";
		echo "var accomodation_type = [];";
		echo "var accomodation_type[".$counter."] = ".$_row["accomodation_type"].";";
		echo "var first_time_renter = [];";
		echo "var first_time_renter[".$counter."] = ".$_row["first_time_renter"].";";
		$counter = $counter+1;
	}
}