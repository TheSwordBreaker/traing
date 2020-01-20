<?php
echo "<pre>";


echo "String function"."<br>";
$a = "hello World";
echo "String length is ".strlen($a).".<br><br>";
echo "String word count ".str_word_count($a)."<br>";
echo "String reverse ".strrev($a)."<br>";
echo "String position ".strpos($a,"h")."<br>";
echo "String replace ".str_replace("h", "H", $a)."<br>";
echo "String hex to bin  ".bin2hex($a)."<br>";
echo "String bin to hex ".hex2bin(bin2hex($a))."<br>";

$a = array("hello","world");

echo "implode ".implode(" ", $a);
print_r(explode($a, " "));




$a = array(2,3,4,5,6);
echo $a[0]."<br>";

echo count($a)."<br>";

echo "sort";
sort($a);
print_r($a) ;

echo "<br>Rsort";
rsort($a);
print_r($a);

echo "<br>Array reverse";
array_reverse($a);
print_r($a);

echo "<br>Range";
$n = range(0,5);
print_r($n);
$a1 = array("red","blue");
$a2 = array("Green","red");

$a3 = array("r"=> "red" );

print_r(array_replace($a1, $a2));

echo "red is in array at position".array_search("red", $a1)."<br><br>";

echo "Array merge<br>";

print_r(array_merge($a1,$a3));


$a4 = array("rrr"=> "red" );
// array_change_key_case($a4,CASE_UPPER);
print_r(array_change_key_case($a4,CASE_UPPER));

echo "</pre>";


echo "String function";

?>
