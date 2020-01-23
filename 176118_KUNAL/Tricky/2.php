<!-- 
2. Write a PHP program to check if a given positive integer is a power of three. 
Input : 9
Output : 9 is power of 3 -->



Check the nummber is a power of 3 or Not.
<br>
<br>
<br>
<form action="#" method="post">
    Enter the A:<input type="text" name="a"><br>



    <input type="submit" value="check" name="submit">
</form>

<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['a'])) {

        $a = (int) $_POST['a'];
        // echo "$a";
        isPowerOf($a, 3);
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