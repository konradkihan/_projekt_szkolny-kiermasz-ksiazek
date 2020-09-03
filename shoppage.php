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
                <!-- <a href="shoppage.php">Sklep</a> -->
                <a href="addproductpage.html">Dodaj ofertę</a>
            </div>
        </div>
    <!-- This one displays filters -->
    
        <div class="info">
            <div class="filters">
            <form action="buyproduct.php" method="POST">
                <select name="product_class" class="input">
                    <option value="" selected disabled hidden>Klasa</option>
                    <option value="c1">do klasy 1</option>
                    <option value="c2">do klasy 2</option>
                    <option value="c3">do klasy 3</option>
                    <option value="c4">do klasy 4</option>
                </select> <br>
                <input type="submit" value="Potwierdź"> 
            </form> 
        </div>
        
    </div>           
    
    </body>
</html>