<?php require ('includes/DBconnect.php') ?>
<?php 
  $id = $_REQUEST['id'];
  $type = $_REQUEST['type'];
  $image = $db->query("SELECT * FROM $type WHERE ". $type."_id=$id"); 
  $image = $image->fetchAll(PDO::FETCH_ASSOC);  
  $image = $image[0][$type.'_picture'];
  header("Content-type: image/jpeg");
  echo $image;
?>
