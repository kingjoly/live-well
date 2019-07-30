<?php

/*
 * Admin Controller

 */

session_start();


$action = filter_input(INPUT_POST, "action");
if ($action == null) {

    $action = filter_input(INPUT_GET, "action");
    if ($action == null) {
        $action = "login";
    }
}

switch ($action) {
    case "login":
        include ("view/login.php");
        break;

    case "dashboard":
        include ("view/index.php");
        break;
    
    case "add-supplement":
        include ("view/add-supplement.php");
        break;
    case "all-supplement":
        include ("view/all-supplement.php");
        break;
    
    case "charts":
        include ("view/charts.php");
        break;
    
    case "orders":
        include ("view/orders.php");
        break;
    
    case "clients":
        include ("view/clients.php");
        break;
    
    default :
        include ("view/login.php");
        break;

    
}
?>
