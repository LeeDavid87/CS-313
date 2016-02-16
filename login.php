<?php require ('includes/header.php') ?>
<?php require ('includes/sessions.php') ?>
<?php require ('includes/functions.php') ?>
<?php require ('includes/DBconnect.php') ?>
<?php 
$username = '';
if (isset($_POST['login'])) {
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $found_user = attempt_login($username, $password);

  if (isset($found_user) && $found_user != false) {
    //successful login
    $_SESSION["user_id"] = $found_user["id"];
	  $_SESSION["username"] = $found_user["username"];
    set_time_stamp();
    redirect_to('project.php');
  } else {
    //failed login
    $_SESSION['message'] = 'Username / Password Do Not Match';
  }
    
}
?>
<?php echo message(); ?>
  <h2>Login</h2>
  <form id="userLogin" action="login.php" method="post" >  
    <div>
      <table class="loginTable">  
        <tr>
          <td><span>Username</span></td>
          <td>
            <input  type="text" name="user" required="required" value="<?php echo htmlentities($username) ?>"/>
          </td>
        </tr>
        <tr>
          <td><span>Password</span></td>
          <td>
            <input  type="password" name="pass" required="required"/>
          </td>
        </tr>
      </table>
    </div>
  <div>
    <input class="button loginButton" name="login" type="submit" value="Log In" form="userLogin"/><br>   
  </div>
  </form>


<? require 'includes/footer.php'; ?>