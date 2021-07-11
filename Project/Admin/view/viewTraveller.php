<?php include "../Control/action_g.php"; ?>

<?php

        $data = file_get_contents("../../Traveller/view/data.json");
        $mydata = json_decode($data);
       
        $cnt=1;
        foreach($mydata as $myobject)
        {
            echo "Traveller ".$cnt." Details: <br>";

            foreach($myobject as $key=>$value)
            {
                echo $key.": ".$value."<br>";
            }
            echo "<br>";
            $cnt++; 
        }
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
</head>
  <body>
    Go back to Dashboard?<a href="pageone.php">Back</a>
  </body>
</html>

