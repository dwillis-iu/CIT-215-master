<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>STARTER CODE: Assignment: Conference Registration (jQuery and Form)</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  
<!-- This code comes from:
http://callmenick.com/post/slide-down-menu-with-jquery-and-css -->

<nav>
    <ul>
        <li><a href="#">Conference Home</a></li>
        <li class="dropdown"><a href="#">Meetings</a>
          <ul class="sub-menu">
                <li><a href="#">Breakouts</a></li>
                <li><a href="#">Hands-On Sessions</a></li>
                <li><a href="#">Technical Demos</a></li>
                <li><a href="#">Classroom Forum</a></li>
          </ul>
        </li>
        <li class="dropdown">
            <a href="#">Locations</a>
            <ul class="sub-menu">
                <li><a href="#">Main Exhibition Hall</a></li>
                <li><a href="#">Meeting Rooms</a></li>
                <li><a href="#">Laboratory Spaces</a></li>
                <li><a href="#">Robotics Area</a></li>
            </ul>
        </li>
        <li><a href="#">Registration</a></li>
  
      <li class="search">Search Schools: <input type="text" id="engSchools" size="40" /></li>
    </ul>
</nav>

<h1>Registration Information</h1>

<?php
  
    $name = $_POST['registrantname'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $comment = $_POST['comment'];
    $arrDate = $_POST['arrDate'];
    $depDate = $_POST['depDate'];
    
    echo "<strong>Name:</strong> " . $name . "<br/>";
    echo "<strong>Email:</strong> " . $email . "<br/>";
    echo "<strong>Url:</strong> " . "<a href='" . $url . "' target='_blank'>" . $url . "</a>" . "<br/>";
    echo "<strong>Comment:</strong> " . $comment . "<br/>";
    echo "<strong>Arrival Date:</strong> " . $arrDate . "<br/>";
    echo "<strong>Departure Date:</strong> " . $depDate . "<br/>";
    
?>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js'></script>
<script  src="js/index.js"></script>

</body>
</html>
