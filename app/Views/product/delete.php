<?php include ROOT_PATH.'\app\Views\inc\header.php' ?>
<?php if(isset($success)) :?>
      <h3 class="alert alert-danger text-center mt-4"><?php  echo $success; ?></h3>
          <?php endif ; ?>

          <?php if(isset($errors)) :?>
      <h3 class="alert alert-danger text-center mt-4"><?php  echo $errors; ?></h3>
          <?php endif ; ?>



<?php include ROOT_PATH.'\app\Views\inc\footer.php' ?>