<?php

function setCook($uname, $mail){
    $expiry = time() + 3600 * 6;
    $user_cookie = setcookie("username", $uname, $expiry, '/');
    $mail_cookie = setcookie("email", $mail, $expiry, '/');
    return $user_cookie and $mail_cookie;
}

function setCook_id($id, $role){
    $expiry = time() + 3600 * 6;
    $id_cookie = setcookie("id", $id, $expiry, '/');
    $role_cookie = setcookie("role", $role, $expiry, '/');
    return $id_cookie and $role_cookie;
}

function set_all_cook($id, $uname, $mail, $role){
    return setCook($uname, $mail) and setCook_id($id, $role);
}

function isCookieSet(){
    if (!isset($_COOKIE['username']) or !isset($_COOKIE['email']) or empty($_COOKIE['username']) or empty($_COOKIE['email'])){
        return false;
    }
    $result = array(
            "username" => $_COOKIE['username'],
            "email" => $_COOKIE['email'],
    );
    return $result;
}

function isCookieIdSet(){
    $cookie = isCookieSet();
    
    if (!isset($_COOKIE['id']) or empty($_COOKIE['id']) or !$cookie){
        return false;
    }

    $cookie["id"]=$_COOKIE["id"];

    return $cookie;

}


function logOut(){
    setcookie("username", "", time() - 3600, '/');
    setcookie("email", "", time() - 3600, '/');
    setcookie("id", "", time() - 3600, '/');
    setcookie("role", "", time() - 3600, '/');
}

?>