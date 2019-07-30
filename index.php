<?php

session_start();


$action = filter_input(INPUT_POST, "action");
if ($action == null) {

    $action = filter_input(INPUT_GET, "action");
    if ($action == null) {
        $action = "Home";
    }
}

switch ($action) {
    case "home":
        include ("view/home.php");
        break;

    case "products" :
        include ("view/all-products.php");
        break;
    
    case "register" :
        include ("view/register.php");
        break;
    
    case "update" :
        include ("view/update.php");
        break;
    
    case "cart" :
        include ("view/cart.php");
        break;
    
    default :
        include ("view/home.php");
        break;
}
?>