<?php

    include("connect.php"); 

    $star_name = $_POST['star_name'];
    $star_description = $_POST['star_description'];
    $deliery_phone_number = $_POST['deliery_phone_number'];
    $deliery_user_name = $_POST['deliery_user_name'];
    $delivery_city = $_POST['delivery_city'];
    $delivery_address = $_POST['delivery_address'];
    $star_coordinates = $_POST['star_coordinates'];
    $delivery_email_address = $_POST['delivery_email_address'];
  
    //execute sql




    $query = "SELECT * FROM orders WHERE star_coordinates = '$star_coordinates' AND order_status = 'Delivered'";

    $result = mysqli_query($conn,$query);
    
    if($row = mysqli_fetch_array($result)) {

        echo false;

    }else{
        $sql = "INSERT INTO orders

        (star_name,
        star_description,
        delivery_phone_number,
        delivery_user_name,
        delivery_city,
        delivery_address,
        delivery_email_address,
        star_coordinates) 

        VALUES (
        '$star_name',
        '$star_description',
        '$deliery_phone_number',
        '$deliery_user_name',
        '$delivery_city',
        '$delivery_address',
        '$delivery_email_address',
        '$star_coordinates'
        )";

        // if everything is alrigh
        if($conn->query($sql)){
            echo true;
        } 
    }


?>