<?php include 'includes/session.php'; ?>
<?php require 'includes/functions.php'; ?>
<?php require 'includes/dbConnect.php'; ?>
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

<?php $title = 'Login'; ?>
<?php include 'includes/header.php'; ?>

<?php echo message(); ?>

<main >
    <div >
        <div >&nbsp;</div>
        <div >
            <div >
                <h3 >Log In</h3>

                <form id="userLogin" action="login.php" method="post" >
                    
                        <p>
                            <label>Username:</label>
                            <input  type="text" name="user" required="required" value="<?php echo htmlentities($username) ?>"/>
                        </p>
                        <p>
                            <label>Password</label>
                            <input  type="password" name="pass" required="required"/>
                        </p>
                    

                    <p><input  name="login" type="submit" value="Log In" form="userLogin"/> </p><br>
                </form>
            </div>
        </div>
    </div>

</main>

<?php include 'includes/footer.php'; ?>