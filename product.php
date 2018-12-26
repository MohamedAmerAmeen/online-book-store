<!DOCTYPE>
<HTML>
    <Head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/hstyle.css">
        <style>
            body{background-image: url("images/bkground.jpg"); margin: 0px; padding: 0px;}
            table, th, td {
  border: 1px solid lightgrey; color: white; text-align: center
}th, td {
  padding: 15px; 
}table {
  border-spacing: 5px;
}
        </style>

    </Head>
    <Body>
        
        
        
        <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}</script>
        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <div class="container">
<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Home</a>
  <a href="product.php">Books</a>
  <a href="branch.php">Branches</a>
  <a href="contact.php">Contact us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div> 
            </div>
        
        
        
        
      
        
        
     

<?php 
require_once 'connection.php';
$pro="SELECT * FROM product";
$query=mysqli_query($conn,$pro)or die("Error: ". mysqli_error($conn));
$result=mysqli_fetch_array($query);
 do { 
 ?> 
    
<div class="vertical" style="float:left; text-align:center; width:30.5%; border: thin solid light-grey; border:5px solid #9A9A9A; border-radius:20px; ; margin-left:20px;" >
<b> <span style="color:white; font-size:24px; "><?php echo $result['name']; ?></span > <br> </b>

<img src=" <?php echo $result['image']; ?>" style="width:220px; height:300px   "/><br>
<span style="color:white; font-size:24px;"><?php echo $result['price']." ";?>EGP</span><br>
<input type="submit" value="Add to cart" style="  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 70%;"/>
</div>
<?php 
	}while($result=mysqli_fetch_array($query)); 
?>


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </Body>
</HTML>