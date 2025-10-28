<?php
//Delete is used when we want to remove a record from the database
//We use update to modify existing records
// in real website we will update a user id from the session variable
//Similar to update, we use prepared statements to prevent SQL injection attacks
//i)update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $user_name = $_POST['username'];
    $user_email = $_POST['email'];
    $user_pwsd = $_POST['password'];

    try {
        require_once 'dbconnection.php';
        // Assuming we have a user ID to update, for example from a hidden form field
        $sql_query = "UPDATE userstable SET username=:username, email=:email, pwd=:pwd WHERE id=:id;";

        $stmt = $pdo->prepare($sql_query);

        $stmt->bindParam(':username', $user_name);
        $stmt->bindParam(':email', $user_email);
        $stmt->bindParam(':pwd', $user_pwsd);
        
        $stmt->execute();
        $pdo = null; // Close the database connection
        $stmt = null; // Close the statement
        header("Location: mainindex.php");//redirect to mainindex.php after successful insertion
        die();//use die whenever there is an SQL connection to prevent further execution of the script
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}


//ii) delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $user_name = $_POST['username'];
    $user_pwsd = $_POST['password'];

    try {
        require_once 'dbconnection.php';
        // Assuming we have a user ID to update, for example from a hidden form field
        $sql_query = "DELETE FROM userstable WHERE username=:username AND pwd=:pwd;";

        $stmt = $pdo->prepare($sql_query);

        $stmt->bindParam(':username', $user_name);
        $stmt->bindParam(':pwd', $user_pwsd);

        $stmt->execute();

        $pdo = null; // Close the database connection
        $stmt = null; // Close the statement
        header("Location: mainindex.php");//redirect to mainindex.php after successful insertion
        die();//use die whenever there is an SQL connection to prevent further execution of the script
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
