<?php
include 'to-dodb.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task = $_POST['task_name'];
    // Prepare and bind
// (?) means a placeholder for a parameter that will be bound later
// "s" means the parameter is a string
// "i" means the parameter is an integer
// "d" means the parameter is a double

    $sql = "INSERT INTO tasks (task_name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $task);
    $stmt->execute();
}

header("Location: mainindex.php"); // Redirect back
// header() function is used to send a raw HTTP header to the client
// "Location: mainindex.php" tells the browser to navigate to mainindex.php
// exit; is used to terminate the current script
exit;