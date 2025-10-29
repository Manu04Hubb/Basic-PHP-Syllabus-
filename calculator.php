<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="number" name="num1" placeholder="Enter first number">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtr">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="Modulus">%</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number">
        <button>Calculate</button>
    </form>

<!--The PHP Logic Now !-->
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //Grab user input data
        $num1 = filter_input(INPUT_POST,'num1',FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 =  filter_input(INPUT_POST,'num2',FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST['operator']);

        //Error Handlers
        $errors = false;//flag
        if(empty($num1) || empty($num2) || empty($operator)){
            echo "<p>Fill in all fields!</p>";
            $errors = true;
        }
        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "<p>Only numbers required!</p>";
            $errors = true;
        }

        //Calculate numbers if no errors
        if(!$errors){
            $value;
            switch ($operator) {
                case 'add':
                    $value = $num1 + $num2;
                    break;
                case 'subtr':
                    $value = $num1 - $num2;
                    break;
                case 'multiply':
                    $value = $num1 * $num2;
                    break;
                case 'divide':
                    $value = $num1 / $num2;
                    break;
                case 'Modulus':
                    $value = $num1 % $num2;
                    break;
                default:
                    echo "<p>Something went wrong</p>";
            }
            $result = $value;
            echo "<p>The result is: $result</p>";
        }

        
    }
    ?>
</body>
</html>