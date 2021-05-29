<?php

require_once("../_includes/config.php");

// COLLECT THE VALUES FROM THE FORM
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


// ENCRYPT PASSWORD (to securely store in the database)
$crypted_password = crypt($password, "21500");


// MAKE A CONNECTION TO THE DATABASE
$dsn = "mysql:dbname=djwillis_funrun_db";
$DBusername = "djwillis";
$DBpassword = "djwillis";

try {

	$conn = new PDO($dsn, $DBusername, $DBpassword);

}
catch(PDOException $e) {

}

// BUILD SQL QUERY TO INSERT DATA
$sql = "INSERT INTO users (firstname, lastname, username, email, password) VALUES (:firstname, :lastname, :username, :email, :password)";

// PREPARE THE QUERY
$pdoQuery = $conn->prepare($sql);

// BIND THE VALUES OF THE USER TO THE APPROPRIATE FIELDS IN THE DATABASE
$pdoQuery->bindValue(":firstname", $firstname, PDO::PARAM_STR);

		$pdoQuery->bindValue(":lastname", $lastname, PDO::PARAM_STR);

		$pdoQuery->bindValue(":username", $username, PDO::PARAM_STR);

		$pdoQuery->bindValue(":email", $email, PDO::PARAM_STR);

		$pdoQuery->bindValue(":password", $crypted_password, PDO::PARAM_STR);

// EXECUTE THE QUERY
$pdoQuery->execute();

// GET THE LAST INSERTED ID - this is the ID of the new user

$userID = $conn->lastInsertId();

// IF THE RETURNED ID IS > 0 (meaning: we inserted a user record)
if ($userID > 0)
{
	// SET A COOKIE THAT CONTAINS THE USER'S ID
	setcookie("userID", $userID, 0, "/");

	// REDIRECT THE BROWSER TO success.php
	header( "Location: success.php");
}

// ELSE (an error occurred while creating the record)
else
{

		// SET AN ERROR COOKIE
		setcookie("registrationError", "Your registration failed. Please try again.", 0, "/");

		// REDIRECT BROWSER TO index.php
		header( "Location: index.php");
}

?>
