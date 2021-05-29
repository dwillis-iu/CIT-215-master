<?php

include("../_includes/config.php");

// COLLECT THE VALUES FROM THE FORM
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

// MAKE A CONNECTION TO THE DATABASE
$dsn = "mysql:dbname=djwillis_carved_db";
$DBusername = "djwillis";
$DBpassword = "djwillis";

try {

	$conn = new PDO($dsn, $DBusername, $DBpassword);

}
catch(PDOException $e) {

}

// BUILD SQL QUERY TO INSERT DATA
$sql = "INSERT INTO contacts (name, email, phone, message) VALUES (:name, :email, :phone, :message)";

// PREPARE THE QUERY
$pdoQuery = $conn->prepare($sql);

// BIND THE VALUES OF THE USER TO THE APPROPRIATE FIELDS IN THE DATABASE
$pdoQuery->bindValue(":name", $name, PDO::PARAM_STR);

$pdoQuery->bindValue(":email", $email, PDO::PARAM_STR);

$pdoQuery->bindValue(":phone", $phone, PDO::PARAM_STR);

$pdoQuery->bindValue(":message", $message, PDO::PARAM_STR);

// EXECUTE THE QUERY
$pdoQuery->execute();

// REDIRECT BROWSER TO index.php
header( "Location: index.php");

?>