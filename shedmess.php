<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Title of the document</title>
<link rel="stylesheet" href="css/styleshed.css">
</head>

<body>

<?php
  $dateofday= date('w');
   switch ($dateofday) {
     case '1':
       echo "It's Monday";
     break;
     case '2':
       echo "It's Tuesday";
     break;
     case '3':
       echo "It's Wednesday";
     break;
     case '4':
       echo "It's Thursday";
     break;
     case '5':
       echo "<p>It's Friday</p>";
     break;
     case '6':
       echo "It's Saturday";
     break;
     case '7':
       echo "It's Sunday";
     break;
   }


 ?>



</body>


</html>
