<?php
include 'database.php';
$id = $_GET['id'];

$sql = "DELETE FROM todos WHERE id=$id";
$result = mysqli_query($connection, $sql);

if ($result) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
?>
