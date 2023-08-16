
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Animated Login and Signup Forms</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="box">
    <span class="borderLine"></span>
    <form class="login-form">
      <!-- Your login form content -->
    </form>

    <form class="signup-form" method="post">
      <!-- Your signup form content -->
	
      <div class="inputBox">
        <input type="text" name="fname" required="required">
        <span>Full Name</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="text" name="uname" required="required">
        <span>Email</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" name="pwd" required="required">
        <span>Password</span>
        <i></i>
      </div>
      <div class="links">
        <a href="index.php">Already have an account? Login</a>
      </div>
      <input type="submit" name="signup" value="Sign up">
  </div>
</form>
<?php 
if(isset($_POST['signup']))
{ 
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname='srit';
$conn = mysqli_connect($host, $user, $pass,$dbname);  
$fname=$_POST["fname"]; 
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$sql = "insert into persons values('','$fname','$uname','$pwd')";  
if(mysqli_query($conn, $sql))
{
echo "<center><b><font color='green'>Registration Successful</font></b></center>";
}
else
{
echo "<center><b><font color='red'>Registration failure</font></b></center>";
}
mysqli_close($conn);  
}
?> 
</body>
</html>
