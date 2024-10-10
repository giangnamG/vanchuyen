<?php

require 'vendor/autoload.php'; // Đảm bảo đường dẫn tới autoload.php là chính xác


use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;

// Tải file .env
$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

// Cấu hình Eloquent với các biến môi trường từ file .env
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => $_ENV['DB_CONNECTION'],
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_DATABASE'],
    'username'  => $_ENV['DB_USERNAME'],
    'password'  => $_ENV['DB_PASSWORD'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
