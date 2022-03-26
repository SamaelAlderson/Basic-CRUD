<?php

require "connectdb.php";

$prepared_statement = $db->prepare("DELETE FROM student WHERE id = :id");

$id = empty($_GET["id"]) ? null : $_GET["id"];

$params = [":id" => $id];

$prepared_statement->execute($params);

/* Redirect browser */
header("Location: index.php");
exit();
