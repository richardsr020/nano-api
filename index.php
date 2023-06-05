<?php session_start(); ?>
<?php require 'public/partials/headers.php';?>


<?php
if(!isset($_SESSION['id'])){
   require 'public/view/Auth/auth.html';
   
}else{
   print_r($_SESSION['id']);
   require 'public/view/chat/index.php';
   
}
?>

<?php require 'public/partials/footer.php';?>

