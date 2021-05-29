<?php

	include("../_includes/config.php");

	include(ABSOLUTE_PATH . "/_includes/header.inc.php");
	include(ABSOLUTE_PATH . "/_includes/main_nav.inc.php");

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

<form action="process_login.php" class="basic-form" method="post">

<div>
<label for="username" id="username">* Username:</label>
<input type="text" name="username" id="username" />
</div>

<div>
<label for="password" id="password">* Password:</label>
<input type="password" name="password" id="password" />
</div>

<div>
<input type="submit" name="submitButton" class="button" value="Submit" />
</div>

</form>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js'></script>
<script src="../js/login.js"></script>


<?php

	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");

?>