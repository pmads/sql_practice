<html>
<body>

<?php
$first = $_POST["first_name"];
$last = $_POST["last_name"];
$servername = "localhost";
$username = "Prajna";
$password = "password";
$dbname = "Prajna";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}



$add = "INSERT INTO Guests(first_name, last_name) values ([$first], [$last])";
$result1 = $conn->query($add);

$conn->close();
?>

Welcome <?php echo $first; ?><br>
Your email address is: <?php echo $_POST["last_name"]; ?>

</body>
</html>
