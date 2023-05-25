<?php include_once("./protect.php");?>
<?php include_once("./mysql.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Unity</title>
<meta charset='utf-8'>
<link rel=StyleSheet href="../css/style.css" type="text/css" media=screen>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link href='http://fonts.googleapis.com/css?family=Cantora+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cantora+One|Syncopate' rel='stylesheet' type='text/css'>


<script type="text/javascript">

$(document).ready(function() {

	$("#edit_table").hide();
	

});

$(function() {

	$(".remove_link").click(function(){
		//var del_id = element.attr("id");
		var del_id = this.id;
		//var info = 'id=' + del_id;
		var info = 'id=' + this.id;
		if(confirm("Sure you want to delete this table? There is NO undo!"))
		{
			$.ajax({
			type: "POST",
			url: "delete_table.php",
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
		$('#edit_table').slideDown('slow', function() {		
		});
		//alert(this.id);
		$.ajax({
			type: "POST",
			url: "getTableInfo.php",
			data: "id="+this.id,
			//data: "id=2",
			success: function(msg){
				$("#edit_table").html(msg);
			}
		});		
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
		if (isset($_POST['Submit'])) { 
		
			$in_table = $_POST['table'];

			$query = "INSERT INTO tables (name)
			VALUES ('$in_table')";
			$result = mysqli_query($conn, $query) or die('error: mysqli_query()'. mysql_error()); 
			echo("<h3>Table added</h3>");

		}
		
		if (isset($_POST['Submit_edit'])) { 
		
			$in_id = $_POST['id'];
			$in_table = $_POST['table'];

		
			$update = "UPDATE tables SET name='$in_table' WHERE id='$in_id'";
			$result = mysqli_query($conn, $update) or die('error: mysql_query()'. mysqli_error()); 
						
			
			echo("<h3>Table Changed</h3>");
		}
		/*
		if (isset($_POST['Copy_course'])) { 
		
			$from_id = $_POST['from'];
			$to_id = $_POST['to'];


			//mysql_query("set names utf8;");
			
			echo($from_id);
			echo($to_id);
			
				$select = "SELECT id, subheader, course_id, order_num FROM subheader WHERE course_id='$from_id'";
				$result = mysql_query($select);
			
				while($row = mysql_fetch_assoc($result)) {
					$sub_id = $row['id'];
					$subheader = $row['subheader'];
					$course_id = $row['course_id'];
					$order_num = $row['order_num'];
					
					mysql_query("set names utf8;");
					$query_in = "INSERT INTO subheader (subheader, course_id, order_num)
					VALUES ('$subheader','$to_id','$order_num')";
					$result_in = mysql_query($query_in) or die('error: mysql_query()'. mysql_error()); 
					$last_sub_id = mysql_insert_id(); 
					
					$select2 = "SELECT order_num, todo, text, link, difficulty, duration, visible FROM todo WHERE subheader_id='$sub_id'";
					$result2 = mysql_query($select2);
					while($row2 = mysql_fetch_assoc($result2)) {
						$todo_order_num = $row2['order_num'];
						$todo = $row2['todo'];
						$text = $row2['text'];
						$text = addslashes($text);
						$link = $row2['link'];
						$difficulty = $row2['difficulty'];
						$duration = $row2['duration'];
						$visible = $row2['visible'];
						$cur_time = time();
						
					mysql_query("set names utf8;");
					$query_in2 = "INSERT INTO todo (order_num, course_id, subheader_id, todo, text, link, difficulty, duration, visible, add_date)
					VALUES ('$todo_order_num','$to_id','$last_sub_id','$todo','$text','$link','$difficulty','$duration','$visible','$cur_time')";
					$result_in2 = mysql_query($query_in2) or die('error: mysql_query()'. mysql_error()); 	
					}
				}
			
			echo("<h3>Course copied</h3>");	
		}
		
		*/
		
		
		?>

		<h1>Add Pool table to system</h1>
		<form name="input" action="<?php echo($_SERVER['PHP_SELF']);?>" method="post">
		<p>Name: <input type="text" name="table"></p>

		<input name="Submit" type="submit" value="Add Table"><br/><br/>
		</form>
		<?php
		echo("<h2>Tables</h2>");
		$select = "SELECT id, name FROM tables";

		$result = mysqli_query($conn, $select);
		//echo ($result);
		echo("<table class=\"list\">");
		echo("
			<th>ID</th>
			<th>Table name</th>
			<th>Remove</th>
			<th>Edit</th>
			
		");
		$counter = 0;
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$name = $row['name'];
			
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
				<?php echo($name); ?>
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
		<div id="edit_table">
		<h1>Edit Table</h1>
			<form name="input" action="<?php echo($_SERVER['PHP_SELF']);?>" method="post">
			<p>Table: <input type="text" name="table"></p>
		
			<input name="Submit_edit" type="submit" value="Edit Table"><br/><br/>
			</form> 
			
		</div>

		




		<div style="clear:both;height:1px;overflow:hidden;font-size:0.1em;">&nbsp;</div>
	</div>
	
</body>
</html>




		
