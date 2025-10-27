<?php
include 'to-dodb.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id=?";
    // why id=?
    // The question mark (?) is a placeholder for a parameter that will be bound later.
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
}
header("Location: mainindex.php");
exit;