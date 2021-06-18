<?php
$validatename="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$validatepassword="";
$v1=$v2=$v3="";
$name=$email=$gender="";
if(isset($_POST["Submit"]))
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "you must enter name";

}
else
{
    $name=$_REQUEST["fname"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}
if(!isset($_REQUEST["hobby1"])&&!isset($_REQUEST["hobby2"])&&!isset($_REQUEST["hobby3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["hobby1"]))
   {
       $v1= $_REQUEST["hobby1"];
   }
   if(isset($_REQUEST["hobby2"]))
   { 
       $v2= $_REQUEST["hobby2"];
   }
   if(isset($_REQUEST["hobby3"]))
   {
    $v3= $_REQUEST["hobby3"];
   }
}
if(isset($_REQUEST["Gender"]))
{
    $validateradio= $_REQUEST["Gender"];
}
else{
    $validateradio= "please select at least one radio";

}

$target_file = "Files/".$_FILES["Fileupload"]["name"];

if(move_uploaded_file($_FILES["Fileupload"]["tmp_name"], $target_file))
{
    echo "you have uploaded ".$_FILES["Fileupload"]["name"];
    echo "<br>".$_FILES["Fileupload"]["type"];
    echo "<img src=".$target_file.">";


}
else
{
    echo "sorry, there was an error uploading file";
}
}
?>