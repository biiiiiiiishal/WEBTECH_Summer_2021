<?php
include('../control/logincheck.php');

if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
    header("location: pageone.php");
}
?>
<?php include "../control/action.php"; ?>
<!DOCTYPE html>
<head>
    <title>Guide Login</title>
</head>
<body >
    <h1>Guide Login</h1>
    <hr>
    <form action = "" method = "post">
    <table>
        <tr>
          <td align="left">Username:</td>
          <td align="left"><input type="text" name="username" /><?php echo $validateusername; ?></td>
        </tr>
        <tr>
          <td align="left">Password:</td>
          <td align="left"><input type="password" name="password" /><?php echo $validatepassword; ?></td>
        </tr>
        <tr>
          <td align="left">
            <input type="submit" name="Login" />
          </td>
        </tr>
        </table>
    </form>
    <br>
    Go back to home Page?<a href="../../index.php">Back</a>
</body>
</html>