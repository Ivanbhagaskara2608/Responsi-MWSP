<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");

    include 'koneksi.php';

    $result = array();

    $query = mysqli_query($con, "SELECT * FROM products");
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    
    echo json_encode(array('result' => $result), JSON_NUMERIC_CHECK);
?>
