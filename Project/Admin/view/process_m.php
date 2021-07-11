<?php   include "ManagerForm.php" ; ?>
<?php include "../Control/action.php"; ?>

<?php
   	
	   $formdata = array(
		'Full Name' => $_POST["fullname"],
		'Email' => $_POST["email"],
		'Passport number' => $_POST["pn"],
		'DOB' => $_POST['date'],
		'Gender' => $_POST['gender'],
		 'Password' => $_POST['Password']
	 );

       $existingdata = file_get_contents('manager.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] = $formdata;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("manager.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";
?>

