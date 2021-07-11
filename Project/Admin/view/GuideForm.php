<?php include "../Control/action_g.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
</head>
  <body>
    <h1>Create Guide ID</h1>
    <hr>
    <form action = "process_g.php" method = "post">
    <table>
        <tr>
          <td align="left">Full name:</td>
          <td align="left"><input type="text" name="fullname" /><?php echo $validatename  ?></td>
        </tr>

        <tr>
          <td align="left">Password:</td>
          <td align="left"><input type="password" name="Password" /><?php echo $validatepassword  ?></td>
        </tr>

        <tr>
          <td align="left">NID: </td>
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
            <input type="submit" name="Register_g" />
            <input type="reset" name="Reset" />
          </td>
        </tr>
        </table>
    </form>
    <br>
    Go back to Dashboard?<a href="pageone.php">Back</a>
  </body>
</html>
