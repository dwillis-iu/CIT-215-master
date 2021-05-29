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
						<div class="contact">
							<p>
								For Order and Inquiries Please Call: <b>760-962-9541</b> Or you can visit us at: <b>4885 Wilson Street<br> Victorville, CA 92392</b> Or just Email us instead at: <b class="email">info@carvedcreations.com</b>
							</p>
						</div>
					</div>
				</div>
				<div id="main">
					<h1>Contact</h1>
					<p>
						This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.
					</p>
					<form action="process_contact.php" class="basic-form" method="post">
						<label for="name" id="name">Name</label>
						<input type="text" name="name" id="name" value="">
						
						<label for="email" id="email">Email Address</label>
						<input type="text" name="email" id="email" value="">
						
						<label for="phone" id="phone">Contact Number</label>
						<input type="text" name="phone" id="phone" value="">
						
						<label for="message" id="message">Message</label>
						<textarea name="message" id="message"></textarea>
						
						<input type="submit" value="Send Message" class="btn1">
					</form>
				</div>
			</div>
		</div>
	</div>
	
<?php
	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");
?>