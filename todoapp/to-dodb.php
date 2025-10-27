<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "todo_app";
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// -> This is an object operator.Often used with classes and objects
// It is used to access methods and properties of an object.
// Here, it is used to access the connect_error property of the $conn object.
// connect_error property returns the error description from the last connection error, if any.
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "Connected successfully!";
}
echo "<br>";
//$conn is an object of the mysqli class
// new mysqli() is a constructor that creates a new instance of the mysqli class
// It takes four parameters: host, user, password, and dbname
//print_r() function is used to print human-readable information about a variable
print_r($conn);
echo "<br>";