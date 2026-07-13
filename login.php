<?php
$file="details.json";
$jsondetails=file_get_contents($file);
$data=json_decode($jsondetails,true);
$email=$_POST["email"];

    if(str_ends_with($email,"@gmail.com"))
        {
                $data[]=$email;
                $jsondata=json_encode($data,JSON_PRETTY_PRINT);
                file_put_contents($file,$jsondata);
        }
    else
        {
            echo"Not valid";
        }

    
?>