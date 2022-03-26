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
$id = $_POST["id"];

require "ValidationServer.php";

$prepared_statement = $db->prepare("UPDATE student SET voornaam = :voornaam, achternaam = :achternaam, street = :street, houseno = :houseno, housenoadd = :housenoadd, city = :city, postcode = :postcode, email = :email WHERE id = :id");

$params = [":voornaam" => $voornaam, ":achternaam" => $achternaam, ":street" => $street, ":houseno" => $houseno, ":housenoadd" => $housenoadd, ":city" => $city, ":postcode" => $postcode, ":email" => $email, ":id" => $id];

$prepared_statement->execute($params);

/* Redirect browser */
header("Location: index.php");
exit();
