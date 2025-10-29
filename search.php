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
    <h3>Search Results</h3>
    <?php
    if(empty($results)){
     echo "<div>";
     echo "<p>There were no results</p>";
     echo "</div>";
    }else{
        //var_dump($results);//Displays an associative multi-dimentional array
        foreach($result as $result){
          echo "<h2>" . htmlspecialchars($result["username"]) . "</h2>";//actual column name in db table
          echo "<p>" .htmlspecialchars($result["email"]). "</p>";
          echo "<p>" .htmlspecialchars($result["password"]). "</p>";
        }
    }
    /*
    --To outputdata in the browser we must Sanitize
    --This protects from XSS[Cross Site Scripting]
    */
    ?>
</body>
</html>