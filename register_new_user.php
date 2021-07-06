<?php

if (isset($_POST["submit"])){
    $uid    = $_POST["uid"];
    $pwd    = $_POST["pwd"];
    $r_pwd  = $_POST["r_pwd"];

    require_once "connection.php";
    require_once "functions.php"; 
    
    if (empty_input_signup($uid, $pwd, $r_pwd) !== false) {
        header ("location:register.php?error=emptyinput");
        exit();
    }

    if (invalid_uid($uid) !== false) {
        header ("location:register.php?error=invaliduid");
        exit();
    }

    if (pwd_match($pwd, $r_pwd) !== false) {
        header ("location:register.php?error=pwdnomatch");
        exit();
    }

    if (uid_exists($con, $uid) !== false) {
        header ("location:register.php?error=usernametaken");
        exit();
    }

    create_user($con, $uid, $pwd);

}

else {
    header ("location:Login.php");
}