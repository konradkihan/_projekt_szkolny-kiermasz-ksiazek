<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="E-Kiermasz książek ZSŁ Gdańsk 2020">
        <meta name="author" content="Krzysztof Madajczak">
        <link rel="stylesheet" href="style2.css">
        <title>e-kiermasz książek ZSŁ Gdańsk</title>
    </head>
    
    <div id="header">Witaj na stronie wprowadzania oferty! </div>
        <div class="menu">
			<ol>
				<li><a href="index.html">Strona główna</a></li>
				<li><a href="shoppage.php">Sklep</a></li>

			</ol>
            <!-- <a href="addproductpage.html">Dodaj ofertę</a> -->
        </div>
    <div style="clear: both;"></div> 
    
    <form action="addproduct.php" method="POST" id="myForm">
        <div class="info">
            <h3>Tutaj podaj dane o produkcie, który chcesz sprzedać:</h3>
            
            <select name="product_name", class="input" required>
                <option value="" selected disabled hidden>Przedmiot</option>
                <!--<?php
                    // require_once "connection.php";
                    // $connect = mysqli_connect($hostname, $login, $password, $dataBase);
                    // $query = "SELECT book_name FROM books;"; //TODO push to addproduct.php
                    // $result = mysqli_query($connect, $query);
                    // while($row = mysqli_fetch_array($result)){
                    //     echo("option value=".$row[0].">".$row[0]."</option>");
                    // }
                    // mysqli_close($connect)
                ?>-->
            </select> <br>

            <input type="number" name="product_price" class="input" placeholder="Cena [PLN]" required> <br>
            <select name="product_state" class="input" required>
                <option value="" selected disabled hidden>Stan produktu</option>
                <option value="Bardzo dobry">Bardzo dobry</option>
                <option value="Dobry">Dobry</option>
                <option value="Poprawny">Poprawny</option>
            </select> <br>
            <select name="product_class" class="input">
                <option value="" selected disabled hidden>Do której klasy przeznaczony jest produkt</option>
                <option value="c1">do klasy 1</option>
                <option value="c2">do klasy 2</option>
                <option value="c3">do klasy 3</option>
                <option value="c4">do klasy 4</option>
            </select>
            <!-- <input type="image" name="product_image" class="input"> -->
        </div>

        <div class="info">
            <h3>Tutaj podaj informacje o sobie:</h3>
            <input type="text" name="seller_contact" class="input" placeholder="Kontakt do Ciebie" onclick="changeContact()" required> <br>
            <input type="text" name="seller_username" class="input" placeholder="Nazwa użytkownika" required> <br>
            <input type="text" name="seller_name" class="input" placeholder="Imię" required> <br>
            <input type="text" name="seller_surname" class="input" placeholder="Nazwisko" required> <br>
            <select name="seller_class" class="input">
                <option value="" selected disabled hidden>Twoja obecna klasa</option>
                <option value="c2">2</option>
                <option value="c3">3</option>
                <option value="c4">4</option>
            </select> <br>
            <button id="button">Potwierdź dodanie</button>
        </div>
    </form>   

</html>

<script>
    //just a simple note for user
    function changeContact(){
        alert("Możesz tu podać dowolną formę kontaktu - email, numer telefonu, czy też Tag do facebooka. Pamiętaj jednak, że TE DANE BĘDĄ WIDOCZNE DLA WSZYSTKICH, którzy odwiedzą tę stronę. Wprowadzając dane zgadzasz się na regulamin polityki prywatności strony i regulamin prowadzenia kiermaszu.")
    }
</script>