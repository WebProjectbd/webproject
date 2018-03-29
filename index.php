<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>welcom My Project</title>
  
  
  <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

    <div class="wrapper">
    <form class="form-signin" method="post" action="index.php">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="User Name" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>   
    </form>
  </div>
  
  

</body>


</html>
<?php
//session_start();

$username="admin";
$password="admin";

/*if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
  header("Location: home.php");
}*/
if(isset($_POST['username']) && isset($_POST['password'])){
  if($_POST['username']==$username && $_POST['password']==$password){
   // $_SESSION['logged_in']=true;
    header("Location: home.php");
  }
}

?>