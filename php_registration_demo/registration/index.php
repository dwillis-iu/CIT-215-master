<?php

	include("../_includes/config.php");

	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

?>



<script type="text/javascript" src="<?php echo URL_ROOT . "/_assets/js/registration.js" ?>"></script>

<body>


<?php
	if (isset ($_COOKIE["registrationError"]))
	{
		echo ($_COOKIE["registrationError"]);
		setcookie ("registrationError", "", time()-3600, "/");
	}
?>

<form action="process_registration.php" class="basic-grey" method="post">

<div>
<label for="firstname" id="firstnameLabel">* First Name:</label>
<input type="text" name="firstname" id="firstname" />
</div>

<div>
<label for="lastname" id="lastnameLabel">* Last Name:</label>
<input type="text" name="lastname" id="lastname" />
</div>

<div>
<label for="email" id="emailLabel">* Email Address:</label>
<input type="text" name="email" id="email" />
</div>

<div>
<label for="username" id="usernameLabel">* Username:</label>
<input type="text" name="username" id="username" />
</div>

<div>
<label for="password" id="passwordLabel">* Password:</label>
<input type="password" name="password" id="password" />
</div>

<div>
<label for="password2" id="password2Label">* Password Confirmation:</label>
<input type="password" name="password2" id="password2" />
</div>

<div>
<input type="submit" name="submitButton" class="button" value="Submit" />
</div>

</form>


<?php

	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");

?>
