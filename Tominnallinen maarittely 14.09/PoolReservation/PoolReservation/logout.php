<?php
  session_unset(); 
  session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
<title>Unity</title>
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
			<?php // include_once("./templates/menu.php"); ?>
			</nav>
		</div>
		<div id="content">
			<div id="login_info">
				<h3>You have been logged out</h3>	
				<a href="./index.php">Go Back to front page</a>
			</div>
		</div>
		<div style="clear:both;height:1px;overflow:hidden;font-size:0.1em;">&nbsp;</div>
	</div>


</body>
</html>




		
