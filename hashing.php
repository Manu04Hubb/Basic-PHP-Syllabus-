<?php
//Hashing is used to hide sensitive data
//This is general hashing maybe a string like a name or email
$sensitive_data = "ManuelOgonda";
$salt = bin2hex(random_bytes(16));
$pepper = "somestring";
echo "<br>" . $salt;
$data_to_hash = $sensitive_data . $salt . $pepper;
echo "<br>" . $data_to_hash;
$hash = hash("sha256",$data_to_hash);
echo "<br>" . $hash;


//This is for first Registration ,SignUp
//For password hashing is even simpler with build in php function
/*
 password_hash() does generates the salt and pepper and the algorithm for use
 it accepts in three params 
 A.pwd to be hashed
 B.Alogrithm to be used
 C.Cost factor ussually an array
 --Cost factor increases the time taken to hash
 --It might inconvinience users or Help against attack
*/
/*
There are two most commonly used password algorithms
i)PASSWORD_DEFAULT - Allows changes incase php is updated
ii)PASSWORD_BCRYPT - uses bcrypt algorithm to hash
*/
$pwd = $_POST['password'];

$options = [
  'cost'=> 12
];

$hashed_pwd = password_hash($pwd,PASSWORD_DEFAULT,$options);

//For Login Now
/*
--We use password_verify()
--It accepts in two params i.password used to login ii.The original password used to sign up
--Returns true or false
 */
$loginpwd = $_POST['loginpassword'];

$verified_pwd = password_verify($loginpwd,$hashed_pwd);

if(!$verified_pwd){
 echo "Seems you've forgot your password try again";
}else{
 echo "Passwords are the same proceed";
}