<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PC314 - LOGIN</title>
</head>
<body>

<?php

header('Content-type:text/html; charset=utf-8');
// open session
session_start();

// process the login info
if (isset($_POST['login'])) {
    # receive login info
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    // judge the correctness
    if (($username == '') || ($password == '')) {
        // if null, then alert the warning and return to log in page after 3 seconds
        header('refresh:3; url=login.html');
        echo "The username and password cannot left blank, this page will jump to log in after 3s, please fill the info correctly.";
        exit;
    } elseif (($username != 'admin') || ($password != 'password')) {
        # wrong password
        header('refresh:3; url=login.html');
        echo "The username or password is wrong, this page will jump to log in after 3s, please fill the info correctly.";
        exit;
    } elseif (($username = 'admin') && ($password = 'password')) {
        # All correct then save the user info into session
        $_SESSION['username'] = $username;
        $_SESSION['islogin'] = 1;
        // if the auto log in is checked, then save the cookie for seven days
        if ($_POST['remember'] == "yes") {
            setcookie('username', $username, time() + 7 * 24 * 60 * 60);
            setcookie('code', md5($username . md5($password)), time() + 7 * 24 * 60 * 60);
        } else {
            // if not then delete the cookie
            setcookie('username', '', time() - 999);
            setcookie('code', '', time() - 999);
        }
        // jump to the user page after processing
        header('location:users.php');
    }
}

?>
</body>