<a href="index.php">Home</a>
<a href="e1p1.php">Experiment 3 Program1</a>
<a href="e3p2.php">Experiment 3 Program2</a>
<a href="e3p3.php">Experiment 3 Program3</a>
<a href="e3p4.php">Experiment 3 Program4</a>
<a href="e3p5.php">Experiment 3 Program5</a>
<center>
<h1>EXPERIMENT 3 <br>PROGRAM 2</h1>
<form action="" method="get">
<form>
  Enter first number : a= <input type="number" name="num1" id="inputName"><br>
  Enter second number : b= <input type="number" name="num2" id="inputName"><br>
  <input type="radio" name="cal" value="add"> (a+b)-ADD
  <br>
  <input type="radio" name="cal" value="subtract"> (a-b)-SUBTRACT
  <br>
  <input type="radio" name="cal" value="multiply"> (a*b)-MULTIPLY
  <br>
  <input type="radio" name="cal" value="division"> (a/b)-DIVISION
  <br>
  <input type="submit",name="submit">
</form>
<?php
 if(isset($_GET['cal']))
  {
    $ch=$_GET['cal'];
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    echo "OUTPUT",'<br>';
    switch($ch)
    {
      case 'add':
      {
        $sum=$a+$b;
        echo "$a  + $b  = $sum";
        break;
      }
      case 'subtract':
      {
        $sub=$a-$b;
        echo "$a  - $b  = $sub";
        break;
      }
      case 'multiply':
      {
        $mul=$a*$b;
        echo "$a  * $b  = $mul";
        break;
      }
      case 'division':
      {
        $div=$a/$b;
        echo "$a  + $b  = $div";
        break;
      }
    }
  }
?>
<?php
 echo":CODE:<br>";
show_source("e3p2.php");
?>
</center>
