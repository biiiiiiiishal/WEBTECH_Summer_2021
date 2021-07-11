<?php
session_start(); 

if(empty($_SESSION["email"]))
{
header("Location: ../control/login.php");
}

?>

<?php
$cookie_name = "user";
$cookie_value =  $_SESSION["email"];
if($_COOKIE[$cookie_name]!=$cookie_value)
{  
    echo "You are a new user";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}
else
{
    echo "You have visited this site before";
}
?>

<!DOCTYPE html>
<html>
<body>
<h1>Dashboard</h1>
<hr>
<h3><?php echo "Welcome, ".$_SESSION["email"];?></h3>
<br>
Book a tour?<a href="package.php">Book Now</a>
<br><br>
Want to logout? <a href="../control/logout.php">logout</a>
</body>
</html>