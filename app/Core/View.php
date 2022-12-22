<?php
 namespace PHPMVC\app\Core ;

 

    class View 
    {
        public static function load($view_name,$view_data=[])

        {

              $file=ROOT_PATH.'\app\Views\\'.$view_name.'.php' ;
           


            if(file_exists($file))
            {


                extract ($view_data )  ;
                ob_start() ;
                require $file ;
                ob_end_flush() ;
            }
            else{
                echo ' <h1>This View ('.$view_name.') Does not exists</h1>' ;
            }


        }

       
    }
     