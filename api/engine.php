<?php

if (!defined(ROOT)) exit;

define("JSON", "application/json");
define("PNG", "image/png");

/**
 * Ошибка 400
 */
function throw_400_error($error) {
    header("HTTP/1.1 401 Bad Request");
    response(JSON, json_encode(['error' => $error]));
}

/**
 * Ошибка 401
 */
function throw_401_error() {
    header("HTTP/1.1 401 Unauthorized");
    response(JSON, json_encode(['error' => 'Unauthorized']));
}

/**
 * Ошибка 404
 */
function throw_404_error() {
    header("HTTP/1.1 404 Not Found");
    response(JSON, json_encode(['error' => 'Not found']));
}

function response_200_ok($content_type, $body) {
    header("HTTP/1.1 200 OK");
    response($content_type, $body);
}

/**
 * Сформировать ответ
 */
function response($content_type, $body) {
    header("Content-Type: " . $content_type);
    echo $body;
    exit;
}

?>