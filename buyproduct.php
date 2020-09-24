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
            require "scripts.php";
            buyProduct();
        ?>
    </body>
</html>