<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'baseDefinitions.php';

class UIObjectsPresentInAllPages extends baseDefinitions
{
    
//    public function __construct(PHPUnit_Extensions_SeleniumTestCase $test)
//    {
//      $this->test = $test;
//      
//    }
   
    public function miniBasket($flag)
    {
        
        if ($flag != 1)
            return "div[class='top-cart']>div[class='block-title no-items']>p[id='cartHeader']>strong>span[id='basket-icon']";
        else
            return "div[class='top-cart']>div[class='block-title']>p[id='cartHeader']>span[id='bag-items']>span[id='basket-icon']";
            //return "span[id='basket-icon']";
    }
    
    public function basketDropDown()
    {
        //$this->test->waitForCondition("selenium.browserbot.getCurrentWindow().document.getElementById('topCartContent').style.display('')",10000);
        return "//body/div/div/div/div/div[3]/div[2]/div[2]/div/div[2]/a/span/cufon/canvas";
    }
    
    
    public function openbasket () //commander link in the top right basket drop down.
    {
        
        return "//body/div/div/div/div/div[3]/div[2]/div[2]/div/div[2]/a";
    }
    
    
    
    
}



?>
