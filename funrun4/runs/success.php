<?php

	include("../_includes/config.php");

	include(ABSOLUTE_PATH . "/_includes/header.inc.php");
	include(ABSOLUTE_PATH . "/_includes/main_nav.inc.php");

?>

Registration successful!

<?php

	// OUTPUT A MESSAGE THAT INCLUDES THE USER ID NUMBER HERE.

	echo "You sucessfully registered for the race! Your race ID is: <b>" . $_COOKIE["raceid"] .  "</b>.";
	
?>

<?php

	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");

?>
