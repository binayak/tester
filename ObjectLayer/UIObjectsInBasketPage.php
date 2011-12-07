<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'baseDefinitions.php';

class UIObjectsInBasketPage extends baseDefinitions
{
    
    const QTY_IN_BASKET_PAGE = "//body/div/div/div[2]/div/div/form/fieldset/table/tbody/tr/td[5]/input";
    const PROCEED_TO_CHECKOUT_BUTTON = "//body/div/div/div[2]/div/div/div[2]/div[2]/ul/li/button";
    
    
    public function __construct(PHPUnit_Extensions_SeleniumTestCase $test)
    {
      $this->test = $test;
      
    }

    public function startCheckout()
    {
        sleep(2);
        echo "The number of products in the basket page is ".$this->test->getValue(self::QTY_IN_BASKET_PAGE)." \n";
        $this->test->clickAndWait(self::PROCEED_TO_CHECKOUT_BUTTON);
    }
    
}
?>
