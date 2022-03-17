<?php
//==============================================//
session_start();
include "/openserver/domains/localhost/include/connect.php";
//==============================================//
$cart = mysqli_query($link,"SELECT * FROM `cart` WHERE 1");

if(mysqli_num_rows($cart) > 0) 
    {
        $result = mysqli_fetch_assoc($cart);
        $_SESSION['cart'] = [
            "name" => $result['name'],
        ];
    }
   ?>