<?php
include("./mysql.php");
if($_POST['id'])
{
$id=$_POST['id'];

$sql = "DELETE FROM user_auth WHERE id='$id'";
mysqli_query($conn, $sql);


}
?>