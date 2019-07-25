<a href="index.php">Home</a>
<a href="e1p1.php">Experiment 3 Program1</a>
<a href="e3p2.php">Experiment 3 Program2</a>
<a href="e3p3.php">Experiment 3 Program3</a>
<a href="e3p4.php">Experiment 3 Program4</a>
<a href="e3p5.php">Experiment 3 Program5</a>
<center>
<h1>EXPERIMENT 3 <br>PROGRAM 4</h1>
<form action="" method="get"> Enter two Numbers :
  <input type="number" name="num1" id="inputName">
  <input type="number" name="num2" id="inputName"><br>
  <input type="submit" name="submit" value="Submit" >
</form>
<?php
  if(isset($_GET['num1']) and isset($_GET['num2'] ))
  {
  $n1=0;
  $n2=0;
  $n1=$_GET["num1"];
  $n2=$_GET["num2"];
  echo "NUMBER DIVISIBILE BETWEEN [$n1 and $n2] BY 5 ARE:-";
  echo '<br>';
  for($i=$n1;$i<=$n2;$i++)
    {
      if($i%5==0)
        echo $i," ";
      else
        continue;
      echo '<br>';
    }
  echo '<br>';
  echo "PRIME NUMBER BETWEEN [$n1 and $n2] ARE:-",'<br>';
  $flag=0;
  $i=0;
  $j=0;
  $n1=$_GET["num1"];
  $n2=$_GET["num2"];
  for($i=$n1;$i<=$n2;$i++)
    {
      for($j=2;$j<$i;$j++)
      {
        if($i%$j==0)
        {
          $flag++;
          break;
        }
        else
          continue;
      }
      if($flag==0)
      {
        echo $i;
        echo '<br>';
        $flag=0;
      }
      else
      {
        $flag=0;
        continue;
      }
    }
}
?>
<?php
 echo":CODE:<br>";
show_source("e3p4.php");
?>
</center>
