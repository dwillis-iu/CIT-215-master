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

<h1>Conference Registration</h1>

<form class="cmxform" id="" method="post" action="results.php">
  <fieldset>
    <legend>Please provide your registration information</legend>
    <p>
      <label for="registrantname" class="fieldlabel">Registrant's Name</label>
      <input id="registrantname" name="registrantname" type="text">
    </p>
    <p>
      <label for="email" class="fieldlabel">E-Mail</label>
      <input id="email" name="email">
    </p>
    <p>
      <label for="url" class="fieldlabel">Profile URL (optional)</label>
      <input id="url" name="url">
    </p>
    <p>
      <label for="comment" class="fieldlabel">Your comment</label>
      <textarea id="comment" name="comment"></textarea>
    </p>
    <p>
      <label for="arrDate" class="fieldlabel">Arrival Date</label>
      <input id="arrDate" name="arrDate" />
    </p>
    <p>
      <label for="depDate" class="fieldlabel">Departure Date</label>
      <input id="depDate" name="depDate" />
    </p>
    <p>
      <input class="submit" type="submit" value="Submit">
    </p>
  </fieldset>
</form>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
