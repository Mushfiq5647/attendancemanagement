<?php

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet"  href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style8.css">

</head>
<body>

<div class="w3-bar w3-black">
<span class=" branding w3-bar-item w3-mobile">Online Ticketing</span>
<span class="w3-right w3-mobile">
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/display3.php">Users' Info</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/events.php">View Complains</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/addevent.html">Add Events</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/addbus.html">Add Bus</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/index.php">Delete Route</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/index.php?user=1">Delete Events</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/logout1.php">Logout</a>



</span> 

</div>
<?php
  echo $_SESSION['name'];
?>
</body>
</html>