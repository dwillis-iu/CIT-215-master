<?php

	include("../_includes/config.php");

	include(ABSOLUTE_PATH . "/_includes/header.inc.php");
	include(ABSOLUTE_PATH . "/_includes/main_nav.inc.php");

?>

<body>


<?php
	if (isset ($_COOKIE["registrationError"]))
	{
		echo ($_COOKIE["registrationError"]);
		setcookie ("registrationError", "", time()-3600, "/");
	}
?>

<form action="process_registration.php" class="basic-form" method="post" id="basic-form">

<div>
<label for="firstname" id="firstname">* First Name:</label>
<input type="text" name="firstname" id="firstname" />
</div>

<div>
<label for="lastname" id="lastname">* Last Name:</label>
<input type="text" name="lastname" id="lastname" />
</div>

<div>
<label for="email" id="email">* Email Address:</label>
<input type="text" name="email" id="email" />
</div>

<div>
<label for="username" id="username">* Username:</label>
<input type="text" name="username" id="username" />
</div>

<div>
<label for="password" id="password">* Password:</label>
<input type="password" name="password" id="id_password" />
</div>

<div>
<label for="password2" id="password2">* Password Confirmation:</label>
<input type="password" name="password2" id="id_password2" />
</div>

<div>
<input type="submit" name="submitButton" class="button" value="Submit" />
</div>

</form>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js'></script>
<script src="../js/registration.js"></script>


<?php

	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");

?>
