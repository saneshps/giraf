<?php
// $servername = "localhost";
// $username = "u710565998_girafcreatives";
// $password = "fuy~S[2-wo]h";
// $database = "u710565998_girafcreatives";

$servername = "localhost";
$username = "u710565998_giraf_user";
$password = "fuy~S[2-wo]h";
$database = "u710565998_giraf_common";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
