<?php
$host = 'localhost';
$username = 'admin';
$password = 'admin'; // Add your database password here if needed
$database = 'crud_db';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}
