<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


include_once 'baseDefinitions.php';

class UIObjectsInProductPage extends baseDefinitions
{
    
    const ADD_TO_CART_BUTTON = "//body/div[2]/div/div[3]/div/div/div/form/div[2]/div/div[2]/div/div/button";
    
    public function __construct(PHPUnit_Extensions_SeleniumTestCase $test)
    {
      $this->test = $test;
      
    }

    
    public function colorSwatches ($colIndex='') // This function will help to select random color swatches from available color swatches
    {
        if ($colIndex != '')
            return "//form/div[2]/div/div[2]/fieldset/dl/dd/div/div[2]/ul/li[$colIndex]";
        
        else
            return "//form/div[2]/div/div[2]/fieldset/dl/dd/div/div[2]/ul/li";
    }
    
    public function sizeOptions ($sizeIndex='') // This function will help to select random size option from available size options
    {
        if ($sizeIndex != '')
            return "//form/div[2]/div/div[2]/fieldset/dl/dd[2]/div/select/option[$sizeIndex]";
        else 
            return "//form/div[2]/div/div[2]/fieldset/dl/dd[2]/div/select";
    }
   
    
     public function addToCart()
    {
        //Put empty your basket code here.
        //This function uses UIObjects in the Product Page
        
        $uiObjects = new UIObjectsPresentInAllPages($this);
        sleep(2);
        $numberOfItemsInBasket = $this->test->getText("css=".$uiObjects->miniBasket($flag = 0)); //flag = 0 means no product in the basket.
        echo "There are $numberOfItemsInBasket in the basket \n";
        sleep(3);
        
        
        
        //Count color swatch and select random one.                
        $colorSwatchCount = $this->test->getXpathCount($this->colorSwatches());
        $randomColor = rand (1, $colorSwatchCount);
        $this->test->click($this->colorSwatches($randomColor));
        echo "Color number $randomColor will be selected out of $colorSwatchCount options\n";
        sleep(3);
        
        
        
        //Count size options and select random one.
        $sizeOptionsCount = $this->test->getXpathCount($this->sizeOptions());
        $randomSize = rand(1,$sizeOptionsCount-1);
        echo "Size option $randomSize will be selected out of $sizeOptionsCount options\n";
        $this->test->select($this->sizeOptions(),"index=$randomSize");
        sleep(3);
       
        
        
        //Add product in the cart.
        $this->test->clickAndWait(self::ADD_TO_CART_BUTTON);
        echo "Adding product to the cart \n";
        
        
        
        //count and assert that the product has been added to the basket.
        $itemsInBasket = $this->test->getText("css=".$uiObjects->miniBasket($flag = 1));//flag = 1 means product in the basket.
        $this->test->assertEquals($itemsInBasket, $numberOfItemsInBasket+1);
        echo "Number of items in the basket is: $itemsInBasket \n";
    
    }
    
    
    
    
    
        
    public function goToBasketPage()
    {
        $commonUiObjects = new UIObjectsPresentInAllPages();
        
        
        
        $this->test->click("css=".$commonUiObjects->miniBasket($flag = 1));
        sleep(2);
        $this->test->waitForElementPresent($commonUiObjects->basketDropDown());
        $this->test->clickAndWait($commonUiObjects->openbasket());
        $this->test->assertEquals("Panier | Kookai", $this->test->getTitle());        
    }
    
}
?>
