 <?php

echo'<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<p>Guest Database List</p>';

#adding an account
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

echo '<form action = "new.php" method = "get">First Name: <input type="text" name = "first_name"><br><br>
            Last Name; <input type="text" name = "last_name">
            <input type="submit" value = "Submit"></form>';


$conn->close();


echo '
 </body>
</html>';

?>
