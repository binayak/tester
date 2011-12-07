<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'baseDefinitions.php';

class UIObjectsEBoutiquePage extends baseDefinitions
{
    
    public function __construct(PHPUnit_Extensions_SeleniumTestCase $test)
    {
      $this->test = $test;
      
    }
   
    const ADD_TO_CART_BUTTON = "//button[@class='button btn-cart']";
    const PRODUCT_IMAGE = "//div[@class='product-img-box']";

    
    public function returnCategory ($i='')
    {
        return "//body/div/div/div[3]/div[2]/ul/li/ul/li[$i]/a/span";
    }
    
    public function returnProduct ($j='', $k='')
    {
        sleep(3);
        return "div[class='category-products']>ul:nth-child($j)>li:nth-child($k)>a";
    }
    
    public function goToRandomFrenchCategoryPage()
    {
        $i = rand(1,11); //Go to Random Category Page

        $this->test->clickAndWait($this->returnCategory($i));
        $catTitle = $this->test->getTitle();
        echo "The Product Category Selected is: ".$catTitle."\n";
    }
    
    
    public function goToRandomProductPage()
    {
        $j = rand (1,4);
        $k = rand (1,3);
        // Go to Random Product Page
        
        $this->test->clickAndWait("css=".$this->returnProduct($j,$k));
        
        $productTitle = $this->test->getTitle();
        echo "The Product Selected is: ".$productTitle."\n";
        sleep(3);
        $this->test->assertElementPresent(self::ADD_TO_CART_BUTTON);
        $this->test->assertElementPresent(self::PRODUCT_IMAGE);
    }
    
    
     public function goToProductPage()
     {
        
        $this->goToRandomFrenchCategoryPage();
        $this->goToRandomProductPage();
     }
    
}


?>
