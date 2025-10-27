<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/
//types of arrays
/*
    - Indexed arrays - Arrays with a numeric index[zero based index]
    - Associative arrays - Arrays with named keys[key-value pairs]
    - Multi-dimensional arrays - Arrays containing one or more arrays
*/
//arrays can hold any type of data including other arrays


/* ------ Indexed Arrays ----- */
// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
$numbers = array(1, 2, 3, 4, 5);

// Outputting values from an array
echo $numbers[0];
echo "<br>";
echo $colors[2];
echo "<br>";
echo $numbers[3] + $numbers[4];
echo "<br>";

// We can use print_r or var_dump to see the contents of an array
var_dump($numbers);
echo "<br>";
print_r($colors);
echo "<br>";
/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

 echo $colors[1];
 echo "<br>";
 var_dump($colors);
echo "<br>";
// Strings as keys
$myelectronics = [
  'tv' => 'Samsung',
  'phone' => 'Infinix',
  'laptop' => 'hp',
];
echo $myelectronics['laptop'];
echo "<br>";
var_dump($myelectronics);
echo "<br>";
/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
  'first_name' => 'Manuel',
  'last_name' => 'Ogonda',
  'email' => 'manuelogonda@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'Manuel',
    'last_name' => 'Ogonda',
    'email' => 'manuelogonda@gmail.com',
  ],
  [
    'first_name' => 'Mikey',
    'last_name' => 'Moe',
    'email' => 'mikeymoe@gmail.com',
  ],
  [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'johndoe@gmail.com'
  ]
];

var_dump($people);
echo "<br>";

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo "<br>";
echo $people[1]['email'];
echo "<br>";

// Encode to JSON
var_dump(json_encode($people));
echo "<br>";

// Decode from JSON
$jsonobj = '{"first_name":"Manuel","last_name": "Ogonda","email":"manuelogonda@gmail.com"}';
var_dump(json_decode($jsonobj));