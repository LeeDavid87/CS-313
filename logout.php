<?php session_start(); ?>
<?php require_once 'includes/functions.php'; ?>
<?php
	//logout
	$_SESSION["user_id"] = NULL;
	$_SESSION["username"] = NULL;
  session_destroy();
  redirect_to("login.php");
?>