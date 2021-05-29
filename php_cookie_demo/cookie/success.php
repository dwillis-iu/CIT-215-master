<?php

	include("../_includes/config.php");

	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

?>


<?php

	// OUTPUT A MESSAGE THAT INCLUDES THE COOKIE INFORMATION HERE

	echo "Your cookie says: <b>" . $_COOKIE['sampleCookie'] . "</b>.";

?>

<?php

	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");

?>
