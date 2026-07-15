<?php
$file="details.json";
$details=file_get_contents($file);
$data=json_decode($details,true);
$email=$_POST["email"];
$password=$_POST["password"];
$found=false;
foreach($data as $user)
    {
        if($user["email"]==$email && $user["password"]==$password)
            {
                $found=true;
                break;
            }
    }
    if($found)
        {
            header("location:welcome.html");               
            exit;     
           
        }
        else{
            echo "Invalid email or password";
        }

?>        