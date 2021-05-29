	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Visit our Showroom</h4>
					<a href="<?php echo URL_ROOT?>/gallery/index.php"><img src="<?php echo URL_ROOT?>/images/show-room.png" alt="Img"></a>
					<p>
						4885 Wilson Street<br> Victorville, CA 92392<br><br> 760-962-9541<br><br> <a href="<?php echo URL_ROOT?>/index.php">info@carvedcreations.com</a>
					</p>
				</div>
				<div>
					<h4>Recent Blog Posts</h4>
					<ul class="posts">
						<li>
							<span class="time">Apr 16</span>
							<p>
								<a href="<?php echo URL_ROOT?>/blog/index.php">The Carving Master &amp; Owner</a> Maybe you’re looking for something diferent, something special.
							</p>
						</li>
						<li>
							<span class="time">Apr 15</span>
							<p>
								<a href="<?php echo URL_ROOT?>/blog/index.php">5 Star Hotels We Supply</a> And we love the challenge of doing something diferent and something special.
							</p>
						</li>
						<li>
							<span class="time">Apr 14</span>
							<p>
								<a href="<?php echo URL_ROOT?>/blog/index.php">How To Pick The Right Furniture For You</a> What’s more, they’re absolutely free! You can do a lot with them.
							</p>
						</li>
					</ul>
				</div>
				<div>
					<form action="process_newsletter.php" class="newsletter" method="post" id="newsletter">
						<h4>Join Our Newsletter</h4>
                        <label for="emailAddr" id="email">Enter Email Address to Sign Up</label>
						<input type="text" name="emailAddr" id="emailAddr" value="">
						<input type="submit" value="Sign up" class="btn2" />
					</form>
					<div id="connect">
						<h4>Social Media</h4>
						<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
					</div>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="<?php echo URL_ROOT?>/index.php">Home</a>
				</li>
				<li>
					<a href="<?php echo URL_ROOT?>/about/index.php">About</a>
				</li>
				<li>
					<a href="<?php echo URL_ROOT?>/gallery/index.php">Gallery</a>
				</li>
				<li>
					<a href="<?php echo URL_ROOT?>/blog/index.php">Blog</a>
				</li>
				<li>
					<a href="<?php echo URL_ROOT?>/contact/index.php">Contact</a>
				</li>
				<li>
					<a href="<?php echo URL_ROOT?>/login/index.php">Login</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2023. All Rights Reserved.
			</p>
		</div>
	</div>
	
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js'></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="../js/newsletter.js"></script>
    <script src="../js/contact.js"></script>
    <script src="../js/blog.js"></script>
    <script src="../js/login.js"></script>
	
</body>
</html>