<?php
require "connectdb.php";

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$street = $_POST["street"];
$houseno = $_POST["houseno"];
$housenoadd = $_POST["housenoadd"];
$city = $_POST["city"];
$postcode = $_POST["postcode"];
$email = $_POST["email"];

require "ValidationServer.php";

$prepared_statement = $db->prepare("INSERT INTO student (voornaam, achternaam, street, houseno, housenoadd, city, postcode, email) VALUES(:voornaam,:achternaam, :street, :houseno, :housenoadd, :city, :postcode, :email)");


$params = [":voornaam" => $voornaam, ":achternaam" => $achternaam, ":street" => $street, ":houseno" => $houseno, ":housenoadd" => $housenoadd, ":city" => $city, ":postcode" => $postcode, ":email" => $email];

$prepared_statement->execute($params);

/* Redirect browser */
header("Location: index.php");
exit();




