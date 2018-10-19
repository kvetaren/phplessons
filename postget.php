<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Title of the page</title>
</head>
<body>
<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php
$_SESSION['username']="hichochamko";
echo $_SESSION['username'];

if (!isset($_SESSION["username"])) {
  echo "You are not logged in !";
} else {
  echo "You are logged in !";
}

?>

</body>
</html>
