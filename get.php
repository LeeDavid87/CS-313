<? require ('DBconnect.php') ?>

<?php 
  $id = $_REQUEST('id');
  $image =  $db->query("SELECT * FROM queen WHERE id=$id");
  $image = image['quest_picture'];
  
  header("Content-type: image/jpeg");
  
  echo $image;

?>
