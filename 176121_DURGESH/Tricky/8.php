
8. Write a PHP program to compute and return the square root of a given number. <br>
Input : 16 <br>
Output : 4




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
        $result = pow($a,0.5);
        // $result = sqrt($a);
        echo "$result is square of $a";
        
    }
}