<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  - They are built-in functions in PHP
  - Can be used to manipulate strings
    - They are found in the PHP manual
  https://www.php.net/manual/en/ref.strings.php
    - Some of the most commonly used string functions in PHP are:
        - strlen() - Returns the length of a string
        - strpos() - Finds the position of the first occurrence of a substring in a string
        - strrpos() - Finds the position of the last occurrence of a substring in a string
        - strrev() - Reverses a string
        - strtolower() - Converts all characters in a string to lowercase
        - strtoupper() - Converts all characters in a string to uppercase
        - ucwords() - Uppercase the first character of each word in a string
        - str_replace() - Replaces all occurrences of a search string with a replacement string
        - substr() - Returns a portion of a string specified by the offset and length
        - str_starts_with() - Checks if a string starts with a given substring (PHP 8+)
        - str_ends_with() - Checks if a string ends with a given substring (PHP 8+)
        - printf() - Outputs a formatted string
        - htmlspecialchars() - Converts special characters to HTML entities
*/

$string = 'Hello World';
//To split a string use str_split()
print_r(str_split($string));
echo "<br>";
// Get the length of a string
// accepts one parameter - the string to be measured
// spaces are counted as characters
// returns an integer
echo strlen($string);
echo "<br>";
// Find the position of the first occurrence of a substring in a string
// Counts from 0
// accepts two parameters - the substring to search for and the string to search in
// A substring is portion of the main string
// returns an integer (position of the first occurrence) or false if not found
echo strpos($string, 'o');
echo "<br>";
// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');
echo "<br>";
// Reverse a string
echo strrev($string);
echo "<br>";
// Convert all characters to lowercase
echo strtolower($string);
echo "<br>";
// Convert all characters to uppercase
echo strtoupper($string);
echo "<br>";
// Uppercase the first character of each word
echo ucwords($string);
echo "<br>";  
// String replace
// accepts three parameters - the search string, the replacement string, and the string to search and replace in
// returns the modified string
echo str_replace('World', 'Everyone', $string);
echo "<br>"; 
// Return portion of a string specified by the offset and length
// accepts three parameters - the string, the starting position (offset), and the length (optional)
// if length is not provided, it returns the rest of the string from the offset
echo substr($string, 0, 5);
echo "<br>"; 
echo substr($string, 5);
echo "<br>"; 
// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}else{
  echo 'NO';
}
echo "<br>"; 
// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}
echo "<br>"; 
// HTML special characters
// converts special characters to HTML entities
// helps prevent XSS attacks
// e.g. <, >, &, ' and " are converted to &lt;, &gt;, &amp;, &#39; and &quot; respectively
// useful when you want to display user input on a webpage
$string2 = '<script>alert("hello")</script>';
$string2 = '<h1>Hello World</h1>';
echo htmlspecialchars($string2);
echo "<br>"; 
// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Manu', 'nice guy');
echo "<br>"; 
printf('1 + 1 = %f', 1 + 1); // float