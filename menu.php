<?php

include_once 'util.php';


  class menu{
      protected $text;
      protected $sessionId;

      function_construct($text, $sessionId)
  }

      $this->text =$text
      $this->sessionId = $sessionId

  }

     public function mainMenuRegistered(){
         $response = "CON Reply with\n";
         $response .= "1. Send money\n";
         $response .= "2.Withraw\n";
         $response .= "3.Check balance\n";
         echo $response;
     }
     public function mainMenuUnregistered(){
         $response = "CON Welcome to this app.Reply with\n";
         $response .= "1.Register\n";
         echo $response;
     }
     public function registerMenu(){
         $level = count($textArray);
         if ($level ==1) {
            echo " CON Please enter your full name";
         }elseif ($level ==2) {
            echo "CON Please enter a pin";
         }elseif ($level ==3) {
            echo "CON Please re-enter your pin";
         }elseif ($level ==4) {
            $name = $textArray[1];
            $pin = $textArray[2];
            $confirmPin = $textArray[3];
            if ($pin != $confirmPin) {
                echo "CON Pin doesn't match.Please try again";
         }else {
             echo "CON END You have been registered";
         }
         }
     }
     public function sendMoneyMenu(){
         $level = count($textArray)
         if ($level ==1) {
            echo " CON Enter the receipent phone number";
         }elseif ($level ==2) {
            echo "Enter amount";
         }elseif ($level ==3) {
            echo "CON Enter your pin";
         }elseif ($level ==4) {
            $resonse = "CON Send" . $textArray[2] . " " .$textArray[2] ."\n" ;
            $resonse = "1. Confirm\n" ;
            $resonse = "2. Cancel\n" ;
            $resonse = util::$GO_BACK ."Back\n";
            $resonse = util::$GO_TO_MAIN_MENU . "Main Menu\n";
            echo $response;    
         }elseif ($level ==5 && $textArray[4 ==1]) {
            //a confirm
            echo "END Your request is being processed";
         }elseif ($level ==5 && $textArray[4 ==2]) {
             //cancel
             echo " END Thank you for using our services";
         }elseif ($level ==5 && $textArray[4 ==util::$GO_BACK])
             echo "END You have requested to go back one step";
         }elseif (($level ==5 && $textArray[4 ==util::$GO_TO_MAIN_MENU) {
            echo "END You have requested to go back to main menu";
         }else {
            echo "END Invalid entry";
         }
    }         
     public function withdrawMoneyMenu(){}
     public function checkBalanceMenu(){}

}
   


?>