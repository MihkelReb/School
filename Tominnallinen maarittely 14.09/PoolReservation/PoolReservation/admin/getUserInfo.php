<?php

		$id = $_POST['id'];
		include("./mysql.php");
		$select = "SELECT id, username, password, firstname, lastname, email, userlevel FROM user_auth WHERE id='$id'";
		$result = mysqli_query($conn, $select);
		
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$username = $row['username'];
			$password = $row['password'];
			$firstname = $row['firstname'];	
			$lastname = $row['lastname'];
			$email = $row['email'];

			$userlevel = $row['userlevel'];
?>
		<h1>Edit Student</h1>
			<form name="input" action="./users.php" method="post">
			
				<div id="login_info">
					<br/>
					<p>Username</p>
					<input type="text" value="<?php echo($username);?>" name="username" />
					<p>Password</p>
					<input type="password"  value="<?php echo($password);?>" name="password" />
					<p>Firstname</p>
					<input type="text" value="<?php echo($firstname);?>" name="firstname" />
					<p>Lastname</p>
					<input type="text" value="<?php echo($lastname);?>" name="lastname" />
					<p>Email address</p>
					<input type="text" value="<?php echo($email);?>" name="email" />
					<p>User level</p>
					<input type="text" value="<?php echo($userlevel);?>" name="userlevel" />
					<br/><br/>
					<input type="hidden" name="id" value="<?php echo($id);?>">
				</div>
				<br/><br/>
				<input name="Submit_edit" type="submit" value="Edit User"><br/><br/>
			</form>
<?php
		}
		
?>
