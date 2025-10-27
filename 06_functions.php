<?php
/* ------------ Functions ----------- */
/*
    Functions are reusable blocks of code that can be called anywhere in your script.
    -function types in php
    - Built-in functions - Functions that are already defined in php
    - User-defined functions - Functions that you define yourself
    - Anonymous functions - Functions that have no name. Often used for closures and callback functions
    - Arrow functions - A shorthand syntax for anonymous functions. Introduced in php 7.4
    -

*/

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
  - local scope means that variables defined inside a function cannot be accessed outside the function
  - global scope means that variables defined outside a function can be accessed anywhere in the script

    - To access a global variable inside a function, use the [global] keyword preceding the variable name
    - Alternatively, you can use the $GLOBALS array to access global variables inside a function
*/

function registerUser()
{
  echo 'User has been registered!';
}
/*
- to define a function, use the function keyword followed by the function name and parentheses.
- Function names follow the same rules as variable names.
- to call a function, use the function name followed by parentheses.

*/
// Running a function
registerUser();
echo "<br>";

// Adding params
/*
- Parameters are variables that are passed to a function when it is called.
- You can add as many parameters as you want, just separate them with a comma.
- You can also add default values to parameters. If a parameter 
-is not passed when the function is called, the default value will be used.
*/
function registerUser2($username)
{
  echo "User ${username} has been registered!";
}

// Pass in an argument while calling the function
registerUser2('Manu');

// Returning values
/*
- to return a value from a function, use the return keyword followed by the value you want to return.
- once a return statement is executed, the function will stop executing and return the value.
- Return keyword ends the function execution.

*/
echo "<br>";
function add($num1, $num2)
{
  return $num1 + $num2;
}
// Store the returned value in a variable
$sum = add(5, 5);
echo $sum;

// Adding default values as params
echo "<br>";
// If no arguments are passed, the default values will be used
// else the passed values will be used
// arguments make the function more flexible

function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo subtract();
echo "<br>";
echo subtract(20, 10);
echo "<br>";

// Assigning anonymous functions to variables. Often used for closures and callback functions
// Anonymous functions are functions that have no name
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $add(5, 5);
echo "<br>";

// Arrow functions
// Arrow functions are a shorthand syntax for anonymous functions. Introduced in php 7.4
// Arrow functions have an implicit return. No need to use the return keyword
// Arrow functions use the fn keyword
// Arrow functions can only have a single expression. No need for curly braces {}
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);