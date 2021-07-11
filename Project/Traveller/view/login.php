<?php
include('../control/logincheck.php');

if(isset($_SESSION['email']) && isset($_SESSION['password']))
{
    header("location: pagetwo.php");
}
?>

<?php include "../control/myaction.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
  <body>
    <h1>Login Page</h1>
    <hr>
    <form action = "" method = "post">
    <table>
         <tr>
          <td align="left">Email: </td>
          <td align="left"><input type="text" name="email" /><?php echo $validateemail ?></td>
        </tr>

        <tr>
          <td align="left">Password:</td>
          <td align="left"><input type="password" name="password" /><?php echo $validatepassword  ?></td>
        </tr>

        <tr>
          <td align="left">
            <input type="submit" name="login" />
            <input type="reset" name="Reset" />
          </td>
        </tr>

        </table>
    </form>
    <a href="pageone.php">Back</a>
  </body>
</html>
