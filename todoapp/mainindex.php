<?php include 'header.php';?>
<?php include 'to-dodb.php';?>
<!-- Add Task Form -->
 <br>
<form method="POST" action="addtask.php">
    <label for="taskname">Task name:</label>
    <input type="text" name="task_name" placeholder="Enter new task" required>
    <br>
    <label for="status">Status</label>
    <select name="status" >
        <option value="complete">complete</option>
        <option value="incomplete">incomplete</option>
        <option value="inprogress">inprogress</option>
    </select>
    <button type="submit">Add Task</button>
</form>

<h2>Tasks</h2>
<ul>
<?php
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


