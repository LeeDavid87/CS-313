<? require ('includes/header.php') ?>
<? include 'includes/session.php'; ?>
<? require 'includes/functions.php'; ?>
<? require ('includes/DBconnect.php') ?>
<?php 
$username = '';
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $found_user = attempt_login($username, $password);
    
    if (isset($found_user) && $found_user != false) {
        //successful login
        //echo '<br/>Redirect Login Success';
        $_SESSION["user_id"] = $found_user["id"];
	$_SESSION["username"] = $found_user["username"];
        redirect_to('collection.php');
    } else {
        //failed login
        $_SESSION['message'] = 'Username / Password Do Not Match';
    }
    
}
?>
<?php echo message(); ?>

    <form id="userLogin" action="login.php" method="post" >                   
      <label>Username:</label>
      <input  type="text" name="user" required="required" value="<?php echo htmlentities($username) ?>"/>

      <label>Password</label>
      <input  type="password" name="pass" required="required"/>                  
      <input  name="login" type="submit" value="Log In" form="userLogin"/><br>
    </form>



<? require 'includes/footer.php'; ?>