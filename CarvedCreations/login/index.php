<?php
	include("../_includes/config.php");
	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

	include(ABSOLUTE_PATH . "/_includes/main_nav.inc.php");
?>

	<div id="contents">
		<div>
			<div class="body" id="contact">
				<div id="sidebar">
					<div class="body">
						<img src="<?php echo URL_ROOT?>/images/chair-small.png" alt="Img">
						<div class="Login">
							<p>
								Please log in with the form!
							</p>
						</div>
					</div>
				</div>
				<div id="main">
					<h1>Login</h1>
					<p>
						This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.
					</p>
					
					<?php
                        // DISPLAY THE CONTENTS OF THE ERROR COOKIE (if there is one)

                        if (isset ($_COOKIE["loginError"]))
                        {

                            echo $_COOKIE["loginError"];

                            // DELETE THE ERROR COOKIE
                            setcookie("loginError", "", time()-3600, "/");

                        }
                    ?>
                    
					<form action="process_login.php" class="login-form" method="post">
						<label for="username" id="username">* Username:</label>
                        <input type="text" name="username" id="username" />
						
                        <label for="password" id="password">* Password:</label>
                        <input type="password" name="password" id="password" />
						
						<input type="submit" value="Send Message" class="btn1">
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js'></script>
    <script src="../js/login.js"></script>
	
<?php
	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");
?>