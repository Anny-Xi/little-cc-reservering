<?php

//Define DB credentials
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'littlecc';

//Paths
const BASE_PATH = '/little-cc-reservering/';
const INCLUDES_PATH = __DIR__ . '/';

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function (int $severity, string $message, string $file, int $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
});
