<?php
session_start(); 
if(empty($_SESSION["Username"])) 
{
header("Location: ../view/login.php"); 
}

?>

<?php
$cookie_name = "user";
$cookie_value =  $_SESSION["Username"];
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
<br>
<?php echo "Welcome, ".$_SESSION["Username"];?>
<h1>Dashboard</h1>
<hr>

View Traveller Requests <a href="viewPackage.php">View</a>
<br>
 <h5>Do you want to <a href="../Control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   
