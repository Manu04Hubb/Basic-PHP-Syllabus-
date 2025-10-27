<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'manueltaya');
define('DB_PASS', 'manu896');
define('DB_NAME', 'php_dev');
// Connect to a database use these two APIs for vanilla Php
//i.PDO - Php Data Objects[realapplication]
//ii.MySQLi
// Create connection
//
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
// can also use exit() ->That terminates current script with status code or an error message
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}else{
echo 'Connected successfully';
}


/*
-- Can use PDO as well
$hostname = '';
$dbname = '';
$username = '';
$password = '';
$dsn = "pgsql:host=$hostname;dbname=$dbname";
$db = new PDO($dsn, $username, $password);
*/
