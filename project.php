<?php require ('includes/sessions.php') ?>
<?php require ('includes/functions.php') ?>
<?php require ('includes/DBconnect.php') ?>
<?php confirm_logged_in(); ?>
<?php check_time_stamp(); ?>
<?php require ('includes/header.php') ?>
<?php require ('includes/loadinfo.php') ?>
<?php
  if (isset($_POST['change'])) {
    $file = $_FILES['image']['tmp_name'];
    
    if (strlen($file) == 0) { echo "File not selected"; }
    else {
      $image = addslashes(file_get_contents($file));
      
      $image_size = getimagesize($file);
      
      if ($image_size == FALSE) { echo "Invalid image"; }
      else {
        echo $image;
      }
      
    }
  }
?>
<div class="tabs">
  <!-- Radio button and lable for Queen -->
  <input onclick="custom_width(this)" type="radio" name="tabs" id="tab1">
  <label for="tab1">
      <i class="fa fa-html5"></i><span>Queens</span>
  </label>
  <!-- Radio button and lable for Stud -->
  <input onclick="custom_width(this)" type="radio" name="tabs" id="tab2">
  <label for="tab2">
      <i class="fa fa-css3"></i><span>Studs</span>
  </label>
  <!-- Radio button and lable for Kittens -->
  <input onclick="custom_width(this)" type="radio" name="tabs" id="tab3">
  <label for="tab3">
      <i class="fa fa-code"></i><span>Kittens</span>
  </label>
  <!-- Radio button and lable for Customers -->
  <input onclick="custom_width(this)" type="radio" name="tabs" id="tab4">
  <label for="tab4">
      <i class="fa fa-code"></i><span>Customers</span>
  </label>

  <?php load_page("queen", "1"); ?>
  <?php load_page("stud", "2"); ?>
  <?php load_page("kitten", "3"); ?>
  <?php load_page("customer", "4"); ?>
  

<? require ('includes/footer.php') ?>