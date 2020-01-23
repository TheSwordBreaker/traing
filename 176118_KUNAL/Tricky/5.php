
5. Write a PHP program to find a missing number(s) from an array.
Input : 1,2,3,6,7,8
Output : Array
(
[3] => 4
[4] => 5
)
<br>
<br>
<br>


<?php 
$a = [1,2,3,6,7,8];
echo implode(", ",$a);
echo "<br>";
$result = array();
for($i = $a[0] ; $i < $a[count($a)-1]; $i++ )
{
    $flag = array_search($i+1,$a);
    
    if($flag == false){
        $result[$i] = $i+1;
    }
} 
print_r($result);
?>