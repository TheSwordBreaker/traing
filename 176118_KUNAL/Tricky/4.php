
<!-- 4. Write a PHP program to check if an integer is the power of another integer. <br> 
Input : 16, 2 <br>
Output : 16 is power of 2 <br>
Example: For x = 16 and y = 2 the answer is "true", and for x = 12 and y = 2 "false" <br> -->

Check the A is a power of B or Not.
<br>
<br>
<br>
<form action="#" method="post">
    Enter the A:<input type="text" name="a"><br>
    Enter the B:<input type="text" name="b"><br>



    <input type="submit" value="check" name="submit">
</form>

<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['a']) && isset($_POST['b']) ){

        $a = (int) $_POST['a'];
        $b = (int) $_POST['b'];

        // echo "$a";
        isPowerOf($a, $b);
    }else{
        echo "Insert Both values";
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