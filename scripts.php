<?php
function addProduct(){
    //connect to DB
    require "connection.php";
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
    header('Location: index.html');
    echo("AAAAAAAAA");
}


//deletes product from the database basing on product code and product name, leaves user's data in DB
        //  INITIALLY DELETED   \\
// function deleteProduct(){
//     //conect to DB
//     require "connection.php";
//     session_start();
//     $connect = mysqli_connect($hostname, $login, $password, $dataBase);

//     $del_code = $_POST["del_code"];
//     $del_name = $_POST["del_name"];


//     $query_to_delete = "DELETE FROM product_info WHERE name like '$del_name' AND sellerid like '$del_code';";
//     mysqli_query($connect, $query_to_delete);

//     header("Location: index.html");
//     exit();

//     mysqli_close($connect);

// }


function buyProduct(){
    //connect to DB
    require "connection.php";
    session_start();
    $connect = mysqli_connect($hostname, $login, $password, $dataBase);
        
    $product_class = $_POST["product_class"];

    $query= "SELECT seller_info.name, product_info.name, seller_info.contact, product_info.price, product_info.state,
            product_info.class FROM `seller_info`, `product_info` WHERE product_info.sellerid like seller_info.sellerid AND product_info.class like '" . $product_class . "';";
    
    $result = mysqli_query($connect,$query);


    while($row = mysqli_fetch_array($result)){
        echo("<div class='post'>
                Imię sprzedającego: ". $row[0] . "<br>
                Nazwa produktu: ". $row[1] . "<br>
                Kontakt" . $row[2] . "<br>
                Cena: ". $row[3] ." PLN<br>
                Stan produktu: ". $row[4] ."<br>
                Klasa: ". $row[5][1]. "
                </div>");
    }

}


function addProductSelect(){
    require "connection.php";
                    $connect = mysqli_connect($hostname, $login, $password, $dataBase);
                    $query = "SELECT book_name FROM books;";
                    $result = mysqli_query($connect, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo("<option>".$row[0]."</option>");
                    }
                    mysqli_close($connect);
}

function reChaptcha(){
    //reCAPTCHA lib + secret key
    require "recaptchalib.php";
    $secretKey = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";
    
    //response and secret check
    $response = null;
    $reCaptcha = new ReCaptcha($secretKey);
    
    if ($_POST["g-recaptcha-response"]){
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }
    if ($response != null && $response->success) {
        return true;
        echo("OK");
    }
    else{
        return false;
        echo("FAIL");
    }
}

function execute(){
    if(isset($_POST['addProduct'])){
        if(reChaptcha()){
            addProduct();
        }
    }

}

execute();

?>