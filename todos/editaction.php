<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];

    $sql = "UPDATE todos SET title='$title' WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}
?>
