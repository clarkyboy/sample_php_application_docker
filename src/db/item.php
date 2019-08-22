<?php

require 'connection.php';

function add_item($item_serial_no, $item_name, $item_date_bought, $item_quantity, $item_vendor, $item_type){

    $sql = "INSERT INTO items (item_serial_id, item_name, item_date_bought, item_quantity, item_vendor, item_type) VALUES ('$item_serial_no', '$item_name', '$item_date_bought', '$item_quantity', '$item_vendor', '$item_type')";

    $conn = connect();
    $result = $conn->query( $sql );
    return $result;


}

function display_item(){
    $sql = "SELECT * FROM items WHERE item_status != 'D'";
    $conn = connect();
    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    return $rows;
}

function get_item($serial_id){
    $sql = "SELECT * FROM items WHERE item_serial_id = '$serial_id'";
    $conn = connect();
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row;
}

function update_item($item_serial_no, $item_name, $item_date_bought, $item_quantity, $item_vendor, $item_type){
    $sql = "UPDATE items SET item_name = '$item_name', item_date_bought = '$item_date_bought', item_quantity = '$item_quantity',
            item_vendor = '$item_vendor', item_type='$item_type' WHERE item_serial_id = '$item_serial_no'";
    $conn = connect();
    $result = $conn->query($sql);
    return $result;
}

function delete_item($item_serial_no){
    $sql = "UPDATE items SET item_status = 'D' WHERE item_serial_id = '$item_serial_no'";
    $conn = connect();
    $result = $conn->query($sql);
    return $result;
}

?>