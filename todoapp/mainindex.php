<?php include 'header.php';?>
<?php include 'to-dodb.php';?>
<!-- Add Task Form -->
 <br>
 <br>
<form method="POST" action="addtask.php">
    <input type="text" name="task_name" placeholder="Enter new task" required>
    <button type="submit">Add Task</button>
</form>

<h2>Tasks</h2>
<ul>
<?php
// $conn is the connection object created in to-dodb.php
// query() method is used to execute a SQL query
    $result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
    echo "<li>";
    echo htmlspecialchars($row['task_name']) . " - " . $row['status'];

    if ($row['status'] === 'pending') {
        echo " <a href='updatetask.php?id=" . $row['id'] . "'> Mark Complete</a>";
    }
    echo " <a href='deletetask.php?id=" . $row['id'] . "'> Delete</a>";
    echo "</li>";
    }
?>
</ul>
<?php include 'footer.php';?>


