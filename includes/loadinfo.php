<?php
function load_page($name, $content) {
  require ('DBconnect.php');
  $dbarray =  $db->query("SELECT * FROM $name");
  echo '<!-- ' . $name . ' content -->';
  echo '<div id="tab-content'. $content . '" class="tab-content">';
    foreach ($dbarray as $row){
    echo '<input class="uncheck" onclick="load_info(\''. $row['name'] .'\')" id="tab'. $row['name'] .'" type="radio" name="subtabs">
          <label class="sublabel" for="tab'. $row['name'] .'">
          <i class="fa fa-code"></i><span>'. $row['name'] .'</span>
          </label>'; 
  }
  echo '</div><div class="info-content">';
  $dbarray =  $db->query("SELECT * FROM $name");
  foreach ($dbarray as $row) {
    echo '<div class="sub-content" id="'. $row['name'] .'"> <img src=get.php?id=' . $row[$name.'_id'] . '&type=' .$name. ' height="350" width="350">';
    echo '</br><form action="project.php" method="POST" enctype="multipart/form-data">';
    echo '<input class="button" type="file" name="image"/><input type="submit" class="button" ';
    echo 'value="Change" name="change"><input name="cat" type="hidden" value="' . $row['name'] . '"/>';
    echo '<input name="type" type="hidden" value="' . $name . '"/></form></div>';
  }echo '</div> <!-- End of '. $name . ' -->';
}
?>