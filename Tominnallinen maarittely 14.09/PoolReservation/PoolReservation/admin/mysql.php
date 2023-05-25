<?php

  $conn = mysqli_connect('localhost',
                        'root',
                        '','pool');

  $db = mysqli_select_db($conn, 'pool');

  if (!$db) {
    echo "<p>Could not connect to database!</p>\n".
         "<pre>".mysql_error()."</pre>\n";
  }else{
    //echo"<p>Connected to Database</p>" . $db . "db";
  }

//mysqli_query($conn, "SET NAMES 'utf8'")
?>
