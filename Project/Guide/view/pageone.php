<?php
session_start(); 

if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); 
}

?>

<?php
$cookie_name = "user";
$cookie_value =  $_SESSION["username"];
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
<?php echo "Welcome, ". $_SESSION["username"];?>
<br/><br>

Want to logout? <a href="../control/logout.php">logout</a>
</body>
</html>