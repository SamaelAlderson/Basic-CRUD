<?php
/* Make the connection string for MYSQL */

$host = 'localhost';
$dbname = 'basiccrud';
$username = 'root';
$password= '';

/* Make the database connection */

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);