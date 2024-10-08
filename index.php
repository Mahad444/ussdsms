<?php

include_once 'menu.php';
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

// is the user registered?
$isRegistered = false;

if ($text == "" && !$isRegistered){
    // user is registered and string is empty
    $menu = new Menu($text, $sessionId);
   $menu->mainMenuRegistered();
   
}elseif($text == "" && $isRegistered){
    // user is unregistered and string is empty
    $menu = new Menu($text, $sessionId);
    $menu->mainMenuUnRegistered();

}elseif($isRegistered){
    // user is uregistered and string is not empty
    $textArray = explode("*", $text);
     switch ($textArray[0]) {
        case 1:
            $menu->registerMenu($textArray);
            break;
            default:
            echo "END Invalid input. Please try again";
        }
}else{
    // user is registered and string is not empty
    $textArray = explode("*", $text);
    switch ($textArray[0]) {
        case 1:
            $menu->sendMoneyMenu($textArray);
            break;
        case 2:
            $menu->withdrawMoneyMenu($textArray);
            break;
        case 3:
            $menu->checkBalanceMenu($textArray);
            break;
        default:
            echo "END Invalid input. Please try again";
    }
}