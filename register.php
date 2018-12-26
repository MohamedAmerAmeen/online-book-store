<html>
<head><title>Register</title>
        <link rel="stylesheet" href="css/style.css">
       <style>
        body {
   background-image: url("images/bkground.jpg");
}
           label{color:white; font-size: 20px;}
           p{color:white;}
           a{color: aqua}
           legend{color: white; font-size:24px; "}
    </style>


</head>
<body>
    
<fieldset style="Width:50% ; margin:Auto; margin-top:40px; background-color:rgba(0, 0, 0, 0.3); border: 0px;">
<legend >Sign UP</legend>
<form name="register" action="code.php" method="POST">
      <div class="imgcontainer">
    <img src="images/avatar.png" alt="Avatar" class="avatar" style="width:30%">
  </div>
<label>Name: </label>
<input type="text" name="name" placeholder="Enter your name" /><br>
<label>Username:</label> 
<input type="text" name="user" placeholder="Enter username" /><br>
<label>Password:</label> 
<input type="password" name="pass" required="required" placeholder="Enter Password"/><br>
    <p>Already have account? <a href="login.php">Login</a></p>
<button>Sign up</button></form>
</fieldset>
    
</body>
</html>