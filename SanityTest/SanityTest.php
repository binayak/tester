<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'baseDefinitions.php';

class SanityTest extends baseDefinitions
{
   
    //Home Page Top Navigation & Links and respective URLs
    public $expectedUrlsForHomePage = array(
                                        "",
                                        "e-boutique.html",
                                        "la-marque/",
                                        "kookai-loves-you/",
                                        "customer/account/login/"        
                                     );
   
   public $locatorsForLinksInHomePage = array(
                                             "",
       "//body/div/div/div[2]/div[2]/div/div/ul/li[1]/a/span/cufon/canvas",
       "//body/div/div/div[2]/div[2]/div/div/ul/li[2]/a/span/cufon[1]/canvas",
       "//body/div/div/div[2]/div[2]/div/div/ul/li[4]/a/span/cufon[1]/canvas",
       "/html/body/div/div/div[2]/div/div[3]/ul/li/a"
                                               );
   
   
   //Home Page or Any Page Footer Links and respective URLs
   public $expectedUrlsForFooterLinks = array(
       "livraison",
       "retours",
       "foire-aux-questions",
       "guides-des-tailles",
       "store-locator",
       "nous-contacter",
       "affiliation",
       "accueil.aspx",
       "presse",
       "conditions-generales",
       "mentions-legales",
       "catalog",
             
   );
   
   public $locatorsForLinksForFooter = array(
       "/html/body/div/div/div[4]/div/div[3]/ul[1]/li[1]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[1]/li[2]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[1]/li[3]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[2]/li[1]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[2]/li[2]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[2]/li[3]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[3]/li[1]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[3]/li[2]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[3]/li[3]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[4]/li[1]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[4]/li[2]/a",
       "/html/body/div/div/div[4]/div/div[3]/ul[4]/li[3]/a"
   );
   
   public function testHomePageLinksAndUrls ()
   {
       $this->open("/");
       for ($i = 1; $i < 5; $i ++)
       {
              $this->assertElementsPresent($this->$locatorsForLinksInHomePage[$i]);
              $this->clickAndWait($locatorsForLinksInHomePage[$i]);
              $actualLocation = $this->getLocation();
              $expectedLocation = $expectedUrlsForHomePage[$i];
              $this->assertEquals ($actualLocation, $expectedLocation);

       }
   }
}

?>
