<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $ [dollar sign]
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Manu'; // String // Can be single or double quotes
// Double quotes alllow for string concatenation and variable parsing
$age = 20; // Integer
$hasKids = false; // Boolean
$height = 5.9; //Float
$clothes = ['T-shirt', 'Jeans', 'Jacket']; //Array
$address = null; //NULL

var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($hasKids);
echo "<br>";
var_dump($height);
echo "<br>";
var_dump($clothes);
echo "<br>";
var_dump($address);
echo "<br>";
/* --- Adding variables to strings -- */

// Double quotes can be used to add variables to strings
echo "My name is $name i'm $age years old";
echo "<br>";
// Single quotes will not parse variables

// Better to do this
echo "${name} is ${age} years old";

// Concatenate Strings
//use the dot operator to concatenate strings[period(.)]

echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';
echo "<br>";

// Arithmetic Operators

echo 5 + 5;
echo "<br>";
echo 10 - 6;
echo "<br>";
echo 5 * 10;
echo "<br>";
echo 10 / 2;
echo "<br>";

// Constants - Cannot be changed
// Convention to use uppercase letters
// Use define() function to create a constant
//mostly used to store configuration values like database credentials
define('PI', 3.14);
define('HOST', 'localhost');
define('USER', 'root');
var_dump(HOST);