 <!DOCTYPE html>
<html>
<body>

<h1>Connection script to a database</h1>

<?php
$servername = $MYSQL_HOST;
$username = $MYSQL_USER;
$password = $MYSQL_PASSWORD;


// Create connection
// $conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 

</body>
</html> 