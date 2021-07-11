<?php include "../control/action_pkg.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
  <body>
    <h1>Book a tour</h1>
    <hr>
    <form action = "pkg_process.php" method = "post">
    <table>
        <tr>
          <td align="left">Email: </td>
          <td align="left"><input type="text" name="email" /><?php echo $validateemail  ?></td>
        </tr>

        <tr>
          <td align="left">From: </td>
          <td align="left"><input type="text" name="start" /><?php echo $validatest  ?></td>
        </tr>

        <tr>
          <td align="left">Destination:</td>
          <td align="left"><input type="text" name="destination" /><?php echo $validateds  ?></td>
        </tr>

        <tr>
          <td align="left"> Start date:</td>
          <td align="left"><input type="date" name="sd" id=""><?php echo $validatesd  ?></td>
        </tr>

        <tr>
          <td align="left"> End date:</td>
          <td align="left"><input type="date" name="ed" id=""><?php echo $validateed  ?></td>
        </tr>

        <tr>
          <td align="left">
            <input type="submit" name="submit" />
            <input type="reset" name="Reset" />
          </td>
        </tr>
        </table>
    </form>
    <br>
    <a href="pagetwo.php">Back</a>
  </body>
</html>
