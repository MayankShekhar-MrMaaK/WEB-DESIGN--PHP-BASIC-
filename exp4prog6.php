<html>
<html lang="en">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
		<link href="sty3.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="ic onic.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="prefix-free.js"></script>
	</head>
<center>
</html>
<body>
	<nav>
		<ul class="menu">
			<li><a href="index.php"><span class="iconic home"></span> Home</a></li>
			<li><a href="#"><span class="iconic plus-alt"></span> Experiment 3</a>
				<ul>
					<li><a href="exp3prog1.php">Experiment 3 Program1</a></li>
					<li><a href="exp3prog2.php">Experiment 3 Program2</a></li>
          <li><a href="exp3prog3.php">Experiment 3 Program3</a></li>
          <li><a href="exp3prog4.php">Experiment 3 Program4</a></li>
          <li><a href="exp3prog5.php">Experiment 3 Program5</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic plus-alt"></span> Experiment 4/5</a>
				<ul>
					<li><a href="exp4prog1.php">Experiment 4 Program1</a></li>
					<li><a href="exp4prog2.php">Experiment 4 Program2</a></li>
          <li><a href="exp4prog3.php">Experiment 4 Program3</a></li>
          <li><a href="exp4prog4.php">Experiment 4 Program4</a></li>
          <li><a href="exp4prog5.php">Experiment 4 Program5</a></li>
          <li><a href="exp4prog6.php">Experiment 4 Program6</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic plus-alt"></span> Experiment 6</a>
        <ul>
					<li><a href="exp6prog1.php">Experiment 6 Program1</a></li>
					<li><a href="exp6prog2.php">Experiment 6 Program2</a></li>
					<li><a href="exp6prog3.php">Experiment 6 Program3</a></li>
					<li><a href="exp6prog4.php">Experiment 6 Program4</a></li>
        </ul>
      </li>
		</ul>
	</nav>
	<br>

<h1 style="color:white;font-size:250%;"><br>EXPERIMENT-4<br><br></h1>
<h1 style="color:white;font-size:200%;">Program-5</h1><br>
<h1 style="color:white;font-size:100%;">
	<form action="" method="GET">
	<table>
	<tr>
	<td>Maths : </td><td colspan=2><input type=number name="maths" required></td>
	</tr>
	<tr>
	<td>Science : </td><td colspan=2><input type=number name="science" required></td>
	</tr>
	<tr>
	<td>English : </td><td colspan=2><input type=number name="english" required></td>
	</tr>
	<tr>
	<td>Language : </td><td colspan=2><input type=number name="lang" required></td>
	</tr>
	<tr>
	<td>Moral : </td><td colspan=2><input type=number name="moral" required></td>
	</tr>
	<tr>
	<td><input type="submit" name="submit" value="CALCULATE"></td>
	</tr>
	</table>
	</form>
<hr>
<body>
	<?php
	if(isset($_REQUEST['submit']))
	{
		function calc($s1,$s2,$s3,$s4,$s5)
		{
			$average=0;
			$average=($s1+$s2+$s3+$s4+$s5)/5;
			return $average;
		}
		$s1=$_GET['maths'];
		$s2=$_GET['science'];
		$s3=$_GET['english'];
		$s4=$_GET['lang'];
		$s5=$_GET['moral'];
		$grade="";
		$avg=calc($s1,$s2,$s3,$s4,$s5);

		if($avg>=90 && $avg<=100){
			$grade="O";}
		else if($avg>=70 && $avg<=89){
			$grade="A";}
		else if($avg>=60 && $avg<=69){
			$grade="B";}
		else if($avg>=50 && $avg<=59){
			$grade="C";}
		else {
			echo"NO GRADE";
		}

		echo "Average : $avg<br>Grade : ".$grade;
	}
	?>
<br></h1>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<style>
div {
  background-color: lightgrey;
  width: 500px;
  border: 15px light blue;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
<body>
<div><?php
 echo":CODE:<br>";
show_source("exp4prog6.php");
?></div>

</body>
</html>
