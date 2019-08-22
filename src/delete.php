<?php
    require 'db/item.php';
    $serial_id = $_GET['sn'];

    if(isset($_POST['delete'])){
        $result = delete_item($serial_id);
        if($result === true)
            header("Location: /table.php");
        else
            echo "Unsuccessfully deleted!";
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h3 class="card-title">
                Are you sure you are going to delete?
            </h3>
            <div class="card-body">
                <form action="" method="post">
                    <label for="">Deleting...</label>
                    <input type="submit" value="Delete Item" name="delete" class="btn btn-outline-danger">
                </form>
            </div>
        </div>
    </div>
</body>
</html>