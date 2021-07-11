<?php
$validateemail="";
$validatesd="";
$validateed="";
$validatedt="";
$validatepassword="";
$validatest="";
$validateds="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))
    {
        $validateemail = "You must enter email";
    }


    if(empty($_REQUEST["sd"]))
    {
        $validatesd = "You must enter start date";

    }

    if(empty($_REQUEST["ed"]))
    {
        $validateed = "You must enter end date";
    }

    if(empty($_REQUEST["start"]))
    {
        $validatest = "You must enter start location";
    }

    if(empty($_REQUEST["destination"]))
    {
        $validateds = "You must enter destination location";
    }
    

}
?>