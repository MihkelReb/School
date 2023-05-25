<? include_once("./protect.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
			<? include_once("./templates/menu.php"); ?>
			</nav>
		</div>
		<div id="content">
			<div id="login_info">
				<h3>Please, Log In</h3>
				<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post"> 
				<p>Username</p>
				<input type="text" name="login_username" />
				<p>Password</p>
				<input type="password" name="login_password" />
				<br/><br/>
				<input class="sisaan" type="submit" value="Log in"/>
				</form>
				
			</div>
		</div>
		<div style="clear:both;height:1px;overflow:hidden;font-size:0.1em;">&nbsp;</div>
	</div>



</body>
</html>




		
