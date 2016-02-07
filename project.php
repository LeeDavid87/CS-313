<? require ('DBconnect.php') ?>
<? require ('header.php') ?>
  <?php 
    $query =  $db->query("SELECT * FROM scriptures");
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