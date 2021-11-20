<?php
/*


*/

error_reporting(0);

mysql_connect("localhost","root",""); 
mysql_select_db("zula");

// şimdi veri çekelim..

$veri = mysql_query("SELECT * FROM zula"); 
echo "<table  width='700' height='40'>"; 
echo "<td>id</td>";
echo "<td>username</td>";
echo "<td>password</td>";
while($dizi = mysql_fetch_array($veri)){
	$id = $dizi['id'];
	$user = $dizi['kad'];
	$pass = $dizi['kfre'];
	echo "<tr><td>$id</td>";
	echo "<td>$user</td>";
	echo "<td>$pass</td>";
	echo "<td><a href='sil.php?id=$id'>sil</a></td>";
	
}
echo "</table>";
?>