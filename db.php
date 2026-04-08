<?php
$conn = new mysqli("localhost", "root", "", "payroll_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!-- CREATE DATABASE payroll_db;
USE payroll_db;

CREATE TABLE employees (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 position VARCHAR(100),
 rate_per_day DECIMAL(10,2),
 absent INT,
 rate_per_hour DECIMAL(10,2)
); -->