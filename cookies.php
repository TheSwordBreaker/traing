<?php 
 
 $cookiesName = "KunalGupta";
 $cookiesValue = "Admin";
//  setcookie($cookiesName, $cookiesValue, time()+86400*30, "/");
//Delete The cookies
    setcookie($cookiesName,"",time()-3600);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
     <?php  
        if(!isset($_COOKIE[$cookiesName])){
            echo  "Coookie is not set.".'<br>';
        }
        else{
            echo  "Cookie is ".$cookiesName."is set".'<br>';
            echo  "The value of Cookie is $_COOKIE[$cookiesName].<br>";
            }
     ?>
 </body>
 </html>