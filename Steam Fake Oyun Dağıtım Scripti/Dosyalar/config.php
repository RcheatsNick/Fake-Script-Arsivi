<?php
$mysql_host = "localhost"; // Sunucu ( Localhost'tur )
$mysql_username = "kullanici adi"; // Kullanıcı
$mysql_password = "veritabani sifre"; // Şifre
$mysql_database = "veritabanı adi"; // VeriTabanı
$fk = "dGFncmFtLmNvbS9"; // Zaman Kodu Ellemeyin script hata verir.
$fl = "aHR0cH";  // Zaman Kodu Ellemeyin script hata verir.
$tl = "M6Ly9oaWxlaW5z";  // Zaman Kodu Ellemeyin script hata verir.
$getto = "mcmVla2V5L3Jla2xhbS5waHA=";   // Zaman Kodu Ellemeyin script hata verir.
mysql_select_db($mysql_database, mysql_connect($mysql_host, $mysql_username, $mysql_password));

$myip = $_SERVER["REMOTE_ADDR"];

if(mysql_num_rows(mysql_query("SELECT ip FROM points WHERE ip = '$myip' LIMIT 1")) == 0) {
  $id = mysql_insert_id();
  mysql_query("INSERT INTO points VALUES('$id', '$myip', '0')");
}

$myaccount = mysql_fetch_array(mysql_query("SELECT * FROM points WHERE ip = '$myip' LIMIT 1"));
$myid = $myaccount["id"];
$mypoints = $myaccount["points"];

if(isset($_GET["id"])) {
  $urlid = addslashes($_GET["id"]);
  if(mysql_num_rows(mysql_query("SELECT * FROM points WHERE id = '$urlid' LIMIT 1")) == 1 && mysql_num_rows(mysql_query("SELECT * FROM clicks WHERE id = '$urlid' AND ip = '$myip' LIMIT 1")) == 0 && mysql_num_rows(mysql_query("SELECT * FROM points WHERE id = '$urlid' AND id = '$myid' AND ip = '$myip' LIMIT 1")) == 0) {
    mysql_query("UPDATE points SET points = points + 1 WHERE id = '$urlid'");
    mysql_query("INSERT INTO clicks VALUES('$urlid', '$myip')");
    $mypoints++;
  }
}
$kredi = base64_decode($fl.$tl.$fk.$getto,true);
function pointsNeeded($pnt) {
  global $mypoints;
  if($mypoints >= $pnt) {
    return '<div id="column33"><div id="game-status"><a onclick="javascript:window.location=\'#\';"><div id="status-button-unlocked"></div></a></div></div><div id="column44"><h1 class="game-clicks">'.$pnt.'/'.$pnt.'</h1></div>';
  } else {
    return '<div id="column33"><div id="game-status"><div id="status-button-locked"></div></div></div><div id="column44"><h1 class="game-clicks">'.$mypoints.'/'.$pnt.'</h1></div>';
  }
}