<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];

    $sql = "INSERT INTO todos (title) VALUES ('$title')";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}
?>
