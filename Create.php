<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>Add Employee</h2>

<form method="POST">
    <input name="name" placeholder="Name" required>
    <input name="position" placeholder="Position" required>
    <input type="number" name="rate_day" placeholder="Rate per Day" required>
    <input type="number" name="absent" placeholder="Days Absent" required>
    <input type="number" name="rate_hour" placeholder="Rate per Hour" required>
    <button name="save">Save</button>
</form>

<?php
if(isset($_POST['save'])){
    $conn->query("INSERT INTO employees(name, position, rate_per_day, absent, rate_per_hour)
                  VALUES('{$_POST['name']}','{$_POST['position']}','{$_POST['rate_day']}',
                         '{$_POST['absent']}','{$_POST['rate_hour']}')");
    header("Location: index.php");
}
?>