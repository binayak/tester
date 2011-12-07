<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register('__autoload');



function __autoload($className)
{
    
    $directories = array (
                            '',
                            'ActionsLayer/',
                            'ObjectLayer/',
                            'Tests/'
        
                         );
    
    foreach ($directories as $directory)
    {
        $path = $directory.$className.'.php';
        
        if (file_exists($path))
             require_once $path;
    }
    
   

}

?>
