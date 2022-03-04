<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'codechallange');


try {
    $pdo = new PDO("mysql:host=". DB_HOST.";dbname=". DB_NAME."", DB_USER, DB_PASS);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8");
 } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

