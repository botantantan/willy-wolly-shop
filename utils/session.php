<?php
static $key = "message";

function set_message($message) {
    global $key;
    $_SESSION[$key] = $message;
}

function get_message_and_remove() {
    global $key;
    if (!isset($_SESSION[$key])) {
        return false;
    }

    $result = $_SESSION[$key];
    unset($_SESSION[$key]);
    return $result;
}