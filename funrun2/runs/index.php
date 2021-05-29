<?php
	include("../_includes/config.php");
	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

	include(ABSOLUTE_PATH . "/_includes/main_nav.inc.php");
?>

<div class="content">
	<div class="main">

		<h1>Upcoming Runs</h1>
		<hr>

		<!-- Body Content -->
		<h3>Get moving!</h3>
		<p>Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci tation ullamcorper</a> suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
		
		<?php
        
            $dsn = "mysql:dbname=djwillis_funrun_db";
            $username = "djwillis";
            $password = "djwillis";
        
            try {
                $conn = new PDO($dsn, $username, $password);
                
                echo "Connection Success";
            }
        
            catch(PDOException $e) {
                echo "Connection Failed";
                echo $e->getMessage();
            }
        
            $sql = "SELECT * FROM runs ORDER BY startdate ASC";
            $rows = $conn->query($sql);
        
            echo "<table><th>ID</th><th>Name</th><th>Start Date</th><th>End Date</th><th>Price</th><th>Max Registrations</th>";
            foreach($rows as $row) {
                echo "<tr><td>" . $row["id"] . "</td>" . "<td>" . $row["name"] . "</td>" . "<td>" . $row["startdate"] . "</td>" . "<td>" . $row["enddate"] . "</td>" . "<td>" . $row["price"] . "</td>" . "<td>" . $row["maxregistrations"] . "</td></tr>";
            }
            echo "</table>";
        ?>

	</div>
</div>


<?php
	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");
?>