<?php

	include("../_includes/config.php");

	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

?>



<script type="text/javascript" src="<?php echo URL_ROOT . "/_assets/js/registration.js" ?>"></script>

<body>


<?php
	if (isset ($_COOKIE["error"]))
	{
		echo ($_COOKIE["error"]);
		setcookie ("error", "", time()-3600, "/");
	}
?>

<form action="process_registration.php" class="basic-grey" method="post">

<div>
<label for="firstname" id="firstnameLabel">* First Name:</label>
<input type="text" name="firstname" id="firstname" />
<div id="firstnameError" class="hideError"></div>
</div>

<div>
<label for="lastname" id="lastnameLabel">* Last Name:</label>
<input type="text" name="lastname" id="lastname" />
<div id="lastnameError" class="hideError"></div>
</div>

<div>
<label for="email" id="emailLabel">* Email Address:</label>
<input type="text" name="email" id="email" />
<div id="emailError" class="hideError"></div>
</div>

<div>
<label for="username" id="usernameLabel">* Username:</label>
<input type="text" name="username" id="username" />
<div id="usernameError" class="hideError"></div>
</div>

<div>
<label for="password" id="passwordLabel">* Password:</label>
<input type="password" name="password" id="password" />
<div id="passwordError" class="hideError"></div>
</div>

<div>
<label for="password2" id="password2Label">* Password Confirmation:</label>
<input type="password" name="password2" id="password2" />
<div id="password2Error" class="hideError"></div>
</div>

<div>
<input type="submit" name="submitButton" class="button" value="Submit" />
</div>

</form>


<?php

	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");

?>
