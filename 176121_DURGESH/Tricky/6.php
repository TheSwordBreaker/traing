6. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero.
Input : (-1,0,1,2,-1,-4)
Output : Array
(
[0] => -1 + 0 + 1 = 0
)


<?php
$a = [-1,0,1,2,-1,-4];
echo "<br>".implode(" ",$a)."<br>";
// $result = [];
for($i = 0 ; $i < count($a)-2 ; $i++){
    // $sum = $a[$i] + $a[$i+1] + $a[$i+2];
    $sum = array_sum(array_slice($a,$i,3));
    if($sum == 0){
        // array_push($result,array_slice($a,$i,3));
        $result[$sum] = array_slice($a,$i,3);
    break;

    }
}
print_r($result);


?>