<?php 
namespace PHPMVC\public ;

 
use PHPMVC\app\Core\App;
 
define("ROOT_PATH",dirname(__DIR__)) ;
 require_once ROOT_PATH.'/public/autoload.php' ;
require_once ROOT_PATH.'/app/config/config.php' ;
require_once ROOT_PATH.'/app/config/helper.php' ;
new App() ;
 
 
 


?>
