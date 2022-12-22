<?php 
  namespace PHPMVC\app\Core ;


   

/** 
*
* Front end Controller 
*/

class App 
{
    protected $controller='HomeController' ;
    protected $action='index' ;
    protected $params=[] ;

    public function __construct()
    {
       $this->prepareURL() ;
       $this->render() ;
          
    }



    /*

    *
    * extract controllers,actions,params ;
    *


    */
    private function  prepareURL()
    
    {

        $url = (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
          
        $url = trim($url, "/");
        
        $url = (explode("/",$url, 3));
         


        if (isset($url[0]) && $url[0] != '') {
            $this->controller = ucwords($url[0]) .'Controller';
        }

        if (isset($url[1]) && $url[1] != '') {
            $this->action = $url[1];
        }
        if (isset($url[2]) && $url[2] != '') {
            $this->params = explode('/', $url[2]);
        }
 
        



    }

   

    private function render()
    {


        $controllerClassName='PHPMVC\app\Controllers\\'.$this->controller  ;
        if(class_exists($controllerClassName))
        {
            $controller= new $controllerClassName() ;

            

            if(method_exists($controller,$this->action))
            {
               call_user_func_array([$controller,$this->action],$this->params) ;
            }
            else
            {
                echo "<h1>".'This Action ('.$this->action.') is not exists' ;

            }
             
        }
         else
         {
            echo "<h1>".'This controller ('.$this->controller.') is not exists' ;
         }

          
        

    }




}
 