<?php
  include_once("mysql.php");

 // $select = "SELECT id, username, password, userlevel FROM user_auth WHERE username='testi' AND password='testi'";
 // $select = "SELECT * FROM user_auth";
            
          /*
            $select = "SELECT id, username, password, userlevel FROM user_auth
            WHERE username=".
            $_REQUEST['login_username'].
            " AND password=".
            $_REQUEST['login_password'];
*/
$select = "SELECT id, username, password, userlevel FROM user_auth WHERE username='".$_REQUEST['login_username']."' AND password='".$_REQUEST['login_password']."'";

            echo("u " . $_REQUEST['login_username']);
            echo("p " . $_REQUEST['login_password']);
  

$stmt = mysqli_query($conn, $select);
  if (!$stmt) {
    echo "<pre>\n$select\n".mysql_error()."\n</pre>";
  }else{
    echo"OK";
  }
 // echo($select);
  $row = mysqli_fetch_assoc($stmt);
  /*
  while ($roww = mysqli_fetch_assoc($stmt)) {
    printf("%s (%s)\n", $roww["id"], $roww["username"]. " joku juttu");
  }
  */
  // if first column of the first row is set,
  // show the page which was originally requested

  if ($row["id"]) {
    echo("ON ID: " . $row['id']);
    // set the session variable
    $_SESSION['userid'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
	$_SESSION['userlevel'] = $row['userlevel'];


/*
	$date=time();
	$query = "INSERT INTO board (header, info, user_id, style, date) 
	VALUES ('Logged in','$_SESSION[username] has logged in to do some tasks','$_SESSION[userid]','blue','$date')";
	$result = mysqli_query($conn, $query);
	*/


	

    // Tämä pois kommenteista kun toimii
    // $goto is the complete address of the page that the user requested
    $goto = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $goto_enc = htmlentities($goto);
 



    // Location: header will direct the browser to another URL
   // header("HTTP/1.1 303 See Other");
  //  header("Location: $goto");
    // META tag is for browsers that don't understand Location: header
    echo "<meta http-equiv=\"Refresh\" content=\"0;URL=$goto_enc\">\n";
    // And a normal link for browsers that don't support META Refresh
    echo "<a href=\"$goto_enc\">$goto_enc</a>\n";
    exit();
    
  }
  

?>
