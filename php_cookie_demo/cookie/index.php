<?php

	include("../_includes/config.php");

	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

?>

<body>

<form action="process_cookie.php" class="basic-grey" method="post">

<div>
<label for="cookietext" id="cookietextLabel">* Text for Cookie:</label>
<input type="text" name="cookietext" id="cookietext" />
</div>

<div>
<input type="submit" name="submitButton" class="button" value="Submit" />
</div>

</form>


<?php

	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");

?>
