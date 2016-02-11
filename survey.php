<?php session_start();
  $myfile = fopen("surveydata.txt", "a+"); 
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <title>Survey</title>
  <link href="css/surveystyle.css" rel="stylesheet" type="text/css" />
  <script src="week07.js" type="text/javascript"></script>
  <style type="text/css"></style>
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
    <?php  $test = "yes";
     if ($_SESSION['voted'] != "voted") {
     echo '<form action="results.php" id="checkoutForm" onreset="resetForm()" onsubmit="submitForm()" method="post">
        <h2>What is your Favorite color</h2>
        <table id="colorTable">
          <tr>
            <td><input type="radio" name="color" value="red"/></td>
            <td><span>Red</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="color" value="blue"/></td>
            <td><span>Blue</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="color" value="green"/></td>
            <td><span>Green</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="color" value="yellow"/></td>
            <td><span>Yellow</span></td>
          </tr>
        </table>

        <h2>What type of meat do you like</h2>
        <table id="foodTable">
          <tr>
            <td><input type="radio" name="food" value="chicken"   /></td>
            <td><span>Chicken</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="food" value="beef"   /></td>
            <td><span>Beef</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="food" value="pork"   /></td>
            <td><span>Pork</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="food" value="fish"   /></td>
            <td><span>Fish</span></td>
          </tr>
        </table>

        <h2>Snowboard or Skii</h2>
        <table id="snowTable">
          <tr>
            <td><input type="radio" name="snow" value="snowboard"   /></td>
            <td><span>Snowboard</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="snow" value="skii"   /></td>
            <td><span>Skii</span></td>
          </tr>
        </table>

        <h2>What type of movies do you like</h2>
        <table id="movieTable">
          <tr>
            <td><input type="radio" name="movie" value="horror"   /></td>
            <td><span>Horror</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="movie" value="comedy"   /></td>
            <td><span>Comedy</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="movie" value="drama"   /></td>
            <td><span>Drama</span></td>
          </tr>
          <tr>
            <td><input type="radio" name="movie" value="romance"   /></td>
            <td><span>Romance</span></td>
          </tr>
        </table>
        <button type="submit" name="submitted" value="1" class="button">Submit</button>
        <button class="button" name="submitted" value="0" onclick="window.open(results.php, "_self")">Results</button>

      </form>'; }
     else { header("Location: results.php"); }
     ?>
    </div>
  </div>
</body>
</html>