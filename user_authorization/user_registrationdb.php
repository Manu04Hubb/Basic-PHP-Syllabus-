<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "user_authentication_db";



$mysqli = new mysqli($DB_HOST,$DB_USER,"",$DB_NAME);
//$mysqli->set_charset('utf8mb4');