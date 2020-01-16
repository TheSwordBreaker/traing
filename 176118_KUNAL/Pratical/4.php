<?php
  //Fibonace series
function fib($n )
    {
        if($n == 1)
            return 0;
        else if($n == 2)
            return 1;
        else 
            return fib($n-2)+fib($n-1);
    } 
    echo fib(7)."<br>";

   // Factorial program
    function factorial($n){
        
        if($n==0 || $n == 1)
        {
            return 1;
        }
        else
        {
            return $n*factorial($n-1);
        }

    }   
     echo factorial(5)."<br>";

?>