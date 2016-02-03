<? require ('DBconnect.php') ?>
<html>
  <head>
    <title>Week 05 : Team Activity</title>
  </head>
  <body>
    <?php   
      $query =  $db->query("SELECT * FROM scriptures");
	
	foreach ($query as $row)
	{
		echo '<div>'. $row['book'] . ' ' . $row['chapter']. ' ' . $row['verse'] . ' ' . $row['content'] . '</div>';
	}
    ?>
  </body>
</html>