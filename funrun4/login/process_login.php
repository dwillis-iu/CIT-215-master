<?php

include("../_includes/config.php");

// COLLECT INFORMATION FROM THE FORM
$username = $_POST["username"];
$password = $_POST["password"];

// ENCRYPT PASSWORD (to match the data in the database)
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
// BUILD SQL QUERY TO RETRIEVE DATA

$sql = "SELECT * FROM users WHERE username=:username AND password=:password LIMIT 1";


// EXECUTE QUERY AND RECEIVE RESULTS
$pdoQuery = $conn->prepare($sql);

// BIND THE VALUES OF THE USER TO THE APPROPRIATE FIELDS IN THE DATABASE
$pdoQuery->bindValue(":username", $username, PDO::PARAM_STR);
$pdoQuery->bindValue(":password", $crypted_password, PDO::PARAM_STR);

// EXECUTE THE QUERY
$pdoQuery->execute();

// FETCH THE ROW FROM THE QUERY
$row = $pdoQuery->fetch(PDO::FETCH_ASSOC);

// IF RETURNED VALUE IS AN ARRAY (meaning: we have a user)
if (is_array($row))
{
		// SET A COOKIE THAT CONTAINS THE USER'S ID
		setcookie("userID", $row["id"], 0, "/");

		// REDIRECT THE BROWSER TO success.php
		header( "Location: success.php");
}

// ELSE (a user was not found in the DB)
else
{
		// SET AN ERROR COOKIE
		setcookie("loginError", "Your username or password was invalid.", 0, "/");

		// REDIRECT BROWSER TO index.php
		header( "Location: index.php");
}

?>
