<?php
// Database configuration
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'loyalty';

try {
    // Create connection using PDO
    $conn = new PDO("mysql:host=$hostname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS $database";
    $conn->exec($sql);
    echo "Database created successfully<br>";
    
    // Select the database
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create todos table
    $sql = "CREATE TABLE IF NOT EXISTS todos (
        id INT(11) NOT NULL AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL,
        description TEXT NOT NULL,
        status TINYINT(1) NOT NULL DEFAULT 0,
        created_at DATETIME NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
    
    $conn->exec($sql);
    echo "Table todos created successfully<br>";
    
    // Insert sample data
    $sql = "INSERT INTO todos (title, description, status, created_at) VALUES
    ('Complete Project', 'Finish the todo application project by implementing all features', 0, NOW()),
    ('Buy Groceries', 'Get milk, bread, eggs, and fruits from the supermarket', 0, NOW()),
    ('Call Mom', 'Schedule a call with mom to catch up', 0, NOW()),
    ('Exercise', 'Go for a 30-minute run in the park', 0, NOW()),
    ('Read Book', 'Read chapter 5 of the programming book', 0, NOW())";
    
    $conn->exec($sql);
    echo "Sample data inserted successfully<br>";
    
    echo "Database setup completed!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

$conn = null;
?> 
