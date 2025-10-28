<?php
//We use select mainly while searching or retrieving data from the database
// Common use case creating a search system where users can search for specific records
// based on certain criteria
//Similar to insert, update and delete we use prepared statements to prevent SQL injection attacks

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $user_search = $_POST['searchname'];
   

    try {
        require_once 'dbconnection.php';
        $sql_query = "SELECT * FROM users_talbe WHERE username = :usersearch;";

        $stmt = $pdo->prepare($sql_query);

        $stmt->bindParam(':usersearch', $user_search);

        $results->$stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt->execute();
        $pdo = null; // Close the database connection
        $stmt = null; // Close the statement
        die();//use die whenever there is an SQL connection to prevent further execution of the script
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method="post">
    <label for="search">Search User by Username:</label>
    <input type="text" id="search" name="searchname" required>
    <input type="submit" value="Search">
    </form>
    
</body>
</html>