
<!-- header and nav of the page modifiable-->
<?php include('../APP/views/home/page_Parts/header.php') ?>

 <!-- Page Content -->
 <div class="container">

   <!-- modals of the page modifiable -->
   <!-- modal Sign In -->
  <?php include('../APP/views/home/modals/sign_In.php') ?>
    <!-- modal Log In -->
  <?php include('../APP/views/home/modals/log_In.php') ?>
    <!-- modal newItem -->
  <?php include('../APP/views/home/modals/newItem.php') ?>

  <!-- body of the page -->

       <!-- for the space page -->
       <br>
       <br>
       <br>
       <?php if (isset($_SESSION['user_id'])): ?>
         <div class="col-md-3">
             <p class="lead">Image perfil??</p>
             <div class="list-group">
               <img class="img-responsive" src="http://placehold.it/250x300" alt="">
             </div>
         </div>
       <?php endif; ?>

         <div class="col-md-9">

         	<!-- principal content -->
             <div class="comments-container">

              <?php $users = new users(); $users->showItems();?>


         	</div>
 <!-- /.container -->

 <!-- End of the body -->

 <!-- footer of the page modifiable -->
 <?php include('../APP/views/home/page_Parts/footer.php') ?>
