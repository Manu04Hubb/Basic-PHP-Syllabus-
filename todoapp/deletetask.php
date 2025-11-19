<?php
include 'to-dodb.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete_task') {
    $id = $_POST['id'];

    $sql = "DELETE FROM todo_app WHERE id =:id";
  
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
header("Location: mainindex.php");
exit;