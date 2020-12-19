<?php
echo "<div style='border: 2px solid red;
  padding: 10px;
  border-radius: 25px;
  background-color: coral;
  height:650px;'>";
echo "<center><h1>Age Calculator Using PHP</h1></center>
<br><br>";
echo '<form action="ageresult.php" method="post" id="quiz">';
echo "<center><h1>Select Your DOB</h1></center>";

echo'<center><input type="date" name="age" style="border: 2px solid red;
  padding: 10px;
  background-color: Green;
  " id="1"></center>
  <br>
<center><input type="submit" style="border: 3px solid red;
  padding: 10px;
  background-color: blue;
  width:100px;
  border-radius: 25px;"
  id="1"></center>';
echo "</form>";

echo "</div>";
?>