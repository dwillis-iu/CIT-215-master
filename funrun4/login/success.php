<?php

	include("../_includes/config.php");

	include(ABSOLUTE_PATH . "/_includes/header.inc.php");
	include(ABSOLUTE_PATH . "/_includes/main_nav.inc.php");

?>

Login successful!

<?php

	// OUTPUT A MESSAGE THAT INCLUDES THE USER ID NUMBER HERE.

	echo "Your user ID is: <b>" . $_COOKIE["userID"] .  "</b>.";

?>

<?php

	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");

?>
