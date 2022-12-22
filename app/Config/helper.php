<?php 

function url($url='')
{
    echo BURL.$url ;
}




function  limit($str){
    if(strlen($str)>20){
        $str=substr($str,0,20). '...' ;
    }
    return $str ;
}
?>