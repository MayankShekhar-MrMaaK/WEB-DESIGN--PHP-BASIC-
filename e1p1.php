<a href="index.php">Home</a>
<a href="e1p1.php">Experiment 3 Program1</a>
<a href="e3p2.php">Experiment 3 Program2</a>
<a href="e3p3.php">Experiment 3 Program3</a>
<a href="e3p4.php">Experiment 3 Program4</a>
<a href="e3p5.php">Experiment 3 Program5</a>
<center>
<h1>EXPERIMENT 3 <br>PROGRAM 1</h1>
<form name="numbers", action="", method="POST">
	Enter the number (Maximum length of digits=5) :
	<input type="text" size=5 maxlength=5 name="num1"><br>
	<input type="Submit" name="Submit" value="Submit"><br><br>
</form>
<?php

    if(isset($_POST['Submit']))
    {
        $x = $_POST['num1'];
        if(($x%2)==0)
        {
          echo "$x is Even";
        }
        else
        {
          echo "$x is Odd";
        }
        echo '<br>';
        echo '<br>';
        echo "Table of the $x is :";
        echo '<br>';
        for($i=1;$i<=10;$i++)
        {
            $y = $x * $i;
            echo $x,"*",$i,"=",$y;
            echo '<br>';
        }
        echo '<br>';
        $m=0;
        $sum=0;
        for($i=0;$i<strlen($x);$i++)
        {
            $m = (int)$x[$i]*(int)$x[$i];
            $sum = $sum + $m;
        }
        echo "The Sum of Square of $x is ".$sum;
    }
?>
<?php
 echo":CODE:<br>";
show_source("e1p1.php");
?>
</center>
