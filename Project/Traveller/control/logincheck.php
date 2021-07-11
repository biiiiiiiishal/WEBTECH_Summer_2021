<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['login'])) 
{
    if (empty($_POST['email'])) 
    {
        $error = "Email or Password is invalid";
    }
    else
    {
       $f1=0;
       $f2=0;
       $data = file_get_contents("../view/data.json");
       $mydata = json_decode($data);
        
        foreach($mydata as $myobject)
        {
             foreach($myobject as $key=>$value)
            {
                 if($key=="Email" && $value==$_POST["email"])
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
            $_SESSION["email"] = $_POST['email'];
            $_SESSION["password"] = $_POST['password'];
       }

    }
    
}

?>


