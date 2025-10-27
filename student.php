<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Student Management Systeme</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
    <div class="student">
        <h1>A Student Management System</h1>
        <form action="studentaction.php" method="POST" id="studentForm">
            <label for="name">Student Name:</label>
            <input type="text" name="name" id="studentName">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subjectChosen">
            <label for="marks">Student Mark:</label>
            <input type="number" name="marks" id="studentMark">
            <div id="buttons">
                <button type="button" id="addStudentBtn">Add Student</button>
                <button type="submit" id="submitStudentBtn">Submit All Students</button>
            </div>
            <br>
            <input type="hidden" name="studentData" id="studentData">
        </form>

        <h3>Students Added:</h3>
        <table id="studentTable">
            <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Marks</th>
            </tr>
        </table>
    </div>
    
   <script src="student.js"></script> 
</body>
</html>