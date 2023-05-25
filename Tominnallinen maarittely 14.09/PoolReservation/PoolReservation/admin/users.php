<?php include_once("./protect.php");?>
<?php include_once("./mysql.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Users</title>
<meta charset='utf-8'>
<link rel=StyleSheet href="../css/style.css" type="text/css" media=screen>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link href='http://fonts.googleapis.com/css?family=Cantora+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cantora+One|Syncopate' rel='stylesheet' type='text/css'>


<script type="text/javascript">

$(document).ready(function() {

	$("#edit_user").hide();
	

});

$(function() {

	$(".remove_link").click(function(){
		//var del_id = element.attr("id");
		var del_id = this.id;
		//var info = 'id=' + del_id;
		var info = 'id=' + this.id;
		if(confirm("Sure you want to delete this user? There is NO undo!"))
		{
			$.ajax({
			type: "POST",
			url: "delete_user.php",
			data: info,
			success: function(){
			}
			});

			$(this).parents(".courserow").animate({ backgroundColor: "#fbc7c7" }, "fast")
			.animate({ opacity: "hide" }, "slow");

		}

		return false;
	});
});

$(function() {

	$(".edit_link").click(function(){
		$('#edit_user').slideDown('slow', function() {		
		});
		//alert(this.id);
		$.ajax({
			type: "POST",
			url: "getUserInfo.php",
			data: "id="+this.id,
			//data: "id=2",
			success: function(msg){
				$("#edit_user").html(msg);
			}
		});

			// Animation complete.
	

		
	});
});


</script>




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
		
		if (isset($_POST['Submit_edit'])) { 
				$in_id = $_POST['id'];
				$in_username = $_POST['username'];
				$in_password = $_POST['password'];
				$in_firstname = $_POST['firstname'];
				$in_lastname = $_POST['lastname'];
				$in_email = $_POST['email'];
				$in_userlevel = $_POST['userlevel'];

			
			$update = "UPDATE user_auth SET username='$in_username', password='$in_password', firstname='$in_firstname', lastname='$in_lastname', email='$in_email', userlevel='$in_userlevel' WHERE id='$in_id'";
			$result = mysqli_query($conn, $update) or die('error: mysql_query()'. mysql_error()); 
		
			echo("<h3>User Changed</h3>");
		}
		?>
		
		<div id="edit_user">
		
				<h1>Edit User</h1>
				<form name="input" action="./users.php" method="post">
			
				<div id="login_info">
					<br/>
					<p>Userrrname</p><p>Userrrname</p>
					<input type="text" value="<?php echo($username);?>" name="username" />
					<p>Password</p>
					<input type="password" name="password" />
					<p>Firstname</p>
					<input type="text" value="<?php echo($firstname);?>" name="firstname" />
					<p>Lastname</p>
					<input type="text" value="<?php echo($lastname);?>" name="lastname" />
					<p>Email address</p>
					<input type="text" value="<?php echo($email);?>" name="email" />
					<p>User level</p>
					<input type="text" value="<?php echo($userlevel);?>" name="userlevel" />
					<br/><br/>
					<input type="hidden" name="id" value="<? echo($id);?>">
				</div>
				<br/><br/>
				<input name="Submit_edit" type="submit" value="Edit User"><br/><br/>
			</form>
		
		
		</div>

		<h1>Users</h1>

		<?php

		$select = "SELECT id, username, password, firstname, lastname, email, userlevel FROM user_auth";

		$result = mysqli_query($conn, $select);
		//echo ($result);
		echo("<table cellspacing=\"0\" class=\"list\">");
		echo("
			<th>ID</th>
			<th>Username</th>
			<th>Name</th>
			<th>userlevel</th>
			<th>Reservations</th>
		");
		$counter = 0;
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$username = $row['username'];
			$password = $row['password'];
			$firstname = $row['firstname'];	
			$lastname = $row['lastname'];
			$email = $row['email'];
			$userlevel = $row['userlevel'];
			
			if ($counter % 2) {
				$countrow = "odd";
			} else {
				$countrow = "even";
			} 	
			$counter++;

?>
		<tr class="<?php echo($countrow);?> courserow">
			<td>
			<?php echo($id); ?>
			</td>
			<td>
				<?php echo($username); ?>
			</td>
			<td>
				<?php echo($firstname." ".$lastname); ?>
			</td>
			<td>
				<?php echo($userlevel); ?>
			</td>
			<td>
				<?php 
					$result2 = mysqli_query($conn, "SELECT * FROM reservations WHERE userid = '$id'");
					$rows = mysqli_num_rows($result2);
					echo($rows);
				?>
			</td>

			<td>
				<a id="<?php echo($id);?>" class="remove_link" href="#">Remove</a>
			</td>
			<td>
				<a id="<?php echo($id);?>" class="edit_link" href="#">Edit</a>
			</td>
		</tr>
<?php 
		}
		echo("</table>");
?>
		</div>
		<div style="clear:both;height:1px;overflow:hidden;font-size:0.1em;">&nbsp;</div>
	</div>
</body>
</html>




		
