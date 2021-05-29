<?php

include("../_includes/config.php");

// COLLECT INFORMATION FROM THE FORM
$userid = $_COOKIE["userID"];
$postdate = date('Y-m-d H:i:s');
$title = $_POST["title"];
$postbody = $_POST["postbody"];
$postimage = $_POST["postimage"];

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
$sql = "INSERT INTO blogposts (userid, postdate, title, postbody, postimage) VALUES (:userid, :postdate, :title, :postbody, :postimage)";

// PREPARE THE QUERY
$pdoQuery = $conn->prepare($sql);

// BIND THE VALUES OF THE USER TO THE APPROPRIATE FIELDS IN THE DATABASE
$pdoQuery->bindValue(":userid", $userid, PDO::PARAM_STR);

$pdoQuery->bindValue(":postdate", $postdate, PDO::PARAM_STR);

$pdoQuery->bindValue(":title", $title, PDO::PARAM_STR);

$pdoQuery->bindValue(":postbody", $postbody, PDO::PARAM_STR);

$pdoQuery->bindValue(":postimage", $postimage, PDO::PARAM_STR);

// EXECUTE THE QUERY
$pdoQuery->execute();

// GET THE LAST INSERTED ID - this is the ID of the new user

$userID = $conn->lastInsertId();

// REDIRECT BROWSER TO index.php
header( "Location: index.php");

?>
