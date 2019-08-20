<?php

require 'connection.php';

function add_item($item_serial_no, $item_name, $item_date_bought, $item_quantity, $item_vendor, $item_type){

    $sql = "INSERT INTO items (item_serial_id, item_name, item_date_bought, item_quantity, item_vendor, item_type)
            VALUES ('$item_serial_no', '$item_name', '$item_date_bought', $item_quantity, '$item_vendor', '$item_type')";

    $conn = connect();
    $result = $conn->query( $sql );
    return $result;


}


?>