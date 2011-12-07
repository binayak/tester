<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CommonActions extends baseDefinitions
{

    public function __construct(PHPUnit_Extensions_SeleniumTestCase $test)
    {
      $this->test = $test;
      
    }
    
    
    public function logOut()
    {
        $this->test->open("/");
        $this->test->waitForPageToLoad("30000");
        if(($this->test->isElementPresent("link=Déconnexion"))||($this->test->isElementPresent("link=Log Out")))
        {
            $this->test->clickAndWait("html/body/div/div/div[1]/div[1]/div[3]/ul/li[1]/a");
            $this->test->deleteAllVisibleCookies();
            $this->test->openAndWait("/");
        }   
    }
    
        
     public function logIn($email, $password)
    {
        $this->test->openAndWait("/");
        if(($this->test->isElementPresent("link=Déconnexion"))||($this->test->isElementPresent("link=Log Out"))){
            $this->test->logOut();
        }
        elseif($this->test->isElementPresent("link=Mon compte"))
        {
            $this->test->clickAndWait("link=Mon compte");
            $this->test->type("email",$email);
            $this->test->type("pass",$password);
            $this->test->clickAndWait("send2");
            $this->test->assertTrue($this->test->isElementPresent("link=Déconnexion"));
        }
        
        else 
        {
        
            $this->test->clickAndWait("link=Your Account");
            $this->test->type("email",$email);
            $this->test->type("pass",$password);
            $this->test->clickAndWait("send2");
            $this->test->assertTrue($this->test->isElementPresent("link=Log Out"));
            
        }
        
        
    }
    
    public function goToBasketPage()
    {
        //$this->test->waitForElementPresent("span=basket-icon");
        $this->test->click("//span[@id='basket-icon']");
        $this->test->waitForCondition("selenium.browserbot.getCurrentWindow().document.getElementsByClassName('inner-wrapper')",
   10000);
        if($this->test->isElementPresent("//div[@id='topCartContent']/div/div[2]/a/span/cufon/canvas"))
        {
            $this->test->openAndWait("checkout/cart/");
        }
        
    }
    
    
    public function searchThis($searchTerm)
    {
        $this->test->assertPresent();
        $this->test->type($searchTerm);
        $this->test->clickAndWait("//button[@class='button btn-search']");
        
    }
    
}

?>
