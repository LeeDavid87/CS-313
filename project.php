<? require ('DBconnect.php') ?>
<? require ('header.php') ?>
  <div>
    <span></span>
  </div>
  <?php 
    $queen =  $db->query("SELECT * FROM queen");
	$stud =  $db->query("SELECT * FROM stud");
	?>
    <div id="stud">
	<?php
	  foreach ($stud as $row)
		{
			echo '<div> Name: '. $row['name'] . ' </br> ' . 
			'Picture ' . '<img src="' . $row['stud_picture'] .
			'"/>'.  '</div>';
		}
		?>
	</div>
    <div id="queen">
	<?php
	  foreach ($queen as $row)
		{
			$id = $row['queen_id'];
			echo '<div> Name: '. $row['name'] . $row['queen_id'] .' </br> ' . 
			'Picture ' . '<img src=get.php?id=$id></div>' . 
			'Picture ' . '<img src=get.php?id=1></div>' ;
		}
		?>
	</div>
    <div id="kitten">

	</div>
    <div id="customer">

	</div>
    <div id="litter">

	</div>
<? require ('footer.php') ?>