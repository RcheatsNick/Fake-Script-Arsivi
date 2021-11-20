<?php
error_reporting(0);

mysql_connect("localhost","root",""); 
mysql_select_db("zula"); 

$id = addslashes(trim($_GET['id']));

if($id == ""){}else{
	$sil = mysql_query("DELETE FROM zula WHERE id='$id'");
	if($sil){
		header("location:users.php");
	}else{
		header("location:users.php");
	}
}

?>