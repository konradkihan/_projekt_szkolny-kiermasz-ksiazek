<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="E-Kiermasz książek ZSŁ Gdańsk 2020">
        <meta name="author" content="Krzysztof Madajczak">
        <link rel="stylesheet" href="style.css">
        <title>Sklep - Kiermasz książek ZSŁ Gdańsk</title>
    </head>
    <body>   
    <div id="header">
            Witaj na stronie e-kiermaszu ZSŁ! <br> <br>
            <div class="menu">
                <a href="index.html">Strona główna</a>
                <a href="shoppage.php">Wróć</a>
                <a href="addproductpage.html">Dodaj ofertę</a>
            </div>
        </div>
        
    </div>           
    
    <?php
        
            //connect to DB
            require_once "connection.php";
            session_start();
            $connect = mysqli_connect($hostname, $login, $password, $dataBase);
                
            $product_class = $_POST["product_class"];


            $query= "SELECT seller_info.name, product_info.name, product_info.price, product_info.state, product_info.class FROM `seller_info`, `product_info` WHERE product_info.sellerid like seller_info.sellerid AND product_info.class like '" . $product_class . "';";
            
            $result = mysqli_query($connect,$query);


            
            while($row = mysqli_fetch_array($result)){
                echo("<div class='post'>
                        Imię sprzedającego: ". $row[0] . "<br>
                        Nazwa produktu: ". $row[1] . "<br>
                        Cena: ". $row[2] ." PLN<br>
                        Stan produktu: ". $row[3] ."<br>
                        Klasa: ". $row[4][1]. "
                        </div>");
            }
        
    ?>
</body>
</html>