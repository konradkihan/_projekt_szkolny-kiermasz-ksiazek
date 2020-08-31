<?php

function addproduct(){
    //connect to DB
    require_once "connection.php";
    session_start();
    $connect = mysqli_connect($hostname, $login, $password, $dataBase);


    //product variables
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_state = $_POST["product_state"];
    $product_class = $_POST["product_class"];

    //seller variables
    $seller_contact = $_POST["seller_contact"];
    $seller_class = $_POST["seller_class"];
    $seller_surname = $_POST["seller_surname"];
    //creating seller's ID/Username
    $seller_name = $_POST["seller_name"];
    $seller_username = md5(($seller_name . rand(10000,99999) . $seller_contact . rand(1,200))); // final seller's ID/Username

    //querys that are put into database
    $query_to_product = "INSERT INTO product_info (name, price, state, class, sellerid) 
            VALUES ('$product_name', '$product_price', '$product_state', '$product_class', '$seller_username');";
    $query_to_seller = "INSERT INTO seller_info (sellerid, name, surname, class, contact)
            VALUES ('$seller_username', '$seller_name', '$seller_surname', '$seller_class', '$seller_contact');";
    
    //send data to database
    mysqli_query($connect, $query_to_product);
    mysqli_query($connect, $query_to_seller);
    mysqli_close($connect);
    echo("<link rel='stylesheet' href='style.css'>
    <div id='header'>
    Twoje ogłoszenie zostało przyjęte. Zapisz te dane:<br> <br>
    Kod użytkownika: " . $seller_username . " , a nazwa produktu to: " . $product_name ." 
    <h6>Zostaniesz przekierowany na inną stronę za 10 sekund!<br><br>
    <div class='menu'>
        <a href='mainpage.html'>Strona główna</a>
        <a href='shoppage.html'>Sklep</a>
        <a href='addproductpage.php'>Dodaj kolejną ofertę</a>
    </div>");
    header('Refresh: 11; mainpage.html');
    exit();
}

    addproduct();

?>
        