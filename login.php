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
                $log=$user["Firstname"];
                break;
            }
    }
    if($found)
        {
            echo "Login successfull, welcome"."<br>". $log ."<br>";
        }
        else{
            echo "Invalid email or password";
        }
header("location:welcome.html");        

?>        