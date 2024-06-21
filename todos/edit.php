<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>ToDo'S List App!</title>
</head>
<body>
    <h1 class="text-center py-4 my-4">Update Your ToDo'S List</h1>
    <?php
    include 'database.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM todos WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    if($result) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
    }
    ?>
    <div class="w-50 m-auto">
        <form action="editaction.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="<?php echo $title; ?>" placeholder="Edit Here Your ToDo'S" required>
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
            </div><br>
            <button class="btn btn-success">Update ToDo'S</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
