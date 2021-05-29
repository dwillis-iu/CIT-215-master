<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP Queries Databases</title>

<style type="text/css">

body
{
	font-family: Arial, Helvetica, sans-serif;
}

div#pageHeader
{
	font-size: 48px;
	border-bottom: solid 2px black;
}

div#wrapper
{
	width: 900px;
	margin: 0 auto;
}

div.exerciseNumber
{
	width: 75px;
	float: left;
	font-size: 48px;
	color: #fff;
}

div.exercise
{
	width: 825px;
	float: right;
}

div.exerciseTitle
{
	color: black;
	font-size: 24px;
	font-weight: bold;
}

div.solution
{
	border: dashed 1px black;
	background-color: #6CF;
	padding: 15px;
	min-height: 5px;
	width: 750px;
}

section
{
	display: inline-block;
	width: 100%;
	margin-bottom: 20px;
	padding: 10px 10px 10px 0;
	border: solid 1px black;
	background-color: #ddd;
}


</style>
</head>

<body>

<div id="wrapper">

<div id="pageHeader">Exercise: PHP Queries Databases</div>

<p>Write the PHP code needed to complete each exercise below.  Your answers should appear in the orange areas.  When finished, save this file and submit it.  <strong>You should also paste a link to the file on the server when submitting your exercise!</strong></p>

<p>Note: You may see some HTML5 tags that you are not familiar with.  Don't worry about those for now, but feel free to view <a href="http://www.w3schools.com/html/html5_new_elements.asp" target="_blank">this summary of new HTML5 elements</a> if you're interested.</p>

<section id="section1">
    <div class="exerciseNumber">
        1
    </div>

    <div class="exercise" id="exercise1">
    	<div class="exerciseTitle">Connect to the Database</div>
    	<p>Using PHP, write the code that connects to the database with the following information</p>
        <p>
        Database: <i>username</i>_world_db<br />
        Username: <i>username</i><br />
        Password: <i>YOUR MYSQL PASSWORD</i> <b>Not your passphrase</b><br />
        Server: localhost<br />
        </p>
        <p>Connect to the database and LEAVE THE CONNECTION OPEN.</p>

        <div class="solution" id="solution1">

				<!--YOUR ANSWER FOR EXERCISE 1 GOES HERE-->
                <!--DON'T FORGET TO PUT IN YOUR PHP TAGS-->


					<?php

						$dsn = "mysql:dbname=djwillis_world_db";
                        $username = "djwillis";
                        $password = "djwillis";

						try {

							$conn = new PDO($dsn, $username, $password);

							echo "Connection success!";

						}
						catch(PDOException $e) {

							echo "Connection failed!";

							echo $e->getMessage();
						}

					?>

        </div>

    </div>
</section>

<section id="section2">
    <div class="exerciseNumber">
        2
    </div>

    <div class="exercise" id="exercise2">
    <div class="exerciseTitle">Query the Database</div>
        <p>Using the supplied World Database schema, write an SQL query that will select all of the countries in the database.</p>

        <p>When the results are returned from the database, use a PHP foreach() loop to write an HTML Unordered List that lists the Name all of the countries returned.  (This will be a long list.)</p>

        <div class="solution" id="solution2">

				<!--YOUR ANSWER FOR EXERCISE 2 GOES HERE-->
                <!--DON'T FORGET TO PUT IN YOUR PHP TAGS-->


					<?php

						$sql = "SELECT * FROM country";

						$rows = $conn->query($sql);
            
                        echo "<ul>";
            
                        foreach ($rows as $row) {
                            echo "<li>" . $row['Name'] . "</li>";
                        }
            
                        echo "</ul>";

					?>

        </div>

    </div>
</section>

<section id="section3">
    <div class="exerciseNumber">
        3
    </div>

    <div class="exercise" id="exercise3">
    <div class="exerciseTitle">Write a Join Query</div>
    	<p>Well, that was a long list.  Comment out your PHP code in Exercise #2 for now.</p>

        <p>Using the database schema, write a query that will collect all of the Cities in the Country of your choice from the list below:
        <ul>
        <li>Canada: CAN</li>
        <li>Greece: GRC</li>
        <li>Italy: ITA</li>
        <li>Thailand: THA</li>
        </ul>
        </p>

        <p>Using a PHP foreach() loop, create an HTML Unordered List that lists all of the Cities from your query.</p>

        <div class="solution" id="solution3">

				<!--YOUR ANSWER FOR EXERCISE 3 GOES HERE-->
                <!--DON'T FORGET TO PUT IN YOUR PHP TAGS-->
                
                <?php

				    $sql = "SELECT * FROM city WHERE CountryCode LIKE 'CAN'";

				    $rows = $conn->query($sql);
            
                    echo "<ul>";
                    foreach ($rows as $row) {
                        echo "<li>" . $row['Name'] . "</li>";
                    }
                    echo "</ul>";

				?>

        </div>

    </div>
</section>

<section id="section4">
    <div class="exerciseNumber">
        4
    </div>

    <div class="exercise" id="exercise4">
    <div class="exerciseTitle">Creating a Dynamic HTML Form</div>
    	<p>Good job!  Now, let's do something useful.</p>

    	<p>Start with your query from Exercise #2 that selects all of the countries.  Update it so that all of the Countries are ordered alphabetically by Name.</p>

    	<p>Then, using a PHP foreach() loop, write an HTML Select tag with an id of "countries" that lists each country as a option in the select.  The VALUE of the option should be the Country's Code.  The string displayed to the user should be the Country's Name.</p>

        <form action="#">
        <div class="solution" id="solution4">

				<!--YOUR ANSWER FOR EXERCISE 4 GOES HERE-->
                <!--DON'T FORGET TO PUT IN YOUR PHP TAGS-->
                
                <?php
            
                    $sql = "SELECT * FROM country ORDER BY Name ASC";
                    $rows = $conn->query($sql);
        
                    echo "<select>";
            
                    foreach($rows as $row) {
                        //echo "<option>" . $row["Name"] . "</option>";
                        echo "<option value='" . $row['Code'] . "'>" . $row["Name"] . "</option>";

                    }
            
                    echo "</select>";
        
                ?>
                            

        </div>
        </form>

    </div>
</section>

<section id="section5">
    <div class="exerciseNumber">
        5
    </div>

    <div class="exercise" id="exercise5">
    <div class="exerciseTitle">Sorting a Query</div>
    	<p>Write the SQL code to answer the following, and provide the answer in an HTML unordered list.</p>

        <p>List all of the cities in Brazil in order of population from largest to smallest.</p>
		
		<p>Display the results in a table.  Each city should have its own table row.  Each row should have two cells that show the City's name in one cell and its population in another.</p>

        <div class="solution" id="solution5">

				<!--YOUR ANSWER FOR EXERCISE 5 GOES HERE-->
                <!--DON'T FORGET TO PUT IN YOUR PHP TAGS-->
                
                <?php
                    $sql = "SELECT * FROM country ORDER BY Population DESC";
                    $rows = $conn->query($sql);
                    
                    echo "<table><th>Name</th><th>Population</th>";
            
                    foreach($rows as $row) {
                        echo "<tr><td>" . $row["Name"] . "</td>" . "<td>" . $row["Population"] . "</td>" . "</td></tr>";
                    }
            
                    echo "</table>";
                ?>

        </div>

    </div>
</section>


</div>

</body>
</html>
