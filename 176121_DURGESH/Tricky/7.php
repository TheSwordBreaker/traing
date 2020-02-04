
7. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to a given number. 
Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))
Output : Array
(
[0] => 2 + 7 + 7 = 16
[1] => 7 + 1 + 8 = 16
)


<?php
$a = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
echo "<br><br>".implode(" ",$a)."<br>";

function findthis($a,$check){
    $result = array();
    for($i = 0 ; $i < count($a)-2 ; $i++){
        // $sum = $a[$i] + $a[$i+1] + $a[$i+2];
        $sum = array_sum(array_slice($a,$i,3));
        if($sum == $check){
            // array_push($result,array_slice($a,$i,3));
            
            array_push($result,array($sum => array_slice($a,$i,3)));
            
            // $result[$sum] = array_slice($a,$i,3);
            // $result += [$sum => array_slice($a,$i,3)];
    
        }
    }
    return $result;
}

print_r(findthis($a,16));
