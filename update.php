<?php 
include 'db.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM employees WHERE id=$id")->fetch_assoc();
?>

<link rel="stylesheet" href="style.css">

<h2>Update Employee</h2>

<form method="POST">
    <input name="name" value="<?= $data['name'] ?>" required>
    <input name="position" value="<?= $data['position'] ?>" required>
    <input type="number" name="rate_day" value="<?= $data['rate_per_day'] ?>" required>
    <input type="number" name="absent" value="<?= $data['absent'] ?>" required>
    <input type="number" name="rate_hour" value="<?= $data['rate_per_hour'] ?>" required>
    <button name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    $conn->query("UPDATE employees SET
        name='{$_POST['name']}',
        position='{$_POST['position']}',
        rate_per_day='{$_POST['rate_day']}',
        absent='{$_POST['absent']}',
        rate_per_hour='{$_POST['rate_hour']}'
        WHERE id=$id");

    header("Location: index.php");
}
?>