<?php

/* -------- Loops & Iteration ------- */
/*
-loops in php
- for
- while
- do..while
- foreach
they are used to execute a block of code repeatedly until a certain condition is met.


*/

/* ------------ For Loop ------------ */

/*
--it executes a block of code a specified number of times.
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($i = 0; $i <= 10; $i++) {
  echo "Number: $i * 2 <br>";
}

/* ------------ While Loop ------------ */

/*
--it executes a block of code as long as the specified condition is true.
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 1;

while ($x <= 5) {
  echo "Number: $x <br>";
  $x++;
}

/* ---------- Do While Loop --------- */

/*
--it is similar to the while loop, but it will always execute the block of code once, even if the condition is false.
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
echo "<br>";
$x = 1;
do {
  echo "Number: $x <br>";
  $x++;
} while ($x <= 5);

/* ---------- Foreach Loop ---------- */

/*
//foreach is used to iterate over arrays and objects.
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array
//as keyword is used to specify the variable that will 
//hold the value of the current element in the array during each iteration of the loop.

$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $x) {
  echo "Number: $x <br>";
}

// Use the indexes within the loop

$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $post) {
  echo "${index} - ${post} <br>";
}

// Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Manuel',
  'last_name' => 'Ogonda',
  'email' => 'manuog@gmail.com',
];

// Get Keys
foreach ($person as $key => $val) {
  echo "${key} - ${val} <br>";
}