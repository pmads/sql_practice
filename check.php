

<?php
echo '<html><head></head><body>';
#given first name, check if it's in the table
$first = $_POST["first_name"];
$last = $_POST["last_name"];

$servername = "localhost";
$username = "Prajna";
$password = "pra1jna1";
$dbname = "Prajna";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, first_name, last_name FROM Guests WHERE first_name=$first and last_name =$last";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}

#if ($result->num_rows = 0) {
#    echo "Yes! $first $last is in the system!";
#} else {
#    echo "No, $first $last is not in the system. Would you like to make an account?";
#}


$conn->close();

echo '</body></html>';
?>
