<?php 
  session_start();
  
  require '../../../model/Model.php';
  require '../../../model/User.php';
  require '../../../model/Contact.php';
  require "../../../model/Router.php";

  if(isset($_POST['phone'])){
    Rout::addNewContact();
  }


?>



<form method="POST" action="newContact.php">

  <div class="form-group">

    <label for="phoneNumber">phone</label>

    <input type="text" class="form-control" name="phone" aria-describedby="phoneHelp" placeholder="Enter New contact phone Number">

    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

  </div>

  <button type="submit" class="btn btn-primary">Search</button>

</form>



