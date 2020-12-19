<?php
//echo $_POST['age']-date("Y-m-d");

$date1=date_create($_POST['age']);
$date2=date_create(date("Y-m-d"));
$diff=date_diff($date1,$date2);

echo "<div style='border: 2px solid red;
  padding: 10px;
  border-radius: 25px;
  background-color: coral;
  height:650px;'>";
echo "<center><h1>Number of Days from Your Birth day</h1></center>
<br><br>";

echo "<center><h1>" . $diff->format('%R%a Days') . "</h1></center>";
echo "<center><a href='Age page.php' style='border: 2px solid red;
  padding: 10px;
  background-color: pink;
  text-decoration: none;
  border-radius: 25px;' >Click Try Again</a></center>
<br><br>";




echo "</div>";
?>