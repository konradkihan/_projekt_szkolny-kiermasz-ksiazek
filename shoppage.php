<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="E-Kiermasz książek ZSŁ Gdańsk 2020">
        <meta name="author" content="Krzysztof Madajczak / EwQ">
        <link rel="stylesheet" href="style.css">
        <title>Sklep - Kiermasz książek ZSŁ Gdańsk</title>
    </head>
    <body>
        <div id="header">
            Witaj na stronie e-kiermaszu ZSŁ! <br> <br>
            <div class="menu">
                <a href="mainpage.html">Strona główna</a>
                <!-- <a href="shoppage.html">Sklep</a> -->
                <a href="addproductpage.html">Dodaj ofertę</a>
            </div>
        </div>
    <!-- This one displays filters -->
    <form action="buyproduct.php" method="GET">
        <div class="info">
            <div class="filters">
                <select name="product_class" class="input">
                    <option value="" selected disabled hidden>Klasa</option>
                    <option value="1">do klasy 1</option>
                    <option value="2">do klasy 2</option>
                    <option value="3">do klasy 3</option>
                    <option value="4">do klasy 4</option>
                </select>
            </div>
            <button id="button">Potwierdź</button>
        </div>
    </form>        
    <!-- This one displays options that match filters -->
    <div class="info">
        <?php include "buyproduct.php";
            showall();
        ?>
    </div>
    </body>
</html>