<? require ('DBconnect.php') ?>
<? require ('header.php') ?>
  <div>
    <span></span>
  </div>
  <? php 
    $queen =  $db->query("SELECT * FROM queen");
	$stud =  $db->query("SELECT * FROM stud");
	?>
    <div id="stud">
	</div>
    <div id="queen">
	</div>
    <div id="kitten">

	</div>
    <div id="customer">

	</div>
    <div id="litter">

	</div>
<? require ('footer.php') ?>