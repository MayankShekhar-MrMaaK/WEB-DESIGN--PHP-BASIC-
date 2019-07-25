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
					<li><a href="exp4prog1.php">Experimentḁ̥ 4 Program1</a></li>
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
<h1 style="color:white;font-size:200%;">Program-2</h1><br>
<h1 style="color:white;font-size:100%;">
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
<hr>
<body>
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
<div><?php echo":CODE:<br>";
show_source("exp3prog2.php");
?></div>

</body>
</html>
