

<?php

require_once("../_includes/config.php");

// COLLECT THE VALUES FROM THE FORM
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// MAKE A CONNECTION TO THE DATABASE


// BUILD SQL QUERY TO RETRIEVE DATA


// EXECUTE QUERY AND RECEIVE RESULTS


// IF THE RETURNED ID IS -1 (meaning the record was not inserted)

{
	// SET AN ERROR COOKIE

	// REDIRECT BROWSER TO index.php
}

// ELSE (a record was inserted and an ID was returned from the DB)

{
	// SET A COOKIE THAT CONTAINS THE USER'S ID

	// REDIRECT THE BROWSER TO success.php

}

?>
