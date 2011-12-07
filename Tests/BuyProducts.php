<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomePage
 *
 * @author bsilwal
 */
require_once 'baseDefinitions.php';
class BuyProducts extends baseDefinitions 
{
    
    public function testPurchaseProduct ()
    {
        //
        
        $this->openAndWait("/");
        
        
        //Go to E-boutique Page
        $this->clearBrowser();
        $navObject = new ThisIsNavigation($this);
        $navObject->clickEBoutique();
                               
        //Go to Random Category and Random Product Page. 
        //And add product to the baseket and go to the basket page.
        $eBoutiquePageObject = new UIObjectsEBoutiquePage($this);
        $eBoutiquePageObject->goToProductPage();
                
        //Selecting product attributes and adding product to the basket.
        $productPageObject = new UIObjectsInProductPage($this);
        $productPageObject->addToCart();
        
        //This will take you to the basket page.
        $productPageObject->goToBasketPage();
        
        //
        sleep(5);
        $basketPageObject = new UIObjectsInBasketPage($this);
        $basketPageObject->startCheckout();
    
        //go to the checkout process.
        $checkoutPageObject = new UIObjectsInCheckoutPage($this);
        $orderSuccessPageObject = new UIObjectsOrderSuccessPage($this);
        
        $randomize = 1;
        
        switch ($randomize)
        {
            case 1:
            {
                $checkoutPageObject->checkoutAsGuest();
                $checkoutPageObject->fillBillingInformation();
                $checkoutPageObject->fillDeliveryInformation();
                $checkoutPageObject->fillDeliveryMethod();
                $checkoutPageObject->loyaltyStep();
                $checkoutPageObject->paymentStep();
                $checkoutPageObject->verificationStep();
                $orderSuccessPageObject->returnOrderNumber();
                       
            }
                
//            case 2:
//            {
//                $actions->registerAsYouCheckout();
//                $actions->enterBillingAddress();
//                $actions->enterShippingAddress();
//                $actions->payUsingPayPal();
//            }
//            
//            case 3:
//            {
//                $actions->loginAndCheckout();
//                $actions->enterBillingAddress();
//                $actions->enterShippingAddress();
//                $actions->payUsingMoneyOrder();
//            
//            }
        }
        
        
        
    }
    
    
}
?>
