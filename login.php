<?php

session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {
    $un = $_POST['username'];
    $pass = md5($_POST['password']); 

    $a_users = array("john.doe" => "5f4dcc3b5aa765d61d8327deb882cf99", 
                     "jane.doe" => "d8578edf8458ce06fbc5bb76a58c5ca4", 
                     "johnny.doe" => "5f4dcc3b5aa765d61d8327deb882cf99"); 

    if(array_key_exists($un, $a_users) && $a_users[$un] == $pass) {
        $_SESSION['username'] = $un;

        setcookie('username', $un, time() + 1800);
        setcookie('password', $pass, time() + 1800);

        header("location:../pages/page1.php");
    } else {
        header("location:../index.php?error=1");
    }
}
