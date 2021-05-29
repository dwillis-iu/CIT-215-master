<?php
	include("../_includes/config.php");
	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

	include(ABSOLUTE_PATH . "/_includes/main_nav.inc.php");
?>

	<div id="contents">
		<div>
			<div class="body" id="blog">
				<div id="sidebar">
					<div>
						<h5>Featured Blogs</h5>
						<ul class="posts">
							<li>
								<span class="time">Apr 16</span>
								<p>
									<a href="<?php echo URL_ROOT?>/blog/index.html">Tips On Arranging Furniture</a> This website template has been designed by Free Website Templates for you, for free.
								</p>
							</li>
							<li>
								<span class="time">Apr 15</span>
								<p>
									<a href="<?php echo URL_ROOT?>/blog/index.html">How To Maintain Wooden Furniture</a> And we love the challenge of doing something diferent and something special.
								</p>
							</li>
							<li>
								<span class="time">Apr 16</span>
								<p>
									<a href="<?php echo URL_ROOT?>/blog/index.html">The Newest Innovation On Wooden</a> You can replace all this text with your own text. What’s more, they’re absolutely free!
								</p>
							</li>
						</ul>
					</div>
					<div>
						<h5>Blog Categories</h5>
						<ul>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">Carved Creations</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">Furniture</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">Maintenance and Cleaning</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">Innovations</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">Modern And New</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">Classic and Timeless</a>
							</li>
						</ul>
					</div>
					<div>
						<h5>Archives</h5>
						<ul>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">March 2023</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">February 2023</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">January 2023</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">December 2023</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>/blog/index.html">November 2023</a>
							</li>
							<li>
								<a href="<?php echo URL_ROOT?>blog/index.html">October 2023</a>
							</li>
						</ul>
					</div>
					
				    <?php
                    
                        if (isset ($_COOKIE["userID"])) {
                            echo "<div>
                                <h5>Create new blog post</h5>

                                <form action='process_blog.php' class='blog-form' method='post'>
                                    <label for='title' id='title'>* Title:</label><br>
                                    <input type='text' name='title' id='title' /><br><br>

                                    <label for='postbody' id='postbody'>* Post Body:</label><br>
                                    <textarea name='postbody' id='postbody'></textarea><br><br>

                                    <label for='postimage' id='postimage'>* Image:</label><br>
                                    <input type='postimage' name='postimage' id='postimage' value='carving-master.jpg'/><br><br>

                                    <input type='submit' value='Send Message' class='btn1'>
                                </form>
                            </div>";
                        }
                            
                    ?>

				</div>
				<div id="main">
					<div class="viewer">
						<span class="time">Apr 16</span>
						<h3><a href="<?php echo URL_ROOT?>/blog/index.php">CC's Carving Master and Founder</a></h3>
						<p class="info">
							Posted By: <a href="<?php echo URL_ROOT?>/blog/index.php">Admin</a> in <a href="<?php echo URL_ROOT?>/blog/index.php">Production</a>, <a href="<?php echo URL_ROOT?>/index.php">Carved Creations</a>
						</p>
						<div class="frame">
							<img src="<?php echo URL_ROOT?>/images/carving-master.jpg" alt="Img">
						</div>
						<p>
							This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.
						</p>
						<a href="<?php echo URL_ROOT?>/blog/index.php" class="more">Read More</a> <a href="<?php echo URL_ROOT?>/blog/index.php" class="comments">0 Comments</a>
					</div>
					
				            <?php
        
                                $dsn = "mysql:dbname=djwillis_carved_db";
                                $username = "djwillis";
                                $password = "djwillis";

                                try {
                                    $conn = new PDO($dsn, $username, $password);

                                }

                                catch(PDOException $e) {
                                    echo "Connection Failed";
                                    echo $e->getMessage();
                                }

                                $sql = "SELECT * FROM blogposts";
                                $rows = $conn->query($sql);
                                       
                                foreach($rows as $row) {
                                                                        
                                    echo "<div class='viewer'><span class='time'>";
                                    
                                    echo date('M d', strtotime($row["postdate"]));
                                        
                                    echo "</span><h3><a href='<?php echo URL_ROOT?>/blog/index.php'>" . $row["title"] . "</a></h3><p class='info'>Posted By: <a href='";
                                            
                                    echo URL_ROOT;
                                            
                                    echo "/blog/index.php'>Admin</a> in <a href='";
                                    
                                    echo URL_ROOT;
                                    
                                    echo "/index.php'>Carved Creations</a></p><div class='frame'><img src='";
                                    
                                    echo URL_ROOT;
                                    
                                    echo "/images/carving-master.jpg' alt='Img'></div><p>" . $row['postbody'] . "</p><a href='";
                                    
                                    echo URL_ROOT;
                                    
                                    echo "/blog/index.php' class='more'>Read More</a> <a href='<?php echo URL_ROOT?>/blog/index.php' class='comments'>0 Comments</a></div>";
                                }
                            ?>
                    <br><br>
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
	</div>
	
<?php
	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");
?>