<?php
class Menu {
    protected $text;
    protected $sessionId;

    public function __construct($text, $sessionId) {
        $this->text = $text;
        $this->sessionId = $sessionId;
    }

    public function mainMenuRegistered() {
        $response = "CON Welcome to the main menu\n";
        $response .= "1. Send Money\n";
        $response .= "2. Withdraw Money\n";
        $response .= "3. Check Balance";
        echo $response;
    }
    public function mainMenuUnRegistered() {
        $response = "CON Welcome to MUhib Heights!!\n";
        $response .= "1. Register\n";
        echo $response;
    }

    public function registerMenu($textArray) {
        $level = count($textArray);
        if ($level == 1) {
            echo "CON Please Enter your full name";
        } 
        elseif ($level == 2) {
         echo "CON Please enter your PIN";
        }
        elseif ($level == 3) {
            echo "CON Please confirm your PIN";
        }
        elseif ($level == 4) {
            $name = $textArray[1];
            $pin = $textArray[2];
            $confirmPin = $textArray[3];
            if ($pin == $confirmPin) {
                echo "END You have successfully registered";
            } else {
                echo "END Your PINs do not match, please try again";
            }
        }
        
    }
    // impliment the sendMoneyMenu, option 
    public function sendMoneyMenu($textArray) {}
    public function withdrawMoneyMenu($textArray) {}
    public function checkBalanceMenu($textArray) {}

        
}

?>