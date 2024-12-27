<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'gestcars'); 
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_CHARSET', 'utf8mb4');

try {
    // Create a new PDO instance
    $pdo = new PDO(
        "mysql:host=localhost;dbname=gestcars;charset=utf8mb4", 'root', '123456'
    );
    
    
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Handle connection errors
    die("Database connection failed: " . $e->getMessage());
}

?>
