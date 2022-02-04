<?php
phpinfo();
echo "<br><br><br>";
echo" Yasser HAJJI<br><br>";
echo" BBCA21A <br><br>";
echo"Hello world ! My name is 'David'<br>";
$variable='$variable';
echo"<br>It is possible to place variables inside of double-quoted strings (e.g. \"string here and a $variable\"). By putting a variable inside the quotes (\" \") you are telling PHP that you want it to grab the string value of that variable and use it in the string. The example below shows an example of this  feature.<br> ";
define("NAME", "<br> <i>My first name is yasser  and last name is hajji.<i> <br><br>");
echo NAME;
echo date("Y/m/d");
$title="PHP is interesting";
echo "<h1 class='specialH1'>$title</h1><br>"; 
$g1=5;
$g2=4;
$g3=5;
echo "<table>
<tr>
  <th> S.N </th>
  <th> Name</th>
  <th>Grade</th>
</tr>
<tr>
  <td>1</td>
  <td>Pekka</td>
  <td>$g1</td>
</tr>
<tr>
  <td>2</td>
  <td>Johanna</td>
  <td>$g2</td>
</tr>
<tr>
  <td>3</td>
  <td>John</td>
  <td>$g3</td>
</tr>
</table>"
?>

