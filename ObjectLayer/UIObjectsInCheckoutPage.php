<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



include_once 'baseDefinitions.php';

class UIObjectsInCheckoutPage extends baseDefinitions
{
    protected $test; 
    
    public function __construct(PHPUnit_Extensions_SeleniumTestCase $test)
    {
      $this->test = $test;
      
    }
    
    const CUSTOMER_LOGIN_EMAIL_IN_CHECKOUT = "//body/div/div/div[2]/div/div/ol/li/div[2]/div/div/form/fieldset/ul/li/div/input[@id='login-email']";
    const CUSTOMER_LOGIN_PASSWORD_IN_CHECKOUT = "//body/div/div/div[2]/div/div/ol/li/div[2]/div/div/form/fieldset/ul/li/div/input[@id='login-password']";
    const REGISTER_RADIO_BUTTON_IN_CHECKOUT = "//body/div/div/div[2]/div/div/ol/li/div[2]/div/div[2]/ul/li/input[@id='login:register']";
    const CHECKOUT_AS_GUEST_RADIO_BUTTON = "//body/div/div/div[2]/div/div/ol/li/div[2]/div/div[2]/ul/li/input[@id='login:guest']";
    const LOGIN_BUTTON_IN_CHECKOUT = "//body/div/div/div[2]/div/div/ol/li/div[2]/div/div/form/div/button[@class='btn-submit button']";
    const CONTINUE_BUTTON_IN_CHECKOUT_FIRST_STEP = "div[class='step a-item']>div[class='col2-set']>div[class='col-2']>div[class='buttons-set']>button[class='button btn-submit']";
    
    //billing information
    const BILLING_FORM_DIV = "//li[@id='opc-billing' and @class = 'section allow active']";
    const BILLING_FIRST_NAME = "//div[@class='input-box']/input[@id = 'billing:firstname']";
    const BILLING_FAMILY_NAME = "//div[@class='input-box']/input[@id = 'billing:lastname']";
    const BILLING_EMAIL_ADDRESS = "//div[@class='input-box']/input[@id = 'billing:email']";
    const BILLING_TELEPHONE = "//div[@class='input-box']/input[@id = 'billing:telephone']";
    const BILLING_ADDRESS = "//div[@class='input-box']/input[@id = 'billing:street1']";
    const BILLING_FRENCH_VILLE = "//div[@class='input-box']/input[@id = 'billing:city']";
    const BILLING_CODE_POSTAL = "//div[@class='input-box']/input[@id = 'billing:postcode']";
    const FRENCH_ADDRESS_LOOKUP_BUTTON = "//div[@class='input-box']/button[@id = 'billing-address-validation']";
    const FRENCH_DELIVERY_TO_SAME_ADDRESS_RADIO_BUTTON = "//div[@class='input-box']/input[@id = 'billing:use_for_shipping_yes']";
    const FRENCH_DELIVERY_TO_DIFFERENT_ADDRESS_RADIO_BUTTON = "//div[@class='input-box']/input[@id = 'billing:use_for_shipping_no']";
    const FRENCH_FIND_ADDRESS_BUTTON_BILLING_INFORMATION = "//li[@id='opc-billing']//div[@class='input-box']/button[@class = 'button btn-submit cufon']";
    const FRENCH_CONTINUE_BUTTON_IN_BILLING_INFORMATION = "//body/div/div/div[2]/div/div/ol/li[2]/div[2]/form/div/button[@class='button btn-submit cufon']";    
    //Shipping Information
    const SHIPPING_FORM_DIV = "//li[@id='opc-shipping' and @class = 'section allow active']";
    const SHIPPING_FIRST_NAME = "//div[@class='input-box']/input[@id = 'shipping:firstname']";
    const SHIPPING_FAMILY_NAME = "//div[@class='input-box']/input[@id = 'shipping:lastname']";
    const SHIPPING_TELEPHONE = "//div[@class='input-box']/input[@id = 'shipping:telephone']";
    const SHIPPING_ADDRESS = "//div[@class='input-box']/input[@id = 'shipping:street1']";
    const SHIPPING_FRENCH_VILLE = "//div[@class='input-box']/input[@id = 'shipping:city']";
    const SHIPPING_CODE_POSTAL = "//div[@class='input-box']/input[@id = 'shipping:postcode']";
    const FRENCH_ADDRESS_LOOKUP_BUTTON_SHIPPING = "//div[@class='input-box']/button[@id = 'shipping-address-validation']";
    const FRENCH_USE_SAME_ADDRESS_BILLING_ADDRESS = "//div[@class='input-box']/input[@id = 'shipping:same_as_billing']";
    const FRENCH_CONTINUE_BUTTON_IN_SHIPPING = "//body/div/div/div[2]/div/div/ol/li[3]/div[2]/form/div[@id='shipping-buttons-container']/button";
    
    //Delivery Method
    const DELIVERY_FORM = "//li[@id='opc-shipping_method' and @class = 'section allow active']";
    const DELIVERY_CONTINUE_BUTTON = "//body/div/div/div[2]/div/div/ol/li[4]/div[2]/form/div[@id='shipping-method-buttons-container']/button";
    
    //Loyalty Card
    const LOYALTY_FORM = "//li[@id='opc-loyalty'and @class='section allow active']";
    const LOYALTY_CARD_NUMBER_BOX = "//body/div/div/div[2]/div/div/ol/li[5]/div[2]/form/div/div/fieldset/ul/li/div[@class='input-box']/input[@id='loyalty_id']";
    const LOYALTY_CARD_CONTINUE_BUTTON ="//body/div/div/div[2]/div/div/ol/li[5]/div[2]/form/div/div/div[@class='buttons-set form-buttons btn-only']/button[@class='btn-submit button']";
    const LOYALTY_CARD_SUBSCRIBE_BUTTON="//body/div/div/div[2]/div/div/ol/li[5]/div[2]/form/div/div[@class='col-2']/div[@class='buttons-set']/button[@class='button btn-submit']";
    const LOYALTY_CARD_CONTINUE_WITHOUT = "//body/div/div/div[2]/div/div/ol/li[5]/div[2]/form/div/div[3]/div[@class='buttons-set']/button[@class='button btn-submit']";
    
    //Payment
    const PAYMENT_FORM_DIV = "//li[@id='opc-payment'and @class='section allow active']";
    const PAYMENT_OGONE_RADIO_BUTTON = "/html/body/div/div/div[2]/div/div/ol/li[6]/div[2]/form/fieldset/dl/dl/dt/input[@id='p_method_ogone']";
    const PAYMENT_PAYPAL_RADIO_BUTTON = "/html/body/div/div/div[2]/div/div/ol/li[6]/div[2]/form/fieldset/dl/dl/dt/input[@id='p_method_paypal_express']";
    const PAYMENT_MONEY_ORDER_RADIO_BUTTON = "//body/div/div/div[2]/div/div/ol/li[6]/div[2]/form/fieldset/dl/dl/dt/input[@id='p_method_checkmo']";
    const PAYMENT_CONTINUE_BUTTON = "//body/div/div/div[2]/div/div/ol/li[6]/div[2]/div[@id='payment-buttons-container']/button[@class='button btn-submit cufon']";
    
    //Order Verification Page
    const VERIFICATION_FORM = "//li[@id='opc-review'and @class='section allow active']";
    const VERIFICATION_AGREE_TNC = "//body/div/div/div[2]/div/div/ol/li[7]/div[2]/div[2]/form/ol/li/p[@class='agree']/input[@id='agreement-1']";
    const VERIFICATION_PAGE_CONTINUE_BUTTON = "//div[@id='review-buttons-container']/button[@class='button btn-submit cufon']";
    
    
    public function checkoutAsGuest ()
    {
        $this->test->click(self::CHECKOUT_AS_GUEST_RADIO_BUTTON);
        $this->test->click("css=".self::CONTINUE_BUTTON_IN_CHECKOUT_FIRST_STEP);
        $this->test->waitForElementPresent(self::BILLING_FORM_DIV);
    }
    
    public function fillBillingInformation()
    {
        
        $date = new DateTime();
        $record = $date->getTimestamp();
        
        $this->test->assertElementPresent(self::BILLING_FORM_DIV);
        
        
        $this->test->type(self::BILLING_FIRST_NAME,"Binayak");
        $this->test->type(self::BILLING_FAMILY_NAME,"Silwal");
        $this->test->type(self::BILLING_EMAIL_ADDRESS,"bsilwal+$record@ibuildings.com");
        $this->test->type(self::BILLING_TELEPHONE,"0123123123");
        $this->test->type(self::BILLING_ADDRESS,"12 Rue Copernic");
        $this->test->type(self::BILLING_FRENCH_VILLE,"Paris");
        $this->test->type(self::BILLING_CODE_POSTAL,"75112");
        $this->test->click(self::FRENCH_DELIVERY_TO_DIFFERENT_ADDRESS_RADIO_BUTTON);
        $this->test->click(self::FRENCH_CONTINUE_BUTTON_IN_BILLING_INFORMATION);
        $this->test->waitForElementPresent(self::SHIPPING_FORM_DIV);
        
    }
    
    public function fillDeliveryInformation()
    {
        
        $date = new DateTime();
        $record = $date->getTimestamp();
        
        $this->test->assertElementPresent(self::SHIPPING_FORM_DIV);
        
        $this->test->type(self::SHIPPING_FIRST_NAME,"Shipping Name");
        $this->test->type(self::SHIPPING_FAMILY_NAME,"Binayak");
        $this->test->type(self::SHIPPING_TELEPHONE,"0123123123"); 
        $this->test->type(self::SHIPPING_ADDRESS,"23 Rue Copernic");
        $this->test->type(self::SHIPPING_FRENCH_VILLE,"Paris");
        $this->test->type(self::SHIPPING_CODE_POSTAL,"75112");
        $this->test->click(self::FRENCH_CONTINUE_BUTTON_IN_SHIPPING);
        $this->test->waitForElementPresent(self::DELIVERY_FORM);
        
    }
    
    public function fillDeliveryMethod()
    {
        $this->test->assertElementPresent(self::DELIVERY_FORM);
        $this->test->click(self::DELIVERY_CONTINUE_BUTTON);
        
        $this->test->waitForElementPresent(self::LOYALTY_FORM);
    }
    
    public function loyaltyStep()
    {
        $this->test->assertElementPresent(self::LOYALTY_FORM);
        
        $randomize = rand (1,3);
        
        switch ($randomize)
        {
            case 1: //entering a valid loyalty card number and continuing
            {
                $this->test->type(self::LOYALTY_CARD_NUMBER_BOX,"4015671234568");
                $this->test->click(self::LOYALTY_CARD_CONTINUE_BUTTON);
                echo "Valid Loyalty Card Number (4015671234568) is Entered \n ";
            }
                
            case 2: //continue without loyalty
            {
                $this->test->click(self::LOYALTY_CARD_CONTINUE_WITHOUT);
                echo "Continue without loyalty \n";
            }
                
            case 3: //subscribe loyalty
            {
                $this->test->click(self::LOYALTY_CARD_SUBSCRIBE_BUTTON);
                echo "Subscribe loyalty \n";
            }
        }
        
        $this->test->waitForElementPresent(self::PAYMENT_FORM_DIV);
    }
    
    public function paymentStep()
    {
        
        $this->test->assertElementPresent(self::PAYMENT_FORM_DIV);
        
        //$randomize = rand(1,3);
        $randomize = 3;
        
        switch ($randomize)
        {
            case 1: //entering a valid loyalty card number and continuing
            {
                
                $this->test->click(self::PAYMENT_OGONE_RADIO_BUTTON);
                
            }
                
            case 2: //continue without loyalty
            {
                $this->test->click(self::PAYMENT_PAYPAL_RADIO_BUTTON);
            }
                
            case 3: //subscribe loyalty
            {
                $this->test->click(self::PAYMENT_MONEY_ORDER_RADIO_BUTTON);
            }
        }
        
        $this->test->click(self::PAYMENT_CONTINUE_BUTTON);
        $this->test->waitForElementPresent(self::VERIFICATION_FORM);
    }
    
    public function verificationStep()
    {
        $this->test->assertElementPresent(self::VERIFICATION_FORM);
        $this->test->click(self::VERIFICATION_AGREE_TNC);
        $this->test->clickAndWait(self::VERIFICATION_PAGE_CONTINUE_BUTTON);
        echo "The verification is done & order is placed Yippe!!\n";
    }
    
    
    
}?>