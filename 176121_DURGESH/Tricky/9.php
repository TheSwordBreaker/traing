
9. Write a PHP program to find a single number in an array that doesn't occur twice. 
Input : array(5, 3, 4, 3, 4) <br>
Output :<br> Array 
(
[0] => 5
[1] => 3
[2] => 4
[3] => 3
[4] => 4
) <br>
Single Number: 5
<br>
<br>
<br>
<br>

<form action="#" method="post">


    Enter the A:<input type="text" name="a[]"><br>
    Enter the A:<input type="text" name="a[]"><br>
    Enter the A:<input type="text" name="a[]"><br>
    Enter the A:<input type="text" name="a[]"><br>
    Enter the A:<input type="text" name="a[]"><br>



    <input type="submit" value="check" name="submit">
</form>





<?php

    if(isset($_POST["submit"])){
        $a = $_POST["a"];
        print_r($a);
    // $a = array(5,3,4,3,4);
    
    
        $result = array_count_values($a);
        foreach( $result as $key =>$values ){
            if($values == 1){
                echo "Single number is $key";
            }
        }

       
    
    }
?>


