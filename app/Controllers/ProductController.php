<?php

namespace PHPMVC\app\Controllers;

use PHPMVC\app\Models\Product;
use PHPMVC\app\Core\View;


class ProductController
{
    public function index()
    {
        $db = new Product();
        $data['Products'] = ($db->getAllProducts());
        View::load('product/index',$data) ;
    }

    // add new product

    public function add()
    {
        View::load('product/add') ;
    }

// store products 
    public function store()
    {
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'] ;
            $price=$_POST['price'] ;
            $content=$_POST['content'] ;
            $qty=$_POST['qty'] ;
            $data=[
                'name'=>$name ,
                'price'=>$price ,
                'content'=>$content ,
                'qty'=>$qty 
             ];
             $db = new Product();
             if($db->store($data))
             {
                View::load('product/add',["success"=>'Data Created Successfully']) ;
             }
             else{
                View::load('product/add') ;
             }
        }
       
    }



    public function update($id)
    {
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'] ;
            $price=$_POST['price'] ;
            $content=$_POST['content'] ;
            $qty=$_POST['qty'] ;
            $data=[
                'name'=>$name ,
                'price'=>$price ,
                'content'=>$content ,
                'qty'=>$qty 
             ];
             $db = new Product();
             if($db->update($id,$data))
             {

                 View::load('product/edit',["success"=>'Data Updated Successfully','product'=>$db->edit($id)]) ;
              }
             else{
                View::load('product/edit',["error"=>'Data Failed']) ;
             }
        }
       
    }

    //delete products
    public function delete($id)
    {
        $db = new Product();
        if($db->delete($id))
             {
                 View::load('product/delete',["success"=>'Data Deleted Successfully']) ;
             }
             else{
                View::load('product/add',["error"=>'Error Deleting the data']) ;
             }
     }

     public function edit($id)
     {
         $db = new Product();
       
        if($db->edit($id))
             {
                $data['product']=$db->edit($id) ;
                 View::load('product/edit',$data) ;
             }
             else{
                echo 'error' ;
             }
     }
}

