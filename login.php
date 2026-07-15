<?php
$file="details.json";
$jsondetails=file_get_contents($file);
$data=json_decode($jsondetails,true);
$name1=$_POST["name1"];
$name2=$_POST["name2"];
$email=$_POST["email"];
$password=$_POST["password"];
$emails=array_column($data,"email");
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            if(in_array($email,$emails))
                {
                    echo "Email already exists";
                }
                else
                {
                if(strlen($password)!==8)
                    {
                       echo "Password must be exactly 8 characters";
                    }
                else
                    {
                     $data[]=["Firstname"=>$name1,"Lastname"=>$name2,"email"=>$email,"password"=>$password];
                     $jsondata=json_encode($data,JSON_PRETTY_PRINT);
                     file_put_contents($file,$jsondata);
                     echo" Email stored successfully";
                    }
                }
        }
        
    else
        {
            echo"Not valid";
        }
header("location:index.html");
exit;        
    
?>