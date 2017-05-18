 <?php
echo'<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<p>Hello World!</p>';

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


#$add = "INSERT INTO MyGuests (firstname, lastname, id) values ('aaa', 'bbb',3)";
#$result1 = $conn->query($add);

$sql = "SELECT id, first_name, last_name FROM Guests";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();


echo '
 </body>
</html>';

?>
