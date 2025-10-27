<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document counter PHP</title>
</head>
<body>
    <?php
    //exercise 1
    $i = 1;
    for($i = 1; $i <= 5; $i++){
        echo '<font size = "$i">Hello</font>'."<br>";
    }
    echo "<br>";


    //execise 2
    $rows = 4;
    $i = 1;
    echo "<table border='1' cellpadding='10' 
    style='width:600px; border:1px solid black; border-collapse:collapse;'>";
    for($i = 1; $i <= $rows;$i++){
        echo "<tr><td>Row</td></tr>";
    };
    echo "</table>";
    echo "<br>";

    //excercise 3
    $rows = 2;
    $i = 1;
    echo "<table border='1' cellpadding='10' 
    style='width:600px; border:1px solid black; border-collapse:collapse;'>";
    for($i = 1; $i <= $rows; $i++){
        echo "<tr><td>Row $i</td></tr>";
    };
    echo "</table>";
    echo "<br>";


    //excercise 4
    $rows = 6;
    $i = 1;
    echo "<table border='1' cellpadding='10' 
    style='width:600px; border:1px solid black; border-collapse:collapse;'>";
    for($i = 1; $i<=$rows; $i++){
        //$trbgcolor = ($i % 2 ==0) ? "grey" : "white";
        if($i % 2 ===0){
            $trbgcolor = "grey";
        }else{
            $trbgcolor =  "white";
        };
        echo "<tr style='background-color: $trbgcolor;'><td>Row $i</td></tr>";
    };
    echo "</table>";
    echo "<br>";


    //exercise 5
    $rows = 4;
    $cols = 6;
    echo "<table border='1' cellpadding='10' 
    style='width:600px; border:1px solid black; border-collapse:collapse;'>";
    for($i = 1; $i<=$rows; $i++){
        echo "<tr>";
        for($j = 1; $j<=$cols; $j++){
            $tdbgcolor = (($j + $i) % 2 ===0) ? "grey" : "white";
             echo "<td style='border:1px solid black; background-color: $tdbgcolor'>R $i C $j</td>";
        };
        echo "</tr>";
    };
    echo "</table>";
    echo "<table>";

    echo "<p style='color:green; font-size:20px'>You can literally wrtite inline CSS in php</p>";
    echo "<br>";

    echo "<table border='1' style='border-collapse:collapse; width:300px'>";
    echo "<tr><td>Name</td></tr>";
    echo "<tr><td>Manu</td></tr>";
    echo "<tr><td>Age</td></tr>";
    echo "<tr><td>20years</td></tr>";
    echo "<tr><td>Email</td></tr>";
    echo "<tr><td>emodhi@gmail.com</td></tr>";
    echo "<tr><td>Phone Number</td></tr>";
    echo "<tr><td>0711392245</td></tr>";
    echo "</table>";
    echo "<br>";



    ?>

    
</body>
</html>