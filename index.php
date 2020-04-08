<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container mt-4 border border-dark" style="width: 60%;">
    <h2 class="text-center text-bold">Sign Up</h2>
    <hr>
   <form action="" method="post" >
  <div class="form-group">
    <div class="form-group">
    <label for="exampleInputPassword1">First Name</label>
    <input  type="text" class="form-control" id="exampleInputPassword1" placeholder="First name" name="first_name" required="required">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input  type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name" name="last_name" required="required">
  </div>
 
    <label for="exampleInputEmail1">Email address</label>
    <input  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="required">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd" required="required">
    <small id="emailHelp" class="form-text text-muted">password should minimum  6 charcter long </small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Confirm Password</label>
    <input  type="text" class="form-control" id="exampleInputPassword1" placeholder="Confirm -Password" name="cpwd" required="required">
  </div>
  <div class="form-check">
    <input  type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
  </div><br>
  <p class="text-center"><button type="submit" name="submit" class="btn btn-primary">Submit</button></p>
</form>
  </div>
  
</body>
</html>
<?php 
include('db_connect.php');
  if(isset($_POST['submit'])){
    extract($_POST);
    $sql="INSERT INTO user (first_name,last_name,email,password)VALUES('$first_name','$last_name','$email','$pwd')";
    if($pwd==$cpwd){
       $conn->query($sql);
       ?>
       <script type="text/javascript">
         window.alert("Succesfully registered");
       </script>
       <?php
    }
   else{
   ?>
   <script type="text/javascript">
     window.alert("Password doesn't match");
   </script>
   <?php
   } 
   
   
  }
?>
