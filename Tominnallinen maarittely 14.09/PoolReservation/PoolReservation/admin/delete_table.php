<?php
include("./mysql.php");
if($_POST['id'])
{
$id=$_POST['id'];

$sql = "DELETE FROM tables WHERE id='$id'";
mysqli_query($conn, $sql);
}
?>