<?php

if (!defined("ROOT")) exit;

/**
 * Настройки подключения к базе данных
 */
define("DB_NAME", "");
define("DB_USER", "");
define("DB_PASSWORD", "");
define("DB_HOST", "");

/**
 * Ключ для взаимодействия с API системы управления
 */
define("ADMIN_API_KEY", "");

/**
 * Таймаут (в секундах) от времени получения заказа и до отправки SMS в случае отсутствия обратной свзяи
 */
define("SMS_REQUEST_TIMEOUT", 10);

?>