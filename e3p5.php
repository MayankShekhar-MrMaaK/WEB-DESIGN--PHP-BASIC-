<a href="index.php">Home</a>
<a href="e1p1.php">Experiment 3 Program1</a>
<a href="e3p2.php">Experiment 3 Program2</a>
<a href="e3p3.php">Experiment 3 Program3</a>
<a href="e3p4.php">Experiment 3 Program4</a>
<a href="e3p5.php">Experiment 3 Program5</a>
<center>
<h1>EXPERIMENT 3 <br>PROGRAM 5</h1>
<form  action=" " method="post">
  Enter Your Seat number:
  <input type="text" name="num1" size="2" maxlength="2"><br>
  <input  type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
  $x= $_POST['num1'];
  if($x<1 || $x>72)
  {
    echo"Invalid input";
  }
  else
  {
    switch ($x)
    {
      case($x % 8 == 1 ||  $x % 8 == 4) :
      echo"Seat no. $x is Lower birth";
      break;
      case($x % 8 == 2 ||  $x % 8 == 5) :
      echo"Seat no. $x is Middle birth";
      break;
      case($x % 8 == 3 || $x % 8 == 6) :
      echo"Seat no. $x is Upper birth";
      break;
      case($x % 8 == 7) :
      echo"Seat no. $x is Side lower birth";
      break;
      case($x % 8 == 0) :
      echo"Seat no. $x is Side upper birth";
      break;
    }
  }
}
?>
<?php
 echo":CODE:<br>";
show_source("e3p5.php");
?>
</center>
