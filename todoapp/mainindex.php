<?php include 'header.php';?>
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
 <a href="displayalltasks.php"><button>See Tasks</button></a>
<?php include 'footer.php';?>


