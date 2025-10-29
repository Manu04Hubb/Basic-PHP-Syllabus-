<?php
//var_dump($_SERVER['REQUEST_METHOD']);
echo "<br>";
if($_SERVER['REQUEST_METHOD'] === 'POST'){

 $firstname = htmlspecialchars($_POST['firstname']);
 $lastname = htmlspecialchars($_POST['lastname']);
 $favouritepet = htmlspecialchars($_POST['favouritepet']);
 echo "<h4>These are the data submitted by the User</h4>";
 echo "<br>";
 var_dump("First Name : $firstname");
 echo "<br>";
 var_dump("Last Name : $lastname");
 echo "<br>";
 echo "Your Favourite Pet :$favouritepet";
 //header("Location: form.html");
}
//else{
   // header("Location: form.html");
//}