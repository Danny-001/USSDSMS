<?php

//http://fc32-197-232-61-224.ngrok.io/USSDSMS/index.php


include_once 'menu.php';

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$isRegistered = false;
$menu = new menu($text, $sessionId);
if($text =="" && !$isRegistered){
    //user is registered and string is empty
    $menu->mainMenuRegistered();
}elseif($text =="" && $isRegistered){
    //user is unregistred and string is empty
    $menu->mainMenuUnregistered();
}elseif($isRegistred){
    //user is unregistered and string is not empty
    $textArray = explode("*" , $text);
    switch ($textArray[0]) {
        case '1':
            $menu->registerMenu($textArray);
            break;
        
        default:
           echo "Invalid choice. Please try again";
            break;
    }
}else{
    //user is registred and string is empty
    $textArray = explode("*" , $text);
    switch ($textArray[0]) {
        case '1':
            $menu->sendMoneyMenu($textArray);
            break;

            case '2':
                $menu->withdarwMoneyMenu($textArray);
                break;

                case '3':
                    $menu->checkBalanceMenu($textArray);
                    break;
        
        default:
        echo "Invalid choice. Please try again";
            break;
    }
}






?>