<? require ('DBconnect.php') ?>
<? require ('header.php') ?>
  <? php 
    $queen =  $db->query("SELECT * FROM queen");
	?>
  <div>
    <span></span>
  </div>

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