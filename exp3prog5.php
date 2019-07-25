<html>
<html lang="en">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
		<link href="sty2.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="iconic.css" media="screen" rel="stylesheet" type="text/css" />
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

<h1 style="color:white;font-size:250%;"><br>EXPERIMENT-3<br><br></h1>
<h1 style="color:white;font-size:200%;">Program-5</h1><br>
<h1 style="color:white;font-size:100%;">
	<form  action=" " method="post">
		Enter Your Seat number:
		<input type="text" name="num1" size="2" maxlength="2"><br>
		<input  type="submit" name="submit" value="submit">
	</form>
<hr>
<body>
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
show_source("exp3prog5.php");
?></div>

</body>
</html>
