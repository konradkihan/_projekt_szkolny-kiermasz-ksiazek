<?php

function addproduct(){
    //connect to DB
    $hostname="localhost";
    $login="root";
    $password="";
    $dataBase="kiermasz";
    $connect = mysqli_connect($hostname, $login, $password, $dataBase);


    //product variables
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_state = $_POST["product_state"];
    $product_class = $_POST["product-class"];

    //seller variables
    $seller_contact = $_POST["seller_contact"];
    $seller_class = $_POST["seller_class"];
    //creating seller's ID/Username
    $seller_name = $_POST["seller_username"];
    $seller_username = ($seller_name . rand(10000,99999) . $seller_contact); // final seller's ID/Username

    //querys that are put into database
    $query_to_product = "INSERT INTO product_info (name, price, state, class, sellerid) 
            VALUES ('$product_name', '$product_price', '$product_state', '$product_class', '$seller_username');";
    $query_to_seller = "INSERT INTO seller_info (sellerid, class, contact)
            VALUES ('$seller_username', $seller_class, $seller_contact);";
}

?>