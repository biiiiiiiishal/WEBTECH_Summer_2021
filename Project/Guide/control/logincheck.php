<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['Login'])) 
{
    if (empty($_POST['username'])) 
    {
        $error = "Email or Password is invalid";
    }
    else
    {
        $f1=0;
        $f2=0;
        $data = file_get_contents("../../Admin/view/Guide.json");
        $mydata = json_decode($data);
         
         foreach($mydata as $myobject)
         {
              foreach($myobject as $key=>$value)
             {
                  if($key=="Email" && $value==$_POST["username"])
                  {
                      $f1=1;
                  }
                  if($key=="Password" && $value==$_POST["password"])
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
            $_SESSION["username"] = $_POST['username'];
            $_SESSION["password"] = $_POST['password'];
        }
     
    }
        
}
?>


