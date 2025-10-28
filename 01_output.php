
<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------- Outputting Content ------- */
//Somepasword hashing algorithms use salt to enhance security
$password = "mySuperSecurePassword123";
$options = ['cost' =>12]; //cost is the computational cost
$hashed_password = password_hash($password, PASSWORD_DEFAULT, $options);
echo "Hashed Password: " . $hashed_password;
echo "<br>";
echo "plaintext password: " . $password;
echo "<br>";
echo "<br>";
// Verifying the password
if (password_verify($password, $hashed_password)) { 
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}
echo "<br>";
echo "<br>";
// Echo - Output strings, numbers, html, etc
echo 'Hello World';
echo "<br>";
echo 123;
echo "<br>";
echo '<p>Hello</p>';
echo 'Iam enrolled for web dev sessions at an institution called <a href="https://tsi.ac.ke" target="_blank">TSI</a>';
echo "<br>";
echo '<ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <li>SQL</li>
    </ul>';
//Both echo and print can take multiple parameters, though echo is marginally faster.
//Both \n and <br> are used to create a new line. 
//\n is used in command line interface (CLI) while <br> is used in web pages.    

// print - Similar to echo, but a bit slower
print 'Hello';
echo "<br>";
// print_r - Gives a bit more info. Can be used to print arrays
print_r('Hello');
echo "<br>";
print_r([1, 2, 3]);

// var_dump - Even more info like data type and length
var_dump('Hello');
echo "<br>";
var_dump([1, 2, 3]);
echo "<br>";


// Escaping characters with a backslash
echo "Is your name O\'reilly?";

/* ------------ Comments ------------ */

// This is a single line comment
//how phphworks with http requests
// When a user requests a php page, the server processes the php code and generates html
// The server then sends the html to the user's browser
// The browser then renders the html
// The user never sees the php code, only the html output
// This is why php is called a server side scripting language

/*
      * This is a multi-line comment
      *
      * It can be used to comment out a block of code
      */
// You can also use # for single line comments
// But it is not recommended
//short form for opening php tag is <?=
// It is used to output content
/* Example: <?= 'Hello World' ?>*/

/* ------- PHP in HTML ------- */
// You can use php inside html and html inside php


// If there is more content after the PHP,
// such as this file, you do need the ending tag. Otherwise you do not.
?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My PHP Website</title>
</head>
<body>
  <!-- You can output PHP including variables, etc -->
  <h1>Hello <?php echo 'Manu'; ?></h1>
  <p>Now diving into <?php echo 'Server side programming with PHP'; ?></p>
  <p>Laravel is PHP <?php echo 'framework for building APIs'; ?></p>
  <h1><?php echo 'Wordpress'; ?> is a <abbr title="Content Management Systeme">CMS</abbr> that is Php based</h1>

  <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
  <h1>Hello Php</h1>
    <p>PHP stands for <?= 'Hypertext Preprocessor' ?></p>
    <p>PHP is a <?= 'server side scripting language' ?></p>
    <p>PHP is used to create <?= 'dynamic web pages' ?></p>
    <p>PHP can be embedded into <?= 'HTML' ?></p>
    <p>PHP is <?= 'loosely typed' ?></p>
    
</body>
</html>