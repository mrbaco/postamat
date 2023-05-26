<?php

if (!defined("ROOT")) exit;

if ($request_method == "GET") {
    if ($param != "") {
        $result = $mysqli->query("SELECT * FROM `categories` WHERE `ID` = '" . intval($param) . "';");
        if ($result->num_rows == 0) {
            throw_404_error();
        }
    } else {
        $result = $mysqli->query("SELECT * FROM `categories`;");
    }
    
    response(JSON, json_encode($result->fetch_all(MYSQLI_ASSOC)));
}

if ($request_method == "POST") {
    $result = $mysqli->query("INSERT INTO `categories` (`NAME`) VALUES ('" . htmlspecialchars($request_body->name) . "');");
    response_200_ok(JSON, json_encode(['id' => $mysqli->insert_id]));
}

?>