<?php 
  mysql_connect("127.13.131.2","adminbRsxs9S","D13liCk-KxN3") or die(mysql_error());
  mysql_select_db("php") or die(mysql_error());
  $id = $_REQUEST['id'];
  $image =  mysql_query("SELECT * FROM queen WHERE id=$id");
  $image = mysql_fetch_assoc($image);
  $image = $image['queen_picture'];
  
  header("Content-type: image/jpeg");
  
  echo $image;

?>
