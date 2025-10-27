<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
// form tag has two main attributes - action and method
// action - the page that will process the form data. If left empty, it will submit
// to the same page.
// method - the HTTP method to use when submitting the form. Can be either GET or POST
// GET - appends the form data to the URL in name/value pairs. Not secure.
// POST - sends the form data as part of the HTTP request body. More secure than GET
/*
-some of the functions that can be used to work with forms are:
    - isset() - Checks if a variable is set and is not NULL
    - empty() - Checks if a variable is empty
    - trim() - Removes whitespace from the beginning and end of a string
    - filter_var() - Filters a variable with a specified filter
    - htmlspecialchars() - Converts special characters to HTML entities to prevent XSS attacks
    - header() - Sends a raw HTTP header to the browser (can be used for redirection)

    input tag has two main attributes - type and name
    type - the type of input field. Can be text, password, submit, etc.
    name - the name of the input field. Used to identify the field when processing the form data
    - the value of name attribute is what is used as the key in the $_GET or $_POST associative array in action file
    - e.g. <input type="text" name="username"> will be accessed as $_GET['username'] or $_POST['username'] depending on the method used

*/ 
if (isset($_POST['submit'])) {
  //echo '<h3>' . $GET['name'] . '</h3>';
  echo '<h3>' . $_POST['name'] . '</h3>';
} ?>

<!-- Pass data through a link 
 to pass data through a link, we append the data to the URL as a query string
 a question mark (?) is used to separate the URL from the query string
 the query string is made up of key/value pairs separated by an ampersand (&)
 
-->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=manu&password=1234">Link</a>


<br><br>

<!-- Pass data through a form 
 - the action attribute is set to the same page using the PHP_SELF superglobal
 - the method attribute is set to POST
 
-->
 

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>