<?php include_once("./protect.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Varausaikataulu</title>
<meta charset='utf-8'>
<link rel=StyleSheet href="./css/style.css" type="text/css" media=screen>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
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

			<h1>Reservations</h1>
			<p>Current time: <?php echo(date("F j, Y, g:i a", time()));?></p><br/>

<?php
				include("./mysql.php");
				//echo("USER ID: " . $_SESSION['userid']);
				//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
	

				$select = "SELECT id, tableid, start, end FROM reservations WHERE userid = ".$_SESSION['userid']."";

				$result = mysqli_query($conn, $select);
				//echo ($result);
				echo("<table cellspacing=\"0\" class=\"list\">");
				echo("
					<th>id</th>
					<th>Table</th>
					<th>Start</th>
					<th>End</th>
				");
				$counter = 0;
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					$tableid = $row['tableid'];
					$start = $row['start'];
					$end = $row['end'];	
					
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
						<?php //echo($tableid); 
						
						$select_table = "SELECT name FROM tables WHERE id='$tableid'";
						$result_table = mysqli_query($conn, $select_table);
						while($row_course = mysqli_fetch_assoc($result_table)) {
							$table_name = $row_course['name'];
							echo($table_name);
						}	
						
						?>
					</td>
					<td>
						<?php echo(date("d.m.Y H:i", $start));?>
					</td>
					<td>
					<?php echo(date("d.m.Y H:i", $end));?>
					</td>
					<td>
						<?php 
						/*
						$select_course = "SELECT course_id FROM user_in_course WHERE user_id='$id'";
						$result_course = mysqli_query($conn, $select_course);
					while($row_course = mysql_fetch_assoc($result_course)) {
						$course_id = $row_course['course_id'];
						
						$select_course2 = "SELECT course FROM course WHERE id='$course_id'";
						$result_course2 = mysql_query($select_course2);
						while($row_course2 = mysql_fetch_assoc($result_course2)) {
							$course = $row_course2['course'];
							echo($course."<br/>");
						}
		
					}
					*/
		
						?>
					</td>
		
					<td>
						<a id="<?php echo($id);?>" class="remove_link" href="#">Remove</a>
					</td>
				</tr>
		<?php 
				}
				echo("</table>");



				if (isset($_POST['reserve_table'])) { 
				
					$in_table = $_POST['table'];
					$in_date = $_POST['date'];
					$in_starttime = $_POST['starttime'];
					$in_endtime = $_POST['endtime'];
					
					echo($in_date);
					echo($in_starttime);
					echo($in_endtime);
					
					echo("<br/>");
					$timestamp_start = strtotime("$in_date $in_starttime");
					echo($timestamp_start);
					echo("<br/>");
					echo(date("d-m-Y H:i:s", $timestamp_start));
					echo("<br/>");
					$timestamp_end = strtotime("$in_date $in_endtime");
					echo($timestamp_end);
					echo("<br/>");
					echo(date("d-m-Y H:i:s", $timestamp_end));

					if($timestamp_start < $timestamp_end){
					
						$query = "INSERT INTO reservations (userid, tableid, start, end)
						VALUES ('".$_SESSION['userid']."','$in_table','$timestamp_start','$timestamp_end')";
						$result = mysqli_query($conn, $query) or die('error: mysql_query()'. mysqli_error()); 
						echo("<h3>Reservation added</h3>");
					}else{
						echo("<h3>Error: Check your times!</h3>");
					}
					
		
				}
				
				/*
		$select = "SELECT id, header, info, course_id, user_id, todo_id, style, date FROM board ORDER BY date desc LIMIT 50";
		$result = mysql_query($select);
		
		while($row = mysql_fetch_assoc($result)) {
			$id = $row['id'];
			$header = $row['header'];
			$info = $row['info'];
			$course_id = $row['course_id'];
			$user_id = $row['user_id'];
			$todo_id = $row['todo_id'];
			$style = $row['style'];
			$date = $row['date'];
			$board_date	= date("F j, Y, g:i a", $date);
			
			$select2 = "SELECT username, firstname, lastname FROM user_auth WHERE id='$user_id'";
				$result2 = mysql_query($select2);
		
				while($row2 = mysql_fetch_assoc($result2)) {
				$username = $row2['username'];
				$firstname = $row2['firstname'];
				$lastname = $row2['lastname'];
			}
			
			$info = str_replace($username, " <span class=\"pointerarrow\" title=\"$firstname $lastname\">$username</span> ", $info);
			
			echo("<div class=\"boardlist $style\">");
				echo("<h3 class=\"boardheading\">".$header."</h3>");
				echo("<div class=\"board_info_container\">");
					echo("<p class=\"boardinfo\"><span class=\"date\">".$board_date."</span><br/>".$info."</p>");
				echo("</div>");		
			echo("</div>");		
			
		}
		*/
	?>
		<h1>Make a New Reservation</h1>

		<form action="./reservations.php" method="post">
		<p>Choose your table</p>
			<select name="table" id="table">
			<?php 
			
			$select = "SELECT id, name FROM tables";
			$result = mysqli_query($conn, $select);

			while($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$name = $row['name'];
				echo($name);
				echo("<option value=".$id."\">".$name."</option>");
			}

			

			?>
			</select><br/><br/>
			<label for="fname">Reservation day:</label><br>
			<input type="date" id="date" name="date"><br>
			<label for="fname">Reservation starts at:</label><br>
			<input type="time" id="starttime" name="starttime"><br>
			<label for="fname">Reservation ends at:</label><br>
			<input type="time" id="endtime" name="endtime"><br><br/>

			
			<input name="reserve_table" type="submit" value="Make Reservation">
</form> 





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