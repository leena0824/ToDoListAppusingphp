<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>ToDo'S List</title>
</head>
<body>
    <h1 class="text-center py-4 my-4">ToDo'S List</h1>
    <div class="w-50 m-auto">
        <form action="add.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" placeholder="Type Here To Add On ToDo'S" required>
            </div><br>
            <button class="btn btn-success">Add To ToDo'S</button>
        </form>
    </div><br>
    <hr class="bg-dark w-50 m-auto">
    <div class="lists w-50 m-auto my-4">
        <h1>Your Lists</h1>
        <div id="lists">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.no</th>
                        <th scope="col">ToDo List</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'database.php';
                    $sql = "SELECT * FROM todos";
                    $result = mysqli_query($connection, $sql);

                    if($result) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $title = $row['title'];
                            echo "
                            <tr>
                                <td>{$id}</td>
                                <td>{$title}</td>
                                <td>
                                    <a class='btn btn-success btn-sm' href='edit.php?id={$id}' role='button'>Edit</a>
                                    <a class='btn btn-danger btn-sm' href='delete.php?id={$id}' role='button'>Delete</a>
                                </td>
                            </tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
