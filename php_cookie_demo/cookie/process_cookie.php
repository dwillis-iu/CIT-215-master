

<?php

require_once("../_includes/config.php");

// COLLECT VALUES FROM THE FORM
$cookietext = $_POST["cookietext"];

// SET A COOKIE WITH THE VALUE FROM THE FORM FIELD

setcookie("sampleCookie", $cookietext, 0, "/");

// REDIRECT THE USER TO THE success.php PAGE

header( "Location: success.php");

?>
