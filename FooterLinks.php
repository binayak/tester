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


class FooterLinks extends baseDefinitions {
    //put your code here
    
     
    public $UKlinkNames = array('Delivery','Returns','FAQs','Size guide',
                                'Store Locator','Careers','Contact us',
                                'Terms &amp; Conditions','Privacy and Security',
                                'Sitemap');
    
    public $uklinkURLs = array ('delivery/',
                                'returns/',
                                'faq/',
                                'size-guide/',
                                'store-locator/',
                                'careers/',
                                'contact/',
                                'terms-and-conditions/',
                                'privacy-and-security/',
                                'seo_sitemap/category/');    
    
    
    public function testForFrance ()
    {
        
        $FrenchlinkNames = array('Livraison','Retours','FAQs','Guides des tailles',
                                    'Nous contacter','Affiliation','Recrutement',
                                    'Presse','CGV','Mentions légales');
    
    
        $expectedURLfr = array ('livraison',
                                    'retours',
                                    'foire-aux-questions',
                                    'guides-des-tailles',
                                    'nous-contacter',
                                    'affiliation',
                                    'accueil.aspx',
                                    'presse',
                                    'conditions-generales',
                                    'mentions-legales');

        $this->openAndWait("/");
        for ($i = 0 ; $i < 10 ; $i++)
            {
                $this->clickAndWait("link=".$FrenchlinkNames[$i]);
                if ($this->isAlertPresent())
                $this->getAlert();
                $urlActual = $this->getLocation();
                $urlActual = explode("/",$urlActual);
                $this->assertEquals($urlActual[3],$expectedURLfr[$i]);
            }
             
        
    }
    
    
}
?>
