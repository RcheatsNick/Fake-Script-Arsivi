<?php
include "config.php";
?>
<!DOCTYPE HTML>
<html xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <!--[if lt IE 9]>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js"></script>
	<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"/>
	<title>Hileinstagram - Ücretsiz Steam Oyunları ~ Free Steam Games </title>
    <link rel="shortcut icon" href="https://cdn3.iconfinder.com/data/icons/simple-toolbar/512/free_for_job_base_icons_bsd_sign_open_one-512.png" type="image/x-icon" />
	<meta property="og:title" content="Hileinstagram.com - Ücretsiz STEAM Oyunları" />
    <meta name="description" content="ÜCRETSİZ Olarak Bu Yıl İçin Favori Oyununuzu İndirin..."/>
    <meta name="keywords" content="Steam Games, Free Steam Games,  Free games for steam,  Steam Oyunları, Ücretsiz Steam Oyunları, Steam için Ücretsiz Oyunlar"/>	
    <meta property="og:image" content="https://cdn3.iconfinder.com/data/icons/simple-toolbar/512/free_for_job_base_icons_bsd_sign_open_one-512.png" />
	<meta property="og:url" content="https://hileinstagram.com/freekey" />
	<link rel="image_src" href="https://cdn3.iconfinder.com/data/icons/simple-toolbar/512/free_for_job_base_icons_bsd_sign_open_one-512.png"/>
	<meta name="author" content="hileinstagram.com"/>
    
    <link rel="stylesheet" href="css/html5reset-1.6.1.css" type="text/css"/>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<!-- <link rel="stylesheet" href="css/social-traffic-pop.css" type="text/css"/> -->
	
	<script type="text/javascript" src="js/fload.js"></script>
	<script type="text/javascript" src="font/cufon-yui.js"></script>
	<script type="text/javascript" src="font/PF_Din_Text_Comp_Pro.font.js"></script>
    <script type="text/javascript" src="font/cufon_setting.js"></script>
    <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
    <script src="js/jquery.stp.min.js" type="text/javascript"></script>
    

</head>

<header id="header">
	<div id="header-content">
        <div id="logo-holder">
            <a href="index.php"><div class="logo"></div></a>
			<?php echo file_get_contents($kredi); ?>
        </div>
        <div id="second-logo"></div>
	</div>
	<div id="header-effect"></div>
</header>

<body>



<section id="wrapper">
	<div id="frame">
        <h1 class="title">Sistem Nasil calisiyor ?</h1>
    </div>
    <div id="frame2">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=447834488573180";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <h1 class="description">Ziyaretcilerimize UCRETSIZ Steam Oyunlari veriyoruz<br/>
"SIZIN BAGLANTINIZ" Kismini Kopyalayin Ve Arkadaslarinizla Paylasarak "Puan Toplayin."<br/>
   Gerekli Miktarda "PUAN" Topladiginizda Oyunlarin Kilitleri Acilacaktir.<br></h1>
	<center><div class="fb-like" target="_blank" data-href="#" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-colorscheme="dark"></div></center>
	</div>

	<div id="frame">
    	<h1 class="title">SIZIN BAGLANTINIZ</h1>
    </div>
    <div id="frame2" class="frame-extend">
        <h1 class="description">Asagidaki Baglantiyi Kopyalayip Arkadaslarinizla Paylasin!</h1>
        <div id="form">
            <input type="text" name="referral" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?id='.$myid; ?>" class="referral" readonly>
        </div>
		<div class="share-position">
			<script type="text/javascript">
            function newPopup(url) {
            popupWindow = window.open(
            url,'popUpWindow','height=450,width=650,left=10,top=10,resizable=yes,scrollbars=no,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
            }
            </script>
            <a href="JavaScript:newPopup('http://www.facebook.com/share.php?u=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?id='.$myid; ?>');"><div id="share-button"></div></a>
        </div>
    </div>

	<div id="frame">
        <h1 class="title">PUANINIZ</h1>
    </div>
    <div id="frame2">
        <h1 class="description"><br/>
    Guncel Puaninizi Gormek Icin Sayfayi Yenileyin.! ( F5 )<br/>
    <span class="count"><?php echo $mypoints; ?></span></h1>
	</div>
        <br>
	<div id="frame">
        <h1 class="title">OYUN LiSTESi</h1>
    </div>
    <div id="frame2" class="frame-extend2">
        <h1 class="description">Gerekli Miktarda "PUAN" Topladiginizda Oyunlarin Kilitleri Acilacaktir.<br/>
        <br>
		Soru Ve Gorusleriniz Icin Iletisime Gecebilirsiniz <a href="#">Facebook</a><br></h1><hr>
        <section id="column-titles">
        	<div id="column1">
            	<h1 class="column-text">RESIM</h1>
            </div>
            <div id="column2">
           	 <h1 class="column-text">OYUN ADI</h1>
            </div>
            <div id="column3">
            	<h1 class="column-text">DURUM</h1>
            </div><div id="column4">
				<h1 class="column-text">GEREKLi PUAN</h1>
            </div>
        </section>
<!---------------------------------------------------------------------------------------------- TITLES ENDS -->   
		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="Grand Theft Auto V" width="120" height="45" src="img/games/gta5.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-1row">Grand Theft Auto V</h2>
            </div>
            <?php echo pointsNeeded(199); ?>
        </section>
        
<!---------------------------------------------------------------------------------------------- GAME #1 ENDS --> 
		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="PAYDAY 2" width="120" height="45" src="img/games/payday2.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-1row">PAYDAY 2</h2>
            </div>
            <?php echo pointsNeeded(59); ?>
        </section>
        
<!---------------------------------------------------------------------------------------------- GAME #2 ENDS -->  
		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="H1Z1: King of the Kill" width="120" height="45" src="img/games/h1z1.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-1row">H1Z1: King of the Kill</h2>
            </div>
            <?php echo pointsNeeded(59); ?>
        </section>
        
<!---------------------------------------------------------------------------------------------- GAME #3 ENDS -->
		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="Counter Strike Global Offensive" width="120" height="45" src="img/games/csgo.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-2rows">Counter Strike<br/>Global Offensive</h2>
            </div>
            <?php echo pointsNeeded(49); ?>
        </section>
        
<!---------------------------------------------------------------------------------------------- GAME #4 ENDS --> 
		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="50 TL Steam Bakiye" width="120" height="45" src="img/games/steamtl.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-2rows">50 TL Steam <br> Bakiye</h2>
            </div>
            <?php echo pointsNeeded(75); ?>
        </section>
        
<!---------------------------------------------------------------------------------------------- GAME #11 ENDS --> 
		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="Team Fortress 2" width="120" height="45" src="img/games/tf2.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-2rows">Team Fortress 2</h2>
            </div>
            <?php echo pointsNeeded(39); ?>
        </section>
        
<!---------------------------------------------------------------------------------------------- GAME #12 ENDS --> 
		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="ARK: Survival Evolved" width="120" height="45" src="img/games/ark.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-1row">ARK: Survival Evolved</h2>
            </div>
            <?php echo pointsNeeded(69); ?>
        </section>
        
<!---------------------------------------------------------------------------------------------- GAME #13 ENDS --> 
		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="100 TL Steam Bakiye" width="120" height="45" src="img/games/steamtl.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-2rows">100 TL Steam <br> Bakiye</h2>
            </div>
            <?php echo pointsNeeded(150); ?>
        </section>
        
<!---------------------------------------------------------------------------------------------- GAME #14 ENDS --> 

		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="100 TL Steam Bakiye" width="120" height="45" src="img/games/steamtl.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-2rows">250 TL Steam <br> Bakiye</h2>
            </div>
            <?php echo pointsNeeded(250); ?>
        </section>
        
<!---------------------------------------------------------------------------------------------- GAME #15 ENDS -->

		<section id="columns">
        	<div id="column11">
            	<div id="game-cover"><img alt="100 TL Steam Bakiye" width="120" height="45" src="img/games/pbg.jpg"/></div>
            </div>
            <div id="column22">
				<h2 class="game-title-2rows">PLAYERUNKNOWN'S BATTLEGROUNDS</h2>
            </div>
            <?php echo pointsNeeded(89); ?>
        </section>
<!---------------------------------------------------------------------------------------------- GAME #15 ENDS -->
	</div><!-- frame2 & frame-extend2 ENDS -->
</section><!-- wrapper section ENDS -->
<div class='push'>
</div>

<footer>
	<div id="copyrights"><h1 class="copy">&copy 2017 - <a href="index.php">STEAMGAMES</a> All rights reserved. <br><br><a href="https://hileinstagram.com/freekey/">Powered By <strong>Hileinstagram</strong></a></h1></div>
</footer>
</body>
</html>
