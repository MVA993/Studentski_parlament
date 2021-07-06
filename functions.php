<?php

function empty_input_signup($uid, $pwd, $r_pwd) {
    $result;
    if (empty($uid) || empty($pwd) || empty($r_pwd)) {
        $result     = true; 
    }
    else {
        $result     = false;
    }
    return $result; 
}

function invalid_uid($uid) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9.!?]*$/", $uid)) {
        $result     = true; 
    }
    else {
        $result     = false;
    }
    return $result; 
}

function pwd_match($pwd, $r_pwd) {
    $result;
    if ($pwd !== $r_pwd) {
        $result     = true; 
    }
    else {
        $result     = false;
    }
    return $result; 
}

function uid_exists($con, $uid) {
    $sql    = "SELECT * 
               FROM members 
               WHERE membername = ?;";
    
    $stmt   = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("location:register.php?error=stmtfailed");
        exit;
    } 
    
    mysqli_stmt_bind_param($stmt, "s", $uid);
    mysqli_stmt_execute($stmt);

    $result_data    = mysqli_stmt_get_result($stmt);

    if (mysqli_fetch_assoc($result_data)) {
    }
    else {
        $result     = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function create_user($con, $uid, $pwd) {
    $sql    = "INSERT INTO members (membername, password)
               VALUES (?, ?);";
    
    $stmt   = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("location:register.php?error=stmtfailed");
        exit;
    } 
    
    mysqli_stmt_bind_param($stmt, "ss", $uid, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header ("location:Login.php?error=none");
    exit();
}