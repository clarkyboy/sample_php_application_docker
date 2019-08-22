<?php
    require 'db/item.php';
    $list = display_item();
?>
<html>
<head>
    <title>Table PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-3">
        <div class="card">
            <h3 class="card-title m-3">
                Items Table <a href="/"><small>Add Item</small></a>
            </h3>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <th>Item Name</th>
                    <th>Item Date Bought</th>
                    <th>Item Quantity</th>
                    <th>Item Vendor</th>
                    <th>Actions</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($list as $key=> $value){
                        echo "<tr>";
                        echo "<td>".$value['item_name']."</td>";
                        echo "<td>".$value['item_date_bought']."</td>";
                        echo "<td>".$value['item_quantity']."</td>";
                        echo "<td>".$value['item_vendor']."</td>";
                        //echo "<td>".$value['item_name']."</td>";

                        echo "<td>
                            <a href='edit.php?sn=".$value['item_serial_id']."' class='btn btn-outline-warning'>Edit</a>
                            <a href='delete.php?sn=".$value['item_serial_id']."' class='btn btn-outline-danger'>Delete</a>
                            </td>
                        ";

                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>