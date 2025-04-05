<?php
// Database configuration
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_todo';

// Create connection
$conn = new mysqli($hostname, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db($database);

// Create todos table
$sql = "CREATE TABLE IF NOT EXISTS todos (
    id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    status TINYINT(1) NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if ($conn->query($sql) === TRUE) {
    echo "Table todos created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert sample data
$sql = "INSERT INTO todos (title, description, status, created_at) VALUES
('Complete Project', 'Finish the todo application project by implementing all features', 0, NOW()),
('Buy Groceries', 'Get milk, bread, eggs, and fruits from the supermarket', 0, NOW()),
('Call Mom', 'Schedule a call with mom to catch up', 0, NOW()),
('Exercise', 'Go for a 30-minute run in the park', 0, NOW()),
('Read Book', 'Read chapter 5 of the programming book', 0, NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Sample data inserted successfully<br>";
} else {
    echo "Error inserting sample data: " . $conn->error . "<br>";
}

$conn->close();
echo "Database setup completed!";
?> 
