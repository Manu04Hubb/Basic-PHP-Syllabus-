<?php
include_once 'to-dodb.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task = $_POST['task_name'];
    $status = $_POST['status'];
    // Prepare and bind
    $add_query = "INSERT INTO todo_app (task_name,status) VALUES (:task,:status);";
    $stmt = $pdo->prepare($add_query);
    $stmt->bindParam(":task", $task);
    $stmt->bindParam(":status",$status);
    $stmt->execute();
}

header("Location: mainindex.php"); // Redirect back
// header() function is used to send a raw HTTP header to the client
// "Location: mainindex.php" tells the browser to navigate to mainindex.php
// exit; is used to terminate the current script
exit;