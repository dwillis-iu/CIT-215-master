<?php

	include('_includes/config.php');

	include(ABSOLUTE_PATH . '/_includes/header.inc.php');

?>

<div class="basic-grey instructions">
<h1>Details</h1>
<h2>Registration</h2>
<p>This project will allow you discover the functions required to securely write information to a database.</p>

<p>The <b>Registration</b> page includes information about how to validate and sanitize information that will be stored as part of a database record.</p>

<h2>Login</h2>
<p>The <b>Login</b> portion allows you to query the database with a user's inputted username and password and validate that the user's login information matches what is stored.</p>

<p>A completed example can be viewed here: <a href="<?php echo URL_ROOT?>" target="_blank"><?php echo URL_ROOT?></a></p>

</div>


<?php

	include('_includes/footer.inc.php');

?>
