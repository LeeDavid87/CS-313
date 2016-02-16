<?php
function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
}
function attempt_login($username, $password) {

    $find_user = find_user_by_username($username);
    $user = $find_user[0];

    if (isset($user)) {

        if (password_check($password, $user['password'])) {
            // password matches
            return $user;
        } else {
            // password does not match
            return false;
        }
    } else {
        // user not found
        return false;
    }
}
function password_check($password, $existing_pass) {
    if ($password === $existing_pass) {

        return true;
    } else {
        return false;
    }
}
function find_user_by_username($username) {
    global $db;

    $safe_username = $db->quote($username);

    $info = $db->query("SELECT * FROM members WHERE username = $safe_username ");
	$info = $info->fetchAll(PDO::FETCH_ASSOC);

    confirm_query($info);
    return $info;
}
function confirm_query($result_set) {
    if (!$result_set) {
        die("Database query failed.");
    }
}
function logged_in() {
    if ((isset($_SESSION['user_id'])) && ($_SESSION['user_id'] != NULL)) {
        return TRUE;
    } if (($_SESSION['user_id'] == NULL) || ($_SESSION['username']) == NULL) {
        return FALSE;
    } else {
        return FALSE;
    }
}
function confirm_logged_in() {
    $logged = logged_in();
    if ($logged == FALSE) {
        redirect_to("login.php");
    } 
}
function check_time_stamp() {
  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    redirect_to("login.php");
}
  $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}
function set_time_stamp() {
  if (!isset($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 1800) {
    // session started more than 30 minutes ago
    session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
    $_SESSION['CREATED'] = time();  // update creation time
}
}
?>