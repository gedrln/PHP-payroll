<?php
include 'config.php';

$id = intval($_GET['id']);
$query = "DELETE FROM employees WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>