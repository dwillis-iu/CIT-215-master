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
        
            if (isset ($_COOKIE["userID"])) {
                echo "<th>Sign Up</th>";
            }
        
            foreach($rows as $row) {
                echo "<tr><td>" . $row["id"] . "</td>" . "<td>" . $row["name"] . "</td>" . "<td>" . $row["startdate"] . "</td>" . "<td>" . $row["enddate"] . "</td>" . "<td>" . $row["price"] . "</td>" . "<td>" . $row["maxregistrations"] . "</td>";
                
                if (isset ($_COOKIE["userID"])) {
                    echo "<td><a href='";
                    echo URL_ROOT;
                    echo "/runs/process_signup.php?id=";
                    echo $row["id"];
                    echo "'>Sign Up!</a></td>";
                }
                
                echo "</tr>";

            }
            echo "</table>";
        
        
            if (isset ($_COOKIE["userID"])) {

                echo $_COOKIE["userID"];
                
            }
        
        ?>

	</div>
</div>


<?php
	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");
?>
