<?php
	include("../_includes/config.php");
	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

	include(ABSOLUTE_PATH . "/_includes/main_nav.inc.php");
?>

	<div id="contents">
		<div>
			<div class="body"  id="gallery">
				<ul class="tabs">
					<li class="selected">
						<a href="<?php echo URL_ROOT?>/gallery/index.php">Sofas</a>
					</li>
					<li>
						<a href="<?php echo URL_ROOT?>/gallery/index.php">Tables</a>
					</li>
					<li>
						<a href="<?php echo URL_ROOT?>/gallery/index.php">Chairs</a>
					</li>
				</ul>
				<h1>Living Room</h1>
				<ul class="items">
					<li>
						<div class="frame">
							<img src="<?php echo URL_ROOT?>/images/wood-floor.jpg" alt="Img">
						</div>
						<h5>Treated Oak Flooring with wide Table and Bench</h5>
						<p>
							This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text.
						</p>
						<div class="details">
							<h5>Details</h5>
							<p>
								<b>Measurements:</b> 100" x 150" x 100"
							</p>
							<p>
								<b>Weight:</b> 150 lbs.
							</p>
						</div>
						<span class="price">$623.00</span>
					</li>
					<li>
						<div class="frame">
							<img src="<?php echo URL_ROOT?>/images/sofa.jpg" alt="Img">
						</div>
						<h5>Cushioned Sofa in Cashmere</h5>
						<p>
							You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
						</p>
						<div class="details">
							<h5>Details</h5>
							<p>
								<b>Measurements:</b> 200" x 150" x 200"
							</p>
							<p>
								<b>Weight:</b> 250 lbs.
							</p>
						</div>
						<span class="price">$870.00</span>
					</li>
				</ul>
				<div id="pagination">
					<a href="<?php echo URL_ROOT?>/gallery/index.php" class="previous">Previous</a>
					<a href="<?php echo URL_ROOT?>/gallery/index.php" class="next">Next</a>
					<ul>
						<li>
							Pages:
						</li>
						<li class="selected">
							<a href="<?php echo URL_ROOT?>/gallery/index.php">1</a>
						</li>
						<li>
							<a href="<?php echo URL_ROOT?>/gallery/index.php">2</a>
						</li>
						<li>
							<a href="<?php echo URL_ROOT?>/gallery/index.php">3</a>
						</li>
						<li>
							<a href="<?php echo URL_ROOT?>/gallery/index.php">4</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
<?php
	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");
?>