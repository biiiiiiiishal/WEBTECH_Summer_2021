<?php   include "package.php" ; ?>

<?php
   	
	   $formdata = array(
		'Email' => $_POST["email"],
		'From' => $_POST['start'],
		'Destination' => $_POST['destination'],
		'Start date' => $_POST['sd'],
		'End date' => $_POST['ed']
	 );
	 $existingdata = file_get_contents('pkg.json');
	 $tempJSONdata = json_decode($existingdata);
	 $tempJSONdata[] = $formdata;

	 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	 
	 if(file_put_contents("pkg.json", $jsondata)) {
		  echo "Data successfully saved <br>";
	  }
	 else 
		  echo "no data saved";
    
	
?>