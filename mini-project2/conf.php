<?php
include_once "lib.php";
list($host, $database, $user, $password) = ['localhost', 'mysqlTest', 'root', ''];

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echoline("Database connection successfully established.");
} catch (PDOException $e) {
    echoline("PDO Error: failed to connect: " . $e->getMessage() . " code  : " . $e->getCode());
    exit();
}
// if ($db) {
//     echo "Database connection successfully established.";
// } else {
//     echo "Database connection failed.";
// }
