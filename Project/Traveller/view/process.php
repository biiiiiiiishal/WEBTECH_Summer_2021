<?php   include "pageone.php" ; ?>
<?php include "../control/myaction.php"; ?>

<?php
   	
	   $formdata = array(
	      'Full Name' => $_POST["fullname"],
	      'Email' => $_POST["email"],
	      'Passport number' => $_POST["pn"],
          'DOB' => $_POST['date'],
          'Gender' => $_POST['gender'],
		   'Date of travel' => $_POST['dt'],
		   'Password' => $_POST['password']
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] = $formdata;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	
?>