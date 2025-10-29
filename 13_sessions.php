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
//To end asession
session_unset();

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