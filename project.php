<? require ('DBconnect.php') ?>
<? require ('header.php') ?>
  <div>
    <span>Leo does not currently have a photo uploaded, it is not just a broken link.</span></br>
	<span>Kitten pictures are comming soon, once they are sorted out.</span></br>
	<span>Rest of the sections are designed, just not uploaded.</span></br>
	<span>pulled photos from database.</span></br>
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
			echo '<div> Name: '. $row['name'] . ' </br> ' . 
			'Picture ' . '<img src=get.php?id=' . $row['queen_id'] . '></div>';
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