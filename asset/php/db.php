<?php

    function get_db_conn() {
        static $conn;

        if (isset($conn)) {
            return $conn;
        }
        
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "willywonka";

        $conn = mysqli_connect($host,$user,$password, $dbname);
        return $conn;
    }
?>