<?php
   include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Title of the document</title>
</head>
<body>

<form action="includes/signup.inc.php" method="POST">
  <input type="text" name="first" placeholder="Firstname">
  <br>
  <input type="text" name="last" placeholder="Lastname">
  <br>
  <input type="text" name="email" placeholder="E-mail">
  <br>
  <input type="text" name="uid" placeholder="Username">
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name="submit">Sign Up</button>
</form>


</body>
</html>
