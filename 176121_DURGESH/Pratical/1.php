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
if (isset($_POST['submit'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  switch ($_POST['cal']) {
    case "add":
      $c =  $a + $b;
      echo "The Addition of A and B is $c.";
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