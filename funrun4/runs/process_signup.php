<?php

include("../_includes/config.php");

// COLLECT THE VALUES FROM THE FORM
$id = $_GET["id"];
$userid = $_COOKIE["userID"];
$raceid = $_GET["id"];
$registrationdate = date('Y-m-d H:i:s');

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
$sql = "INSERT INTO signups (id, userid, raceid, registrationdate) VALUES (:id, :userid, :raceid, :registrationdate)";

// PREPARE THE QUERY
$pdoQuery = $conn->prepare($sql);

// BIND THE VALUES OF THE USER TO THE APPROPRIATE FIELDS IN THE DATABASE
$pdoQuery->bindValue(":id", $id, PDO::PARAM_STR);

$pdoQuery->bindValue(":userid", $userid, PDO::PARAM_STR);

$pdoQuery->bindValue(":raceid", $raceid, PDO::PARAM_STR);

$pdoQuery->bindValue(":registrationdate", $registrationdate, PDO::PARAM_STR);

// EXECUTE THE QUERY
$pdoQuery->execute();

// GET THE LAST INSERTED ID - this is the ID of the new user

$userID = $conn->lastInsertId();

// IF THE RETURNED ID IS > 0 (meaning: we inserted a user record)
if ($raceid > 0)
{
	// SET A COOKIE THAT CONTAINS THE USER'S ID
	setcookie("raceid", $raceid, 0, "/");

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
