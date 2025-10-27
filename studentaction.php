<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jsonData = $_POST['studentData'];

    if (empty($jsonData)) {
        echo "No student data submitted.";
        exit;
    }

    $students = json_decode($jsonData, true);

    $totalStudents = count($students);
    $sumMarks = 0;
    $highest = null;
    $lowest = null;

    for ($i = 0; $i < $totalStudents; $i++) {
        $marks = $students[$i]['marks'];
        $sumMarks += $marks;

        if ($highest === null || $marks > $highest['marks']) {
            $highest = $students[$i];
        }

        if ($lowest === null || $marks < $lowest['marks']) {
            $lowest = $students[$i];
        }
    }

    $averageMarks = $sumMarks / $totalStudents;
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Student Results Summary</title>
        <style>
            body {
                padding: 20px;
                background-color: white-smoke;
                margin:100px
            }
            h2 {
                color: grey;
            }
            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
            }
            th, td {
                border: 1px solid black;
                padding: 10px;
                text-align: left;
            }
            
            ul {
                list-style-type: square;
                padding-left: 20px;
            }
            .summary {
                margin-top: 30px;
            }
            a {
                display: inline-block;
                margin-top: 20px;
                color: blue;
                text-decoration: none;
            }
        </style>
    </head>
    <body>

        <h2>Student Submission Results</h2>

        <table>
            <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Marks</th>
            </tr>
            <?php for ($i = 0; $i < $totalStudents; $i++): ?>
                <tr>
                    <td><?= htmlspecialchars($students[$i]['name']) ?></td>
                    <td><?= htmlspecialchars($students[$i]['subject']) ?></td>
                    <td><?= htmlspecialchars($students[$i]['marks']) ?></td>
                </tr>
            <?php endfor; ?>
        </table>

        <div class="summary">
            <h3>Summary</h3>
            <ul>
                <li><strong>Total Students:</strong> <?= $totalStudents ?></li>
                <li><strong>Average Marks:</strong> <?= round($averageMarks, 2) ?></li>
                <li><strong>Highest Mark:</strong> <?= $highest['marks'] ?> (<?= htmlspecialchars($highest['name']) ?>)</li>
                <li><strong>Lowest Mark:</strong> <?= $lowest['marks'] ?> (<?= htmlspecialchars($lowest['name']) ?>)</li>
            </ul>
        </div>


    </body>
    </html>

    <?php
}
?>


