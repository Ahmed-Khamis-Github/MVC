<?php

namespace PHPMVC\app\Models;

use PHPMVC\app\Core\DB;





class Product extends DB
{

    private $table = 'products';
    private $conn;
    public function __construct()
    {
        $this->conn = ($this->connect());
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }


    public function store(array $data)
    {
        $sql = 'INSERT INTO products (name,price,content,qty) VALUES(:name,:price,:content,:qty) ';

        $stmt = $this->conn->prepare($sql);
        $stmt->bindparam("name", $data['name']);
        $stmt->bindparam("price", $data['price']);
        $stmt->bindparam("content", $data['content']);
        $stmt->bindparam("qty", $data['qty']);
 
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id){
        $sql="DELETE FROM products WHERE id = :id" ;
        $stmt=$this->conn->prepare($sql) ;
        $stmt->bindparam("id",$id) ;
        $stmt->execute() ;
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($id){
        $sql='SELECT * FROM products WHERE id= :id' ;
        $stmt=$this->conn->prepare($sql) ;
        $stmt->bindparam("id",$id) ;
        $stmt->execute() ;
        $result=$stmt->fetch() ;
        return $result ;
    }



    public function update($id,array $data){
        $sql="UPDATE products SET name= :name , price= :price , content= :content , price= :price, qty= :qty WHERE id= :id " ;
        $stmt=$this->conn->prepare($sql) ;
        $stmt->bindParam("name",$data['name']) ;
        $stmt->bindParam("price",$data['price']) ;
        $stmt->bindParam("content",$data['content']) ;
        $stmt->bindParam("qty",$data['qty']) ;
        $stmt->bindParam("id",$id) ;
        $stmt->execute() ;
        if($stmt->execute()){
            return true ;
        }else{
            return false ;
        }
    }
     


     
}
