<?php
// 1. Write a PHP program to check if a given positive integer is a power of two. 
// Input : 4
// Output :4 is power of 2

if (isset($_POST['submit'])) {
    if (isset($_POST['a'])) {

        $a = (int) $_POST['a'];
        // echo "$a";
        isPowerOf($a, 2);
    }
}

function isPowerOf($args, $powerOf)
{
    $flag = 0;
    $pow = 0;
    $i = 0;

    while ($pow <= $args) {
        $pow = $powerOf ** $i;
        if ($pow == $args) {
            $flag = 1;
            break;
        }
        $i++;
    }

    if ($flag) {
        echo "$args is Power of $powerOf.";
    } else {
        echo "$args is not Power of $powerOf.";
    }
}


?>
Check the nummber is a power of 2 or Not.
<br>
<br>
<br>
<form action="#" method="post">
    Enter the A:<input type="text" name="a"><br>



    <input type="submit" value="check" name="submit">
</form>

