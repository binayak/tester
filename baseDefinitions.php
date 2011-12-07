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

require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

date_default_timezone_set('Europe/London');

class baseDefinitions extends PHPUnit_Extensions_SeleniumTestCase{
    
    protected $captureScreenshotOnFailure = TRUE;
    protected $screenshotPath = '/Users/bsilwal/Pictures/selenium_screenshot/kookai';
    protected $screenshotUrl = 'http://localhost/screenshots';

       
    public function setUp()
    {
        $this->setBrowser("*firefox");
        $this->setBrowserUrl("http://admin:emerald29pearl@kookai-fr.uat.sessiondigital.com/");
        $this->setSpeed(5);
    }
    
    
    protected function clickAndWait($locator)
    {
        $this->click($locator);
        $this->waitForPageToLoad("30000");
    }
    
    protected function openAndWait($url)
    {
        $this->open($url);
        $this->waitForPageToLoad("30000");
    }
    
    protected function goBackAndWait()
    {
        $this->goBack();
        $this->waitForPageToLoad("30000");
    }
    
    public function clearBrowser()
   {
       $this->deleteAllVisibleCookies();
   }
 
}

?>
