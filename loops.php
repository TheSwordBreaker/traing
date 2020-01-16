<?php
$size = 255;
for ($i=1; $i <= $size; $i++){ 
   $j = 0;
   while($j < ($size+1)/2){
        if($i <= ($size+1)/2 )
        {  
            if($j < $i)
                echo "*";
        }
        else{
            if($j <= $size - $i)
                echo "*";
        }
        $j++;
   }
   echo "<br>";
}


?>