
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
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
		<div id="content">
			<?php
			$username = ""; 
			$firstname = "";
			$lastname = "";
			$email = "";
			$continue = true;

			if (isset($_POST['submit'])) {
				include_once("./mysql.php");
				$username = $_POST['username'];
				$password = $_POST['password'];
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				
				$continue = true;
				/*
				foreach($_POST as $key => $value)
				{
				    if((!isSet($value)) || (!$value) || ($value = ""))
					{
						$continue = false;
						$viesti ="fill all fields, please";
		
					}
				}
				*/
				/*
				if($username){
					$selectusername = "SELECT id FROM user_auth WHERE username='$username'";
					$resultusername = mysql_query($selectusername);
					$user_taken = mysql_num_rows($resultusername);
					if($user_taken > 0){
						$continue = false;
						$viesti ="Username already in use";
					}
				}
				*/
				
				
				if($continue == true){
					//mysql_query("set names utf8;");
					$query = "INSERT INTO user_auth (username, password, firstname, lastname, email) VALUES ('$username','$password','$firstname','$lastname','$email')";
					$result = mysqli_query($conn, $query) or die('error: mysql_query()'. mysql_error());

					echo("<h4>You have been added to database.</h4>");
					?>
						<a href="./reservations.php?page=reservations"><h3>Log in</h3></a>
					<?php	
				}else{
					echo("<h2 class=\"warning\">".$viesti."</h2>");
				}
				
				

			}
			
			?>
			
				<div id="login_info">
					<h3>Register, it's simple</h3>
					<br/>
					<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
					<p>Username</p>
					<input type="text" value="<?php echo($username);?>" name="username" />
					<p>Password</p>
					<input type="password" name="password" />
					<p>Firstname</p>
					<input type="text" value="<?php echo($firstname);?>" name="firstname" />
					<p>Lastname</p>
					<input type="text" value="<?php echo($lastname);?>" name="lastname" />
					<p>Email address</p>
					<input type="text" value="<?php echo($email);?>" name="email" />
					<br/><br/>
					<input name="submit" class="sisaan" type="submit" value="Log in"/>
					</form>				
				</div>
		</div>
		<div style="clear:both;height:1px;overflow:hidden;font-size:0.1em;">&nbsp;</div>
	</div>
	
</body>
</html>




		
