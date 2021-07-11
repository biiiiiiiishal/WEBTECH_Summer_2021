<?php include "../control/myaction.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
</head>
  <body>
    <h1>Personal Details</h1>
    <hr>
    <form action = "process.php" method = "post">
    <table>
        <tr>
          <td align="left">Full name:</td>
          <td align="left"><input type="text" name="fullname" /><?php echo $validatename  ?></td>
        </tr>

        <tr>
          <td align="left">Password:</td>
          <td align="left"><input type="password" name="password" /><?php echo $validatepassword  ?></td>
        </tr>

        <tr>
          <td align="left">Passport number: </td>
          <td align="left"><input type="text" name="pn" /><?php echo $validatepass  ?></td>
        </tr>

        <tr>
          <td align="left"> DOB:</td>
          <td align="left"><input type="date" name="date" id=""><?php echo $validatedate  ?></td>
        </tr>

        <tr>
          <td align="left">Email: </td>
          <td align="left"><input type="text" name="email" /><?php echo $validateemail ?></td>
        </tr>

        <tr>
          <td align="left">Select Gender:</td>
          <td align="left">
            <input type="radio" name="gender" value="male"/>Male
            <input type="radio" name="gender" value="female"/>Female
            <input type="radio" name="gender" value="other"/>Other
            <?php echo $validateradio  ?>
          </td>
        </tr>
        <tr>
          <td align="left">
            <input type="submit" name="submit" />
            <input type="reset" name="Reset" />
          </td>
        </tr>
        </table>
    </form>

    <a href="login.php">Login</a>
    <br>
    Go back to home Page?<a href="../../index.php">Back</a>
  </body>
</html>
