<?php
namespace PHPMVC\public  ;
  




class AutoLoad
{
public static function autoload($className)
{
    
    //remove main namespace
    $className=str_replace('PHPMVC','',$className) ;
    $className=$className.'.php' ;
    

    if(!file_exists(ROOT_PATH.$className)){
        return false ;
    }
    require_once  ROOT_PATH.$className ;
       
     

}
} 

spl_autoload_register(__NAMESPACE__.'\AutoLoad::autoload') ;


?> 

