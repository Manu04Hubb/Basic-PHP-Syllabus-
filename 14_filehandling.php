<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
    - fopen() - Opens a file
    - fread() - Reads a file
    - fwrite() - Writes to a file
    - fclose() - Closes a file
    - file_get_contents() - Reads the entire file into a string
    - file_put_contents() - Write a string to a file
    - file() - Reads the entire file into an array
    - file_exists() - Checks if a file exists
    - is_readable() - Checks if a file is readable
    - is_writable() - Checks if a file is writable
    - unlink() - Deletes a file
    - rename() - Renames a file
    - copy() - Copies a file
    - pathinfo() - Returns information about a file path
    - realpath() - Returns the absolute path of a file

*/
// 1. Create file and write to it
// reads the file and returns the content as a string on success, or FALSE on failure.
// string length is limited to 2GB in 32 bit systems and 8EB in 64 bit systems.
// die() function prints a message and exits the current script
$filemy = fopen("log.txt", "w") or die("Unable to open file!");
echo fwrite($filemy, "Manuel\nVanja\nGarcia\nTraford");
fclose($filemy);
echo "<br>";
// 2. Write on a file
$filemyn = fopen("log.txt", "a") or die("Unable to open file!");
echo fwrite($filemyn, "\nBaro\nDoe\nSmith");
fclose($filemyn);
echo "<br>";
echo realpath("log.txt");
echo "<br>";
echo file_exists("log.txt") ? "File exists" : "File does not exist";
echo "<br>";
echo file_get_contents("log.txt");
echo "<br>";
echo file("log.txt")[2];
echo "<br>";
echo file_put_contents("log.txt", "\nNew line added with file_put_contents\n", FILE_APPEND);
echo "<br>";
// 3.  Read file
$file = 'log.txt';
 if(file_exists($file)) {
// This checks if the file exists
// filesize() returns the size of the file in bytes.
// it is passed as an argument to fread()  
// Returns the content and number of bytes read from the file on success, or FALSE on failure.
 echo fread(fopen($file, 'r'), filesize($file));
 }
 else {
  echo 'File does not exist';
 }
echo "<br>";
echo fopen($file, 'r');
echo "<br>";
// File Open, Read, Write, Close
//if (file_exists($file)) {
  // fopen() gives you more control over the file.
  // Accepts in two parameters: the [file name] and [the mode.]
  // Modes are arguments that specify the type of access you require to the file.
  // Modes: r, w, a, x, r+, w+, a+, x+ See below for details
  //$handle = fopen($file, 'r');
  // fread() reads the file and returns the content as a string on success, or FALSE on failure.
  //$contents = fread($handle, filesize($file));
  // filesize() returns the size of the file in bytes.
  // A byte is a unit of data stored in computer
  // Bytes are like chacters of text in a file
  // fclose() closes the file resource on success, or FALSE on failure.
  //fclose($handle);
  //echo $contents;
//} else {
  // Create the file
  //$handle = fopen($file, 'w');
  // PHP_EOL is a constant that represents the end of line character.
  //$contents = 'Manuel' .  PHP_EOL . 'Vanja' .  PHP_EOL . 'Garcia' .  PHP_EOL . 'Traford' ;
  // fwrite() writes the contents to the file and 
  //returns the number of bytes written on success, or FALSE on failure.
  // Accepts in two parameters: the [file resource] and [the string to write.]
  // file_put_contents() is an easier way to write to a file.
  // file_put_contents($file, $contents);
  //fwrite($handle, $contents);
  //fclose($handle);
  // fclose accepts in one parameter: the [file resource.]
  // [file resource.] is the variable that holds the file resource returned by fopen().
//}

/*
r	- Open a file for read only. File pointer starts at the beginning of the file
w	- Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	- Creates a new file for write only. Returns FALSE and an error if file already exists
r+ -	Open a file for read/write. File pointer starts at the beginning of the file
w+ -	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ -	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	- Creates a new file for read/write. Returns FALSE and an error if file already exists
*/