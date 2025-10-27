<?php
include 'to-dodb.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE tasks SET status='completed' WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: mainindex.php");
//Why redirecting to mainindex.php?
//Because after updating the task status, we want to go back to the main page to see the updated list of tasks.
// header() function is used to send a raw HTTP header to the client
// "Location: mainindex.php" tells the browser to navigate to mainindex.php
exit;