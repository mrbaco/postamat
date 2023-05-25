<?php

if (!defined(ROOT)) exit;

/**
 * Настройки подключения к базе данных
 */
define("DB_NAME", "hackathon");
define("DB_USER", "lct");
define("DB_PASSWORD", "PHsVi3E3t+Nj");
define("DB_HOST", "localhost");

/**
 * Ключ для взаимодействия с API системы управления
 */
define("ADMIN_API_KEY", "d735346a-d836-40c3-8662-6e9b41991b10");

/**
 * Таймаут (в секундах) от времени получения заказа и до отправки SMS в случае отсутствия обратной свзяи
 */
define("SMS_REQUEST_TIMEOUT", 10);

?>