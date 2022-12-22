<?php
namespace PHPMVC\app\Core ;

class DB {
private $host = "localhost" ;
private $user = 'root' ;
private $pswd= '' ;
private $dbname= 'mvc' ;

public function connect(){
     
 $dsn='mysql:host='.$this->host.';dbname='.$this->dbname;
 $pdo=new \PDO($dsn,$this->user,$this->pswd) ;
 $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC) ;
  
 return $pdo ;
}
 

}
