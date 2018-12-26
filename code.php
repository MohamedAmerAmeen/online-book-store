<html>
<head><title>section4</title>
</head>
<body>

<?php
require_once('connection.php');
$n=$_POST['name'];
$u=$_POST['user'];
$p=$_POST['pass'];
$ins= "INSERT INTO users (name,username,password)
VALUES('$n','$u','$p')";
if(!mysqli_query($conn,$ins)){die('Error:'. mysqli_error($con));}
else echo" your information was Inserted successfully";
?>

</body>
</html>