<? require ('DBconnect.php') ?>
<? require ('header.php') ?>
  <div>
    <span></span>
  </div>
  <?php 
    $queen =  $db->query("SELECT * FROM queen");
	$stud =  $db->query("SELECT * FROM stud");
    <div id="stud">
	  foreach ($stud as $row)
		{
			echo '<div> Name: '. $row['name'] . ' </br> ' . 
			'Picture ' . $row['stud_picture'] .  '</div>';
		}
	</div>
    <div id="queen">
	  foreach ($queen as $row)
		{
			echo '<div> Name: '. $row['name'] . ' </br> ' . 
			'Picture ' . $row['queen_picture'] .  '</div>';
		}
	</div>
    <div id="kitten">

	</div>
    <div id="customer">

	</div>
    <div id="litter">

	</div>
  ?>
<? require ('footer.php') ?>