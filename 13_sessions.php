<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
    - A session is started with the session_start() function.
    - Session variables are set with the $_SESSION superglobal array.
    - Session variables are available to all pages in one application.
*/

session_start(); // Must be called before accessing any session data
echo "Session status: " . session_status() . "<br>";      // 2 = PHP_SESSION_ACTIVE
echo "Session ID: " . session_id() . "<br>";
echo "Session save path: " . session_save_path() . "<br>";
echo "<pre>SESSION:\n";
print_r($_SESSION);
echo "</pre>";
echo $_SESSION['username'];
echo "<br>";
//To end asession delete all data
session_unset();
//To destroy all sessions registered
session_destroy();
//To delete single data
session_unset($_SESSION['username']);

/*
 --Session Security
 --This ensures that other users and other computers are unable to steal our session data
 --This ensures session id security
 --Common session vulnerability is Session id Sniffing or session id prediction or session fixation or xss
 --Dont store sensitive user info in a session id

*/
ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);
session_set_cookie_params([
  'lifetime'=> 1800,//time after which a cookie expires
  'domain'=> 'localhost',
  'path'=> '/',
  'secure'=> true,
  'httponly'=> true
]);
//Set above info before a session starts
session_start();
//This regenerates a session every 30 min
if (isset($_SESSION['last_regeneration'])) {
  session_regenerate_id(true);
  $_SESSION['last_regeneration'] = time();
} else {
  $interval = 60 * 30;
  if (time() - $_SESSION['last_regeneration'] >= $interval) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
  }
}


if (isset($_POST['submit'])) {
  $username = filter_input(
    INPUT_POST,
    'username',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );
  $password = filter_input(
    INPUT_POST,
    'password',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );

  if ($username == 'Manuel' && $password == 'pass123') {
    // Set Session variable
    $_SESSION['username'] = $username;
    // Redirect user to another page
    header('Location: /xampp/htdocs/Backend/Extras/dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
}
?>

<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>