<?php

	include("../_includes/config.php");

	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

?>

<body>


<?php
	// DISPLAY THE CONTENTS OF THE ERROR COOKIE (if there is one)

	if (isset ($_COOKIE["loginError"]))
	{

		echo $_COOKIE["loginError"];

		// DELETE THE ERROR COOKIE
		setcookie("loginError", "", time()-3600, "/");

	}



?>

<form action="process_login.php" class="basic-grey" method="post">

<div>
<label for="username" id="usernameLabel">* Username:</label>
<input type="text" name="username" id="username" />
</div>

<div>
<label for="password" id="passwordLabel">* Password:</label>
<input type="password" name="password" id="password" />
</div>

<div>
<input type="submit" name="submitButton" class="button" value="Submit" />
</div>

</form>


<?php

	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");

?>
