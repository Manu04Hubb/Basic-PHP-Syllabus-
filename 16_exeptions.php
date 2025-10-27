<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. 
  An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. 
  Each try must have at least one corresponding catch or finally block.

  functions used to throw exceptions:
    - throw: throws an exception
    - try: defines a block of code to be tested for exceptions
    - catch: defines a block of code to handle the exception
    - finally: defines a block of code to be executed regardless of whether an exception is thrown or not

    inverse() function throws an exception if the argument is 0
    
*/
function inverse($x) {
  if (!$x) {
    throw new Exception('Division by zero.');
  }
  return 1/$x;
}

 //echo inverse(0); // Causes an exception to be thrown and stops script execution

// Handles the exception
// try {
//   echo inverse(5) . ' ';
//   echo inverse(0) . ' '";
// } catch (Exception $e) {
//   echo 'Caught exception: ',  $e->getMessage(), ' ';
// }

// Finally block is executed regardless of whether an exception is thrown or not

try {
  echo inverse(5) . ' ';
  echo "<br>";
} catch (Exception $e) {
  echo "<br>";
  echo 'Caught exception: ',  $e->getMessage(), ' ';
} finally {
  echo 'First finally ';
}
echo "<br>";
try {
  echo inverse(0) . ' ';
    echo "<br>";
} catch (Exception $e) {
    echo "<br>";
  echo 'Caught exception: ',  $e->getMessage(), ' ';
} finally {
    echo "<br>";
  echo "Second finally ";
}

echo "<br>";
echo 'Hello World';