<?php include_once("./protect.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<meta charset='utf-8'>
<link rel=StyleSheet href="../css/style.css" type="text/css" media=screen>
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
		<div id="content">
		<h1>Admin side</h1>
		<p>Tämä on admin puoli. Täällä voi hallinnoida järjestelmän käyttäjiä ja pöytiä. Testaa hyvin.</p>
		<? echo("userID: ".$_SESSION['userid']); ?>
		<? echo("Username: ".$_SESSION['username']); ?>
		<? echo("Password: ".$_SESSION['password']); ?>
		<? echo("Level: ".$_SESSION['userlevel']); ?>
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