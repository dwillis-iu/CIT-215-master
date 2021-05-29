
	
	<div id="header">
		<div>
			<div id="logo">
				<a href="<?php echo URL_ROOT?>/index.php"><img src="<?php echo URL_ROOT?>/images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected">
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
				
				<?php
                    if (isset ($_COOKIE["userID"])) {
                        echo "<li><a href='";
                        echo URL_ROOT;
                        echo "/admin/index.php'>Admin</a></li>";
                    }
                ?>
			</ul>
		</div>
	</div>