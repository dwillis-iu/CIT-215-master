<?php
	include("../_includes/config.php");
	include(ABSOLUTE_PATH . "/_includes/header.inc.php");

	include(ABSOLUTE_PATH . "/_includes/main_nav.inc.php");
?>

	<div id="contents">
		<div>
			<div class="body" id="contact">

					<h1>Admin</h1>
					
					<?php
                        // DISPLAY THE CONTENTS OF THE ERROR COOKIE (if there is one)

                        if (isset ($_COOKIE["loginError"]))
                        {

                            echo $_COOKIE["loginError"];

                            // DELETE THE ERROR COOKIE
                            setcookie("loginError", "", time()-3600, "/");

                        }

                    

    
                        $dsn = "mysql:dbname=djwillis_carved_db";
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

                        $sql = "SELECT * FROM contacts ORDER BY id";
                        $rows = $conn->query($sql);

                        echo "<table border=1 width=100%><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Message</th>";

                        foreach($rows as $row) {
                            echo "<tr><td>" . $row["id"] . "</td>" . "<td>" . $row["name"] . "</td>" . "<td>" . $row["email"] . "</td>" . "<td>" . $row["phone"] . "</td>" . "<td>" . $row["message"] . "</td></tr>";

                        }
                        echo "</table>";
    
                    ?>
					
			</div>
		</div>
	</div>
	
<?php
	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");
?>