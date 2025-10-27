<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to[value only]
  === Identical to[same value and type]
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

if ($age >= 18) {
  echo 'You are old enough to vote!';
} else {
  echo 'Sorry, you are too young to vote.';
}
echo "<br>";
echo $age < 18 ? 'You are old enough to vote!' :  'Sorry, you are too young to vote.';
echo "<br>";
// Dates
// $today = date("F j, Y, g:i a");
//date() function returns the current date and time
//F - A full textual representation of a month, such as January or March
//j - Day of the month without leading zeros
//Y - A full numeric representation of a year, 4 digits
//g - 12-hour format of an hour without leading zeros
//i - Minutes with leading zeros
//a - Lowercase Ante meridiem and Post meridiem (am or pm)
//H - 24-hour format of an hour with leading zeros
echo date("Y/m/d") . "<br>";
echo date("Y.m.d") . "<br>";
echo date("Y-m-d") . "<br>";
echo date("l") . "<br>"; //Day of the week

$t = date('H');

if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}
echo "<br>";
// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. 
//The empty() function will not generate any warning or e-notice when the variable does not exists.

$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo 'There are no posts';
}
echo "<br>";
/* -------- Ternary Operator[?] -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
// Thisis ternary operator
// It accepts three operands
// The first operand is a condition to be evaluated
// The second operand is the value to be returned if the condition is true
// The third operand is the value to be returned if the condition is false
// If condition is true, it returns the first value, if false, it returns the second value
echo !empty($posts[0]) ? $posts[0] : 'There are no posts';

// Assign a variable based on a condition
$firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts';

$firstPost = !empty($posts[0]) ? $posts[0] : null;

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
$firstPost = $posts[0] ?? null;

var_dump($firstPost);

/* -------- Switch Statements ------- */
//Declare a variable
// Set a variable
// Compare the variable to different cases
// Execute the code block where there is a match
//break keyword to prevent the code from running into the next case
//default case if no match is found
// No need for break in default case as it is the last case
//case keywords should be followed by a value and a colon(:) not a semi-colon(;)

echo "<br>";
$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}