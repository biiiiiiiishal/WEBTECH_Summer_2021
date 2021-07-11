<?php include "../Control/action.php"; ?>
<?php
include('../control/logincheeck.php');

if(isset($_SESSION['Username']) && isset($_SESSION['Password'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<head>
    <title>Admin Login</title>
</head>
<body >
    <h1>Admin Login</h1>
		<hr>
    <form action = "" method = "post">
    <table>
        <tr>
          <td align="left">Username:</td>
          <td align="left"><input type="text" name="Username" /><?php echo $validateUsername; ?></td>
        </tr>
        <tr>
          <td align="left">Password:</td>
          <td align="left"><input type="Password" name="Password" /><?php echo $validatePassword; ?></td>
        </tr>
        <tr>
          <td align="left">
            <input type="Submit" name="Submit" />
          </td>
        </tr>
        </table>
    </form>
    <br>
    Go back to home Page?<a href="../../index.php">Back</a>
</body>
</html>
