<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * THIS IS FOR OBJECTS
 */

/**
 * Description of HomePage
 *
 * @author bsilwal
 */

require_once 'baseDefinitions.php';


class ThisIsNavigation extends baseDefinitions {
    //put your code here
    
    protected $test;
    
    const E_BOUTIQUE = "//body/div/div[@class='page']/div[@class='header-container']/div[@class='nav-wrapper']/div[@class='nav-container']/div/ul/li[1]/a";
    
    public function __construct(PHPUnit_Extensions_SeleniumTestCase $test)
    {
      $this->test = $test;
    }
    
    public function clickEBoutique () //French Store
    {
        $this->test->clickAndWait(self::E_BOUTIQUE);
        
        $this->test->assertEquals("e-Boutique | Kookai", $this->test->getTitle());
    }
    
    public function goBackToHomePage () //French Store
    {
        $this->test->open("/");
        $this->test->assertEquals("Kookai: mode et tendance pour femme et petite fille. | ",$this->test->getTitle());
    }
    
    
    
    
    
}

?>
