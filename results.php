<?php
  session_start();
  $myfile = fopen("surveydata.txt", "a+"); 
  $recoveredData = file_get_contents('surveydata.txt');
  $recoveredArray = unserialize($recoveredData);
  $recoveredArray[$_POST["color"]]++;
  $recoveredArray[$_POST["food"]]++;
  $recoveredArray[$_POST["snow"]]++;
  $recoveredArray[$_POST["movie"]]++;
  
  if ($_POST['submitted'] == 1) {
    $_SESSION['voted'] = 'voted';
  }
  // colors
  $color = $recoveredArray["red"] + $recoveredArray["blue"] + $recoveredArray["green"] + $recoveredArray["yellow"];
  
  // Meats
  $meat = $recoveredArray["chicken"] + $recoveredArray["beef"] + $recoveredArray["pork"] + $recoveredArray["fish"];
  
  // Snowboard
  $snow = $recoveredArray["snowboard"] + $recoveredArray["skii"];
  
  // Movies
  $movie = $recoveredArray["horror"] + $recoveredArray["comedy"] + $recoveredArray["drama"] + $recoveredArray["romance"];
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <title>CS - 313 Assignments</title>
  <link href="surveystyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="siteContainer">
    <div id="navBar">
      <nav>
        <div class="container">
          <ul class="navbarleft" id="navBarLink">
            <li class="navlink"><a class="navlink" href="index.html">Home</a></li>
            <li class="navlink"><a class="navlink" href="#about">About</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div id="formHolder">
        <h2>Favorite Color</h2>
        <table id="colorTable">
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["red"]/$color)*100,2); ?>">Red</p>
            <progress max="100" value="<?php echo round(($recoveredArray["red"]/$color)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["blue"]/$color)*100,2); ?>">Blue</p>
            <progress max="100" value="<?php echo round(($recoveredArray["blue"]/$color)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["green"]/$color)*100,2); ?>">Green</p>
            <progress max="100" value="<?php echo round(($recoveredArray["green"]/$color)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["yellow"]/$color)*100,2); ?>">Yellow</p>
            <progress max="100" value="<?php echo round(($recoveredArray["yellow"]/$color)*100,2); ?>"></td>
          </tr>
        </table>
        <h2>Favorite Meat</h2>
        <table id="foodTable">
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["chicken"]/$meat)*100,2); ?>">Chicken</p>
            <progress max="100" value="<?php echo round(($recoveredArray["chicken"]/$meat)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["beef"]/$meat)*100,2); ?>">Beef</p>
            <progress max="100" value="<?php echo round(($recoveredArray["beef"]/$meat)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["pork"]/$meat)*100,2); ?>">Pork</p>
            <progress max="100" value="<?php echo round(($recoveredArray["pork"]/$meat)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["fish"]/$meat)*100,2); ?>">Fish</p>
            <progress max="100" value="<?php echo round(($recoveredArray["fish"]/$meat)*100,2); ?>"></td>
          </tr>
        </table>

        <h2>Snowboard or Skii</h2>
        <table id="snowTable">
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["snowboard"]/$snow)*100,2); ?>">Snowboard</p>
            <progress max="100" value="<?php echo round(($recoveredArray["snowboard"]/$snow)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["skii"]/$snow)*100,2); ?>">Skii</p>
            <progress max="100" value="<?php echo round(($recoveredArray["skii"]/$snow)*100,2); ?>"></td>
          </tr>
        </table>

        <h2>Movie types</h2>
        <table id="movieTable">
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["horror"]/$movie)*100,2); ?>">Horror</p>
            <progress max="100" value="<?php echo round(($recoveredArray["horror"]/$movie)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["comedy"]/$movie)*100,2); ?>">Comedy</p>
            <progress max="100" value="<?php echo round(($recoveredArray["comedy"]/$movie)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["drama"]/$movie)*100,2); ?>">Drama</p>
            <progress max="100" value="<?php echo round(($recoveredArray["drama"]/$movie)*100,2); ?>"></td>
          </tr>
          <tr>
			<td><p style="width:50%" data-value="<?php echo round(($recoveredArray["romance"]/$movie)*100,2); ?>">Romance</p>
            <progress max="100" value="<?php echo round(($recoveredArray["romance"]/$movie)*100,2); ?>"></td>
          </tr>
        </table>
    </div>
  </div>
  <?php
    $serializedData = serialize($recoveredArray);
    file_put_contents('surveydata.txt', $serializedData);
  ?>
</body>
</html>