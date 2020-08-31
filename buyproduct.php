<?php
    function showall(){
        //connect to DB
        require_once "connection.php";
        session_start();
        $connect = mysqli_connect($hostname, $login, $password, $dataBase);
            
        //$product_class = $_GET["product_class"];
        //$product_state = $_GET["product_state"];

        $query = "SELECT seller_info.name, product_info.name, product_info.price, product_info.state, product_info.class FROM `seller_info`, `product_info` WHERE product_info.sellerid like seller_info.sellerid";// product_info.sellerid == seller_info.sellerid";
        $result = mysqli_query($connect,$query);

        while($row = mysqli_fetch_array($result)){
            echo("<div class='post'>
                    Imię sprzedającego: ". $row[0] . "<br>
                    Nazwa produktu: ". $row[1] . "<br>
                    Cena: ". $row[2] ." PLN<br>
                    Stan produktu: ". $row[3] ."<br>
                    Klasa: ". $row[4]. "
                    </div>");
        }
    }
?>

