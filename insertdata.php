<?php
//We use prepared stataments to prevent SQL injection attacks
// They are used to execute the same (or similar) SQL statements repeatedly with high efficiency
//We can use named parameters or question marks as placeholders in the SQL query
//if server request method is POST continue else use header function to redirect to mainindex.php
// inside the if statement we hve also a try catch block to handle any exceptions that may occur during the database operations
//if we use named parameters we bind it to the actual user data with the bindParam function hence excecute function is called without any parameters
//bindParam function binds the actual user data to the named parameters in the SQL query
//params are prefixed with a colon (:)
//if we use question marks we pass the actual user data as an array to the execute function
//and the order of values in excecute array MUST match the columns order in the SQL query

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $user_name = $_POST['username'];
    $user_email = $_POST['email'];
    $user_pwsd = $_POST['password'];

    try {
        require_once 'dbconnection.php';
        $sql_query = "INSERT INTO userstable username,pwd,email VALUES (:username,:email,:pwd);";
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