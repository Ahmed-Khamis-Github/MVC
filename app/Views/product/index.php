<?php include ROOT_PATH.'\app\Views\inc\header.php' ?>
<div class="mt-5 mx-auto">
<h1 class="text-center text-danger">Show All Products <span class="badge badge-secondary">Mobiles</span></h1>
</div>
<div class="container mt-5 ">

          

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1 ?>
    <?php foreach($Products as $product) : ?>
      <tr>
      <th scope="row"><?php echo $i ; $i++ ; ?> </th>
      <td> <?php echo $product['name'] ?> </td>
      <td> <?php echo $product['price'] ?> </td>
      <td> <?php echo limit($product['content'])?></td>
      <td> <?php echo $product['qty'] ?> </td>
      <td><a href="<?php url('product/edit/'.$product['id']) ?>" class="btn btn-primary">Edit</a></td>
      <td><a href="<?php url('product/delete/'.$product['id']) ?>"class="btn btn-danger">Delete</a> </td>
 
    </tr>

     <?php endforeach ;?>
  
     
  </tbody>
</table>
 


 
  



</div>
 

<?php include ROOT_PATH.'\app\Views\inc\footer.php' ?>