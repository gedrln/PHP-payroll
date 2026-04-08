<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>Search Employee</h2>

<form method="GET">
    <input type="text" name="search" placeholder="Enter ID or Name" required>
    <button type="submit">Search</button>
</form>

<?php
if(isset($_GET['search'])){
    $search = $_GET['search'];

    $result = $conn->query("SELECT * FROM employees 
                           WHERE id='$search' 
                           OR name LIKE '%$search%'");

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $totalDays = 30 - $row['absent'];
?>
<div class="card">
    <p><strong>ID:</strong> <?= $row['id'] ?></p>
    <p><strong>Name:</strong> <?= $row['name'] ?></p>
    <p><strong>Position:</strong> <?= $row['position'] ?></p>
    <p><strong>Rate/Day:</strong> <?= $row['rate_per_day'] ?></p>
    <p><strong>Absent:</strong> <?= $row['absent'] ?></p>
    <p><strong>Rate/Hour:</strong> <?= $row['rate_per_hour'] ?></p>
    <p><strong>Total Working Days:</strong> <?= $totalDays ?></p>

    <a href="read.php?id=<?= $row['id'] ?>" class="btn">View</a>
    <a href="update.php?id=<?= $row['id'] ?>" class="btn edit">Edit</a>
</div>
<?php
        }
    } else {
        echo "<p>No employee found.</p>";
    }
}
?>