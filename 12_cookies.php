<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. 
  You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
  the setcookie() function is used to set a cookie. It must be called before any output is sent to the browser.
  the syntax for setcookie() is:
    setcookie(name, value, expire, path, domain, secure, httponly);
    - name - The name of the cookie.
    - value - The value of the cookie. This value is stored on the client's computer; do not store sensitive information.
    - expire - The time the cookie expires. This is a Unix timestamp so is in number
        of seconds since the epoch. If set to 0, or omitted, the cookie will expire at the end of the session (when the browser closes).
    - path - The path on the server in which the cookie will be available on. If set to '/', the cookie will be available within the entire domain. 
     If set to '/foo/', the cookie will only be available within the /foo/ directory and all sub-directories such as /foo/bar/ of domain. 
     The default value is the current directory that the cookie is being set in.
    - domain - The (sub)domain that the cookie is available to. To make the cookie available on all subdomains of example.com then you'd set it to '.example.com'. 
     The default value is the host name of the server which generated the cookie.
    - secure - Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client. When set to TRUE, the cookie will only be set if a secure connection exists. 
      The default value is FALSE.
    - httponly - When TRUE the cookie will be made accessible only through the HTTP protocol
    - This means that the cookie won't be accessible by scripting languages, such as JavaScript. This setting can help to reduce identity theft through XSS attacks (although it is not supported by all browsers).

*/

// Since cookies are stored on the client, you shouldn't store sensitive data in them. 
// Sessions are a better choice for storing sensitive data.

// Set a cookie
// this will print true if the cookie is set successfully
// true is represented by 1 and false is represented by an empty string
//echo setcookie('name', 'manu', time() + 86400 * 30); // 86400 = 1 day
//echo "<br>";
//echo time();
echo "<br>";



// Get a cookie
// is still set with the name attribute from forms
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
  echo "<br>";
}
//else {
  //echo 'Cookie is not set';
  //echo "<br>";
//}
// Delete a cookie
// cookie must be deleted by setting the expiration date to an hour ago
setcookie('name', '', time() - 86400);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie sessions</title>
</head>
<body>
    <h1>Cookies</h1>
    <p>Cookies are a mechanism for storing data in the 
        remote browser and thus tracking or identifying return users.
    </p>
    <p>if is set will show the name else will show empty</p>

    <p>to know if cookie is set or not, refresh the page after 
        entering name and clicking set cookie button
    </p>
    <p>to delete cookie, refresh the page again</p>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <input type="submit" value="Set Cookie">
    <input type="text" name="manu" placeholder="Enter name">
    </form>
    
</body>
</html>


