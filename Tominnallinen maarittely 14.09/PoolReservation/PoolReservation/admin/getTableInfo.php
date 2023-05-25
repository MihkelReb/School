<?php

		$id = $_POST['id'];
		include("./mysql.php");
		$select = "SELECT id, name FROM tables WHERE id='$id'";
		$result = mysqli_query($conn, $select);
		
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$name = $row['name'];

?>
		<h1>Edit Table</h1>
			<form name="input" action="./tables.php" method="post">
			<p>Table: <input type="text" value="<?php echo($name);?>" name="table"></p>
			
			<input type="hidden" name="id" value="<?php echo($id);?>">
			<input name="Submit_edit" type="submit" value="Edit Table"><br/><br/>
			</form>
<?php
		}


		$select2 = "SELECT reservations.id, reservations.userid, reservations.start, reservations.end,
		CONCAT(user_auth.firstname, ' ' , user_auth.lastname) AS fullname FROM reservations 
		INNER JOIN user_auth ON reservations.userid = user_auth.id WHERE reservations.tableid = '$id'";
		$result2 = mysqli_query($conn, $select2);

		echo("<table class=\"list\">");
		echo("
			<th>ID</th>
			<th>User</th>
			<th>Start</th>
			<th>End</th>
			
		");
		$counter = 0;



		while($row2 = mysqli_fetch_assoc($result2)) {
			$id = $row2['id'];
			$userid = $row2['fullname'];
			$start = $row2['start'];
			$end = $row2['end'];

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
				<?php echo($userid); ?>
			</td>
			<td>
				<?php echo(date("d.m.Y H:i", $start));?>
			</td>
			<td>
				<?php echo(date("d.m.Y H:i", $end));?>
			</td>
		</tr>
<?php 
		}
		echo("</table>");
?>


