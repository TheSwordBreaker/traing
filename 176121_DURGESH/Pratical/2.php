


<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
</head>
<body>

<form action="#" method="post">
	Enter a number:
	<input type="text" name="no">

	<input type="submit" name="submit" value="Factorial ">
	<input type="submit" name="submit" value="Even Odd">
	<input type="submit" name="submit" value="Prime No. ">
	<input type="submit" name="submit" value="Positive Negative">
</form>
</body>
</html>

<?php 

if(isset($_POST['no']))
{ 
	$n = (int)$_POST['no'];

	$fun = $_POST['submit'];
	switch ($fun) {
		case 'Factorial':
      f($n);
			break;
		case 'Even Odd':
			is_odd($n);
			break;
		case 'Prime No. ':
			prime($n);
			break;
		case 'Positive Negative':
			is_positive($n);
			break;
		
		default:
			# code...
			break;
	}
	
}

if(isset($_POST['prime']))
{
	prime($_POST['no']);
}


function fact($n){
	if($n == 1 || $n ==0)
	{
		return 1;
	}
	else{
		return ($n * fact($n-1));
	}
}
function f($n){
  echo "Factorial of $n is  ".fact($n);
}


function prime($n){
        $count = 0; 
        $i = 2;
        while($i != $n){
            if($n % $i == 0){
                $count = 1;
            }
            $i++;
        }

              if($count == 0)
        {
            echo "$n is prime number. ";
        }else{
            echo "$n is not a prime number. ";
        }
    }

function is_odd($n){
	if($n%2 == 0)
		echo "$n is Even.";
	else
		echo "$n is Odd.";
}

function is_positive($n){
	if($n > 0){
		echo "$n is Positive.";
	}else{
		echo "$n is Negative.";
	}
}

?>
