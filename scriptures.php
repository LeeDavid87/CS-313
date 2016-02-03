<? require ('DBconnect.php') ?>
<html>
  <head>
    <title>Week 05 : Team Activity</title>
  </head>
  <body>
  <form method="get" action="#">
  <input type="text" name="bookName"/>
  <input type="submit"/>
  </form>
    <?php   
      
	if ($_GET['bookName'] != '' && $_GET['bookName'] != NULL) {
		$query =  $db->query("SELECT * FROM scriptures WHERE book = '" . $_GET['bookName'] . "'");
		foreach ($query as $row)
		{
			echo '<div>'. $row['book'] . ' ' . $row['chapter']. ' ' . $row['verse'] . ' ' . $row['content'] . '</div>';
		}
	}
	else {
		$query =  $db->query("SELECT * FROM scriptures");
		foreach ($query as $row)
		{
			echo '<div>'. $row['book'] . ' ' . $row['chapter']. ' ' . $row['verse'] . ' ' . $row['content'] . '</div>';
		}
	}
    ?>
  </body>
</html>