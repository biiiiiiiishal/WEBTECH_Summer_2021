<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['Submit'])) {
if (empty($_POST['Username']) || empty($_POST['Password'])) 
{
    $error = "Username or Password is invalid";
}
else
{
   $f1=0;
   $f2=0;
   $data = file_get_contents("../../Admin/view/manager.json");
   $mydata = json_decode($data);
    
    foreach($mydata as $myobject)
    {
         foreach($myobject as $key=>$value)
        {
             if($key=="Email" && $value==$_POST["Username"])
             {
                 $f1=1;
             }
             if($key=="Password" && $value==$_POST["Password"])
             {
                 $f2=1;
             }
        } 

        if($f1 && $f2)
        {
            break;
        }
        else
        {
            $f1=0;
            $f2=0;
        }
    }

   if(!$f1 || !$f2)
   {
       echo "Invalid username or password";
   }
   else
   {
        $_SESSION["Username"] = $_POST['Username'];
        $_SESSION["Password"] = $_POST['Password'];
   }

}
 
}

?>

<?php


