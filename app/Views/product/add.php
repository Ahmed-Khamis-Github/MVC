<?php include ROOT_PATH.'\app\Views\inc\header.php' ?>

<div class="mt-5 mx-auto">
<h1 class="text-center text-danger">Add New Product <span class="badge badge-secondary">Mobiles</span></h1>
</div>

<div class="container">
    <div class="row">
    <div class="col-8 mx-auto">
    <?php if(isset($success)) :?>
      <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
          <?php endif ; ?>
    
<form method="POST" action="<?php url('product/store') ?>">
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" name="name" class="form-control" id="Name"   required>
   </div>
   <div class="form-group">
    <label for="Price">Price</label>
    <input type="text" name="price" class="form-control" id="Price" a  required>
   </div>


   <div class="form-group">
    <label for="Description">Description</label>
    <textarea name="content" id="Description" class="form-control" required></textarea>
  </div>
    


  <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="text" name="qty" class="form-control" id="Quantity" required>
  </div>
     <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>


<?php include ROOT_PATH.'\app\Views\inc\footer.php' ?>