<?php   
    //deletes product from the database basing on product code and product name, leaves user's data in DB
    function deleteproduct(){
        //conect to DB
        require_once "connection.php";
        session_start();
        $connect = mysqli_connect($hostname, $login, $password, $dataBase);

        $del_code = $_POST["del_code"];
        $del_name = $_POST["del_name"];


        $query_to_delete = "DELETE FROM product_info WHERE name like '$del_name' AND sellerid like '$del_code';";
        mysqli_query($connect, $query_to_delete);

        header("Location: index.html");
        exit();

        mysqli_close($connect);

    }
    deleteproduct();
?>