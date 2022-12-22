<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Learn MVC</title>
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php url(); ?>">
     <a  href="<?php url(); ?>"><img style="width:150px ;" src="https://i.ibb.co/M1NNdXD/logo.png" alt="logo"   /></a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link ml-4" href="<?php url(); ?>">Home </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php url('product/index'); ?>"">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php url('product/add'); ?>"">Add Product</a>
        </li>
        
      </ul>
    
    </div>
  </nav>

   
 