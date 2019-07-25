<a href="index.php">Home</a>
<a href="e1p1.php">Experiment 3 Program1</a>
<a href="e3p2.php">Experiment 3 Program2</a>
<a href="e3p3.php">Experiment 3 Program3</a>
<a href="e3p4.php">Experiment 3 Program4</a>
<a href="e3p5.php">Experiment 3 Program5</a>
<center>
<h1>EXPERIMENT 3 <br>PROGRAM 3</h1>
<form action="" method="get">
  Enter first string : <input type="text" name="str1" id="inputName"><br>
  Enter second string : <input type="text" name="str2" id="inputName"><br>
  <input type="submit">
</form>
<?php
  if(isset($_GET['str1']) and isset($_GET['str2']))
  {
  function swap1($first,$second)/*call by value*/
  {
    $t=$first;
    $first=$second;
    $second=$t;
    echo "$first  $second";
  }
  $a=$_GET['str1'];
  $b=$_GET['str2'];
  echo "BEFORE SWAPPING :- ".$a." ".$b,'<br>';
  echo "AFTER SWAPPING :-",'<br>';
  swap1($a,$b);
  }
?>
<?php
 echo":CODE:<br>";
show_source("e3p3.php");
?>
</center>
