<? require ('DBconnect.php') ?>
<? require ('header.php') ?>
  <div>
    <span></span>
  </div>
  <? php 
    $queen =  $db->query("SELECT * FROM scriptures");
	$stud =  $db->query("SELECT * FROM scriptures");
	$litter =  $db->query("SELECT * FROM scriptures");
	$kitten =  $db->query("SELECT * FROM scriptures");
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
	  foreach ($kitten as $row)
		{
			echo '<div> Name: '. $row['name'] . ' </br> ' . 
			'Picture ' . $row['kitten_picture'] .  '</div>';
		}
	</div>
    <div id="customer">
	  foreach ($customer as $row)
		{
			echo '<div> Name: '. $row['name'] . ' </br> ';
		}
	</div>
    <div id="litter">
	  foreach ($litter as $row)
		{
			echo '<div> Name: '. $row['name'] . ' </br> ';
		}
	</div>
  ?>
<? require ('footer.php') ?>