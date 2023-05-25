<?php
if(!isset($_SESSION)) 
{
	session_set_cookie_params(86400);
	ini_set('session.gc_maxlifetime', 86400);
  session_start();
}
  if (isset($_REQUEST['login_username']) &&
      isset($_REQUEST['login_password'])) {
    // if variables are set, user is trying to log in
    include_once('./login.php');
    if (!$_SESSION['userid']) {
      // username and password didn't match 
      echo "<p>Authentication failed</p>";
      include('loginform.php');
      exit();
    }
  }
  if (!isset($_SESSION['userid']) || !$_SESSION['userlevel']) {
    // if $_SESSION['userid'] is not set,
    // user hasn't logged in succesfully
    // view log in form instead of requested content
    include('./loginform.php');
    exit();
  }

?>
