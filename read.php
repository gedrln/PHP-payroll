<?php 
include 'db.php';

$id = $_GET['id'];
$row = $conn->query("SELECT * FROM employees WHERE id=$id")->fetch_assoc();

$totalDays = 30 - $row['absent'];
?>

<link rel="stylesheet" href="style.css">

<div class="card">
    <h2>Employee Details</h2>
    <p><strong>ID:</strong> <?= $row['id'] ?></p>
    <p><strong>Name:</strong> <?= $row['name'] ?></p>
    <p><strong>Position:</strong> <?= $row['position'] ?></p>
    <p><strong>Rate/Day:</strong> <?= $row['rate_per_day'] ?></p>
    <p><strong>Absent:</strong> <?= $row['absent'] ?></p>
    <p><strong>Rate/Hour:</strong> <?= $row['rate_per_hour'] ?></p>
    <p><strong>Total Working Days:</strong> <?= $totalDays ?></p>

    <a href="index.php" class="btn">Back</a>
</div>