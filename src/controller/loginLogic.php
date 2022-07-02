<?php 
//login user
$note = '';
(isset($_POST['login']) && $_POST['username'] !== "" && $_POST['password'] !== '')
    ? ((($_POST['username'] == "Guest" && $_POST['password'] == "iamaguest")) || ((($_POST['username'] == "Admin" && $_POST['password'] == "iamaadmin"))) //loggin details
        ? $_SESSION['logged_in'] = true  && $_SESSION['username'] = $_POST['username']
        : $note = 'Invalid username or password')
    : null;

//logout
(isset($_POST['logout']) && $_POST['logout'] == 'Logout')
    ?  session_destroy() && session_start()
    : null;
    ?>