<?php
/**
 * Database Connection Configuration
 * USB Data Blocker Waitlist
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'portfolio_labs');

// Create connection
function getDBConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Set charset to utf8mb4 for proper character support
    $conn->set_charset("utf8mb4");
    
    return $conn;
}

// Initialize database and table if they don't exist
function initializeDatabase() {
    // First, connect without selecting database
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Create database if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME . " CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
    if ($conn->query($sql) === TRUE) {
        // Database created or already exists
    } else {
        error_log("Error creating database: " . $conn->error);
    }
    
    $conn->close();
    
    // Now connect to the database
    $conn = getDBConnection();
    
    // Create table if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS waitlist (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        role VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX idx_email (email),
        INDEX idx_created_at (created_at)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    if ($conn->query($sql) === TRUE) {
        // Table created or already exists
    } else {
        error_log("Error creating table: " . $conn->error);
    }
    
    $conn->close();
}

// Initialize on first load
initializeDatabase();
?>
