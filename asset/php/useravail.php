<?php
    include_once "db.php";
    if($_SERVER['REQUEST_METHOD'] !== "POST") {
        return;
    }

    if (!isset($_POST['username'])){
        http_response_code(400);
        echo "Username must not empty!";
        return;
    }

    $conn = get_db_conn();
    if(!$conn){
        http_response_code(500);
        echo "Unable connect to database";
        return;
    }

    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $query = "SELECT username from accounts where username = '". $username ."'; ";
    $res = mysqli_query($conn,$query);

    if ($res === FALSE) {
        http_response_code(500);
        echo "Unable to execute query";
        return;
    }
    
    $result = array(
        "available" => mysqli_num_rows($res) == 0,
    );

    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode($result);
?>