
<form action="#" method="post">
    Enter the A:<input type="text" name="a"><br>

    Enter thr B:<input type="text" name="b"><br>

    
    <input type="submit" value="submit" name="submit">
</form>

<?php

if (isset($_POST['submit'])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    power($a,$b);
}

function power($a,$b){
    $power = 1;
    for($i = 0; $i< $b;$i++){
        $power *= $a;
    }
    echo "The Power of $a is rasied to $b is $power.";

}

?>

