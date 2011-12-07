<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'baseDefinitions.php';

class UIObjectsOrderSuccessPage extends baseDefinitions
{
    protected $test; 
    
    const ORDER_NUMBER_MESSAGE = "//body/div/div/div[2]/div/p[1]";
    
    public function __construct(PHPUnit_Extensions_SeleniumTestCase $test)
    {
      $this->test = $test;
      
    }
    
    
    public function returnOrderNumber ()
    {
        sleep(2);
        $orderSuccess = $this->test->getText(self::ORDER_NUMBER_MESSAGE);
        $orders = explode(" ",$orderSuccess);
        $orderNumber = $orders[5];
        echo "Your Order Number is:".$orderNumber."\n";
        
    }
    
    
    
}
?>
