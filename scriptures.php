<? require ('DBconnect.php') ?>
<html>
  <head>
    <title>Week 05 : Team Activity</title>
  </head>
  <body>
    <?php   
      $query =  mysql_query("SELECT * FROM scriptures");

		while($row = mysql_fetch_array($query))
		{
			echo "<tr><td>";
			echo $row['book'];
			echo "</td><td>";
			echo $row['chapter'];
			echo "<tr><td>";
			echo $row['verse'];
			echo "<tr><td>";
			echo $row['content'];
			echo "</td></tr>";
		}

echo "</table>";
    ?>
  </body>
</html>