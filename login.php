
<html>
<head>
<title>Login</title>
                <link rel="stylesheet" href="css/style.css">
       <style>
        body {
   background-image: url("images/bkground.jpg");
}
           label{color:white;}
           p{color:white;}
           a{color: aqua}
           legend{color: white; font-size:24px; "}
    </style>

</head>
<body>

    
    
 <?php require_once('connection.php'); ?>
 <?php 	
  if(isset($_POST['login'])){
  $user=$_POST['username'];
  $pass=$_POST['password'];
  $compare="select * from users where username='$user' and password='$pass'";
  $comquery= mysqli_query($conn,$compare)or die("Error: ". mysqli_error($conn));
  if(mysqli_num_rows($comquery)!=0){
  session_start();
  $_SESSION['name']=$user;
  echo "<script>location.assign('product.php')</script>";}
  else { 
  echo " <p>Wrong username or Password</p>"; }}   
 ?>
<fieldset  style="Width:50% ; margin:Auto; margin-top:40px; background-color:rgba(0, 0, 0, 0.3) ;border:3px;" > <legend>Login</legend>
   <form id="login" name="login" method="post" action="home.php">
  <div class="imgcontainer">
    <img src="images/avatar.png" alt="Avatar" class="avatar" style="width:30%">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" name="username" required="required" placeholder="Enter Username">

    <label ><b>Password</b></label>
    <input type="password" name="password" required="required" placeholder="Enter Password">
      <p>don't have an account?<a href="register.php">Register</a></p>

    <button>Login</button>

  </div>

</form>
</fieldset>

</body>
</html>