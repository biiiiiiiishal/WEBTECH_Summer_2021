<?php
session_start(); 
if(empty($_SESSION["Username"])) 
{
header("Location: ../control/login.php"); 
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
<h1>Dashboard</h1>
<hr>
<h3> <?php echo "Welcome, ".$_SESSION["Username"];?></h3>

1) Create Manager ID <a href="ManagerForm.php">Next</a>
<br/><br>
2) Create Guide ID <a href="GuideForm.php">Next</a>
<br><br>
3) View Manager <a href="viewManager.php">Next</a>
<br><br>
4) View Guide <a href="viewGuide.php">Next</a>
<br><br>
5) View Travller <a href="viewTraveller.php">Next</a>
<br><br>
 Do you want to <a href="../control/logout.php">logout</a>

</body>
</html>

<?php


?>   
