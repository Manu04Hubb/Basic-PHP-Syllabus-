<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "todoapp";
// Create connection
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Check connection
try{
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   echo "Connected to todo database successfully!";
}catch(PDOException $e){
  echo "Erro : " . $e->getMessage();
}
echo "<br>";

//print_r() function is used to print human-readable information about a variable
echo "<br>";