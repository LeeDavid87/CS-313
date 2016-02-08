<? require ('DBconnect.php') ?>

<?php 
  $id = $_REQUEST('id');
  $image =  $db->query("SELECT * FROM queen WHERE id=$id");
  $image = image['queen_picture'];
  
  header("Content-type: image/jpeg");
  
  echo $image;

?>
