<?php 
if(!isset($_SESSION)) 
{
	
	session_set_cookie_params(86400);
	ini_set('session.gc_maxlifetime', 86400);
  	session_start();
	  $_SESSION['userid'];
	
}

//include_once("./protect.php");?>
<!DOCTYPE html>
<html>
<head>
<title>TODO system</title>
<meta charset='utf-8'>
<link rel=StyleSheet href="./css/style.css" type="text/css" media=screen>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link href='http://fonts.googleapis.com/css?family=Cantora+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cantora+One|Syncopate' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<div id="header">
			<nav>
			<?php include_once("./templates/menu.php"); ?>
			</nav>
		</div>
		<div id="content_left">
		<h1>Tervetuloa</h1>
		
		<p><br/><br/>Tämä sivusto on testausta varten. Tehtäväsi on tehdä sivustolle kattava testaussuunnitelma. Tee testitapaukset, testaa 
		sivustoa niin hyvin kuin voit ja raportoi se asianmukaisesti testiraporttiin. </s></p>
		
		<p><br/>Koodi on vapaasti käytössä ja sitä saa muokata omien testien ohessa.<br/><br/>
		
		</p>
		<!--
		<h2>Sisältö</h2>
		<h3>Sisältö</h3>
		<p>Leipäteksti</p>
		-->
		</div>
		<div id="content_right">
			<!-- <h1>Register</h1> -->
			
		</div>
		<div style="clear:both;height:1px;overflow:hidden;font-size:0.1em;">&nbsp;</div>
	</div>

<script>
    $("#teksti").click(function () {
      $(this).slideUp();
    });
</script>

</body>
</html>