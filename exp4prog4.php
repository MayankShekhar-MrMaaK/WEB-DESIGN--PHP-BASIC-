<html>
<html lang="en">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
		<link href="sty.css" media="screen" rel="stylesheet" type="text/css" />
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

<h1 style="color:white;font-size:250%;"><br>EXPERIMENT-4<br><br></h1>
<h1 style="color:white;font-size:200%;">Program-4</h1><br>
<h1 style="color:white;font-size:100%;">
	<form action="" method="GET">
	<table>
	<h1 style="color:white;font-size:100%;">Fee Calculation<br></h1>
	<tr>
	<td><h1 style="color:white;font-size:100%;">Tuition Fee<br></h1><sup>*</sup>:</td><td><input type="number" name="num1" required></td><br>
	</tr>
	<tr>
	<td><h1 style="color:white;font-size:100%;">Travelling:<br></h1></td><td><input type="number" name="num2"></td><br>
	</tr>
	<tr>
	<td><h1 style="color:white;font-size:100%;">Hostel Fee:<br></h1></td><td><input type="number" name="num3"></td><br>
	</tr>
	<tr>
	<td><h1 style="color:white;font-size:100%;">Mess Fee:<br></h1></td><td><input type="number" name="num4"></td><br>
	</tr>
	<tr>
	<td><h1 style="color:white;font-size:100%;">Library Fee<br></h1><sup>*</sup>:</td><td><input type="number" name="num5" required></td><br>
	</tr>
	<tr>
	<td><h1 style="color:white;font-size:100%;">Id Fee<br></h1><sup>*</sup>:</td><td><input type="number" name="num6" required></td><br>
	</tr>
	<tr>
	<td><h1 style="color:white;font-size:100%;">Exam Fee:<br></h1><sup>*</sup>:</td><td><input type="number" name="num7" required></td><br>
	</tr>
	</table>
	<br>
	<sup>*</sup> are Compulsary fields
	<br>
	<button type="submit">Submit</button>
	</form>
<hr>
<body>
	<?php
		if(isset($_GET['num1']) && isset($_GET['num5']) && isset($_GET['num6']) && isset($_GET['num7']))
		{
			$travel=0;
			$mess=0;
			$hostel=0;
			if($_GET['num2']=='')
				$travel=0;
			if($_GET['num4']=='')
				$mess=0;
			if($_GET['num3']=='')
				$hostel=0;
			$tut=$_GET['num1'];
			$lib=$_GET['num5'];
			$id=$_GET['num6'];
			$exam=$_GET['num7'];

			$fee=$travel+$mess+$hostel+$tut+$lib+$id+$exam;
			echo "<b>Your complete fee for the Course is :</b> ".$fee;
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
show_source("exp4prog4.php");
?></div>

</body>
</html>
