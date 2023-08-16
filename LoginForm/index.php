<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Animated Login Form 02</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="box">
    <span class="borderline"></span>
    <form method="post" class="signup-form">
      <h2>LOGIN</h2>
      <div class="inputBox">
        <input type="text" name="uname" required="required">
        <span>Full Name</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" name="pwd" required="required">
        <span>Password</span>
        <i></i>
      </div>
      <div class="links">
        <a href="signup.php">CLICK HERE TO SIGN UP</a>
      </div>
      <input type="submit" name="btnreg" value="LOGIN">
    </form>
  </div>
  
  <?php
if(isset($_POST['btnreg']))
{
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname='srit';
$conn = mysqli_connect($host, $user, $pass,$dbname);
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$sql = "SELECT * FROM persons where UserId='$uname'";
$retval=mysqli_query($conn, $sql);
if(mysqli_num_rows($retval) > 0)
{
while($row = mysqli_fetch_assoc($retval))
{
if($row["Password"]==$pwd)
{
session_start();
$_SESSION["fname"]=$row["Fname"];
header('Location: Welcomedemo.php');
}
else
{
echo " <center><b><font color='red'>Password Mismatch </font></b></center>";
}
}
}
else
{
    // header('Location: Registrationdemo.php');
echo "<center><b><font color='red'>User Not Exist.. Please Register</font></b></center>"; 
}
mysqli_close($conn);
}
?>
</body>
</html>

