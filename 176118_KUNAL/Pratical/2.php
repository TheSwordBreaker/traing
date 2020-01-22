<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="#" method="Post">
    <div class=" container col-2 m-5">
      <div class="form-group">
        A
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter A" name="a">
      </div>
      <div class="form-group">
        B
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter B" name="b">
      </div>
      <div class="form-group">

        <input type="radio" name="cal" value="add">Add
      </div>
      <div class="form-group">
        <input type="radio" name="cal" value="sub">Sub

      </div>
      <div class="form-group">

        <input type="radio" name="cal" value="mul">Mul
      </div>
      <div class="form-group">
        <input type="radio" name="cal" value="div">Div
      </div>
      <input type="submit" value="submit" name="submit">

  </form>
  </div>

</body>

</html>
<?php
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
  function is_prime($n){
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
            echo "it is prime number";
        }else{
            echo "it is not a prime number";
        }
    }


function is_odd($n)
{

  if ($n % 2 == 0) {
    echo $n . " is even";
  } else
    echo $n . " is odd";
}

function check($n)
{

  if ($n > 0) {
    echo $n . " is poistive";
  } else
    echo $n . " is negative";
}

if (isset($_POST['submit'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  switch ($_POST['cal']) {
    case "add":

      break;
    case "sub":
      $c =  $a - $b;
      echo "The Subtraction of A and B is $c.";
      break;
    case "mul":
      $c =  $a + $b;
      echo "The Mul of A and B is $c.";
      break;
    case "div":
      $c =  $a + $b;
      echo "The Divion  of A and B is $c.";
      break;

    default:
      echo "Something went wrong.....";
      break;
  }
}


?>


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
			echo "Factorial is  ".fact($n);
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
	echo "Factorial is  ".fact($_POST['no']);
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
