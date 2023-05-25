<?php

if (!defined(ROOT)) exit;

if ($request_method == "GET") {
    if ($param != "") {
        $result = $mysqli->query("SELECT * FROM `categories` WHERE `ID` = '" . intval($param) . "';");
    } else {
        $result = $mysqli->query("SELECT * FROM `categories`;");
    }

    response(JSON, json_encode($result->fetch_assoc()));
}

if ($request_method == "POST") {
    $result = $mysqli->query("INSERT INTO `categories` (`NAME`) VALUES ('" . htmlspecialchars($request_body['name']) . "');");
    response_200_ok(JSON, json_encode(['id' => $mysqli->insert_id]));
}

?>