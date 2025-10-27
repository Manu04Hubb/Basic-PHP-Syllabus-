<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  They are built-in functions in PHP
  Can be used to manipulate arrays
  They are found in the PHP manual
  https://www.php.net/manual/en/ref.array.php
  -some of the most commonly used array functions in PHP are:
    - count() - Counts all elements in an array or something in an object
    - in_array() - Checks if a value exists in an array
    - array_push() - Adds one or more elements to the end of an array
    - array_pop() - Removes the last element from an array
    - array_shift() - Removes the first element from an array
    - array_unshift() - Adds one or more elements to the beginning of an array
    - array_chunk() - Splits an array into chunks of new arrays
    - array_merge() - Merges one or more arrays
    - array_combine() - Creates an array by using one array for keys and another for its values
    - array_keys() - Returns all the keys of an array
    - array_flip() - Exchanges all keys with their associated values in an array
    - range() - Creates an array containing a range of elements
    - array_map() - Applies a callback to the elements of the given arrays
    - array_filter() - Filters elements of an array using a callback function
    - array_reduce() - Iteratively reduces the array to a single value using a callback function
    - usort() - Sorts an array by values using a user-defined comparison function
    - sort() - Sorts an array in ascending order
    - rsort() - Sorts an array in descending order
    - asort() - Sorts an array and maintains index association
*/
$myself = ['name' => 'Manu', 'age' => 20, 'height' => 5.9, 'clothes' => ['T-shirt', 'Jeans', 'Jacket']];
var_dump(array_change_key_case($myself, CASE_UPPER)); // Change keys to upper case
echo "<br>";
print_r(array_change_key_case($myself, CASE_LOWER)); // Change keys to lower case
echo "<br>";
print_r(array_chunk($myself, 2)); // Split into chunks of 2
echo "<br>";
$phone = ['Apple', 'Samsung', 'Infinix'];
$companies = ['USA', 'Korea', 'China'];
print_r(array_combine($companies,$phone)); // to make an array 1st in array are keys, 2nd are values
echo "<br>";
/* Arrayfilter - filters elements of an array using a callback function
- it iterates through each element of the array and applies the callback function
parameters: the array to be filtered and the callback function
- it returns a new array containing only the elements that pass the test implemented by the callback function
*/
$ages = [18, 30, 15, 15, 10, 35, 40];
function checkAge($age){
  return $age >= 18;
}
$adults = array_filter($ages, 'checkAge'); // callback function is passed as a string
print_r($adults);
echo "<br>";
// To filter longer strings
$words = ['apple', 'banana', 'orange', 'pear', 'grape', 'kiwi', 'watermelon'];
function checkLength($word){
  return strlen($word) > 4;
}
$longWords = array_filter($words, 'checkLength');
print_r($longWords);
echo "<br>";
/*
Array Map - applies a callback to the elements of the given arrays
- it iterates through each element of the array and applies the callback function
parameters: the array to be mapped and the callback function
- it returns a new array containing the modified elements

*/
$numbers = [1, 2, 3, 4, 5];
function square($number){
  return $number + $number;
}
$squaredNumbers = array_map('square', $numbers); // callback function is passed as a string
var_dump($squaredNumbers);
echo "<br>";
$strings = ['manu', 'john', 'doe'];
function toUpperCase($string){
  return strtoupper($string);
}
$uppercasedStrings = array_map('toUpperCase', $strings); // callback function is passed as a string
var_dump($uppercasedStrings);
echo "<br>";

/*
Differenciate between array_map and array_filter
- array_map modifies all elements in an array
- array_filter filters elements in an array based on a condition
--- But both conditions are based on a callback function
*/ 





$fruits = ['apple', 'banana', 'banana', 'orange', 'pear'];
// Get array length
// accepts only one parameter - the array to be counted
print_r(count($fruits));
echo "<br>";
echo "<br>";

// Search array
// accepts two parameters - the value to search for and the array to search in
echo in_array('banana', $fruits);
// if the value is found, it returns true. If not, it returns false.
// true is represented by 1 and false is represented by an empty string
echo "<br>";
echo in_array('grape', $fruits); // returns false
echo "<br>";

// Add to an array
//params are the array to add to and the value to add
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry','pineapple','Watermelon'); // Can add multiple values
array_unshift($fruits, 'kiwi'); // Adds to the beginning
echo "<br>";
print_r($fruits);
// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);
echo "<br>";
print_r($fruits);
echo "<br>";
// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);
echo "<br>";

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
echo "<br>";
echo "<h3>Using Spread Operator</h3>";
// spread operayor (...) is used to unpack elements from an array
echo "<br>";
$arr4 = [...$arr1, ...$arr2]; // Use Spread
var_dump($arr4);
echo "<br>";
// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
var_dump($c);
echo "<br>";

// Array of keys
$keys = array_keys($c);
var_dump($keys);
echo "<br>";
// Flip keys with values
$flipped = array_flip($c);
var_dump($flipped);
echo "<br>";
// Create array of numbers with range()
 print_r($numbers = range(1, 20));

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number ${number}";
}, $numbers);

// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 10);

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);