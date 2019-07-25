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
<h1 style="color:white;font-size:200%;">Program-3</h1><br>
<h1 style="color:white;font-size:100%;">
	<form action="" method="GET">
	Enter your Full Name: <input type="text" name="name" placeholder="Full Name"><br>
	Gender:	<select id="Gender" name="Gender">
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select><br><br>
	<button type="submit">Submit</button>
	</form>
<hr>
<body>
	<?php
		if(isset($_GET['Gender']))
		{
			$name=$_GET['name'];
			$f=$_GET['Gender'];

			function fullname($name)
			{
				$f=" ";$l=" "; $m=" "; $final=" ";
				$n=explode(" " ,$name);
				$c=count($n);

				for($i=0;$i<$c;$i++)
				{
					if($i==($c-1)&& $i!=0)
					{
						$l=$l.ucfirst($n[$i]);
					}
					else if($i>=1&&$i<$c)
					{
						$m=$m.ucfirst($n[$i]);
					}
					else
					{
						$f=$f.ucfirst($n[$i]);
					}

				}
				echo"<b>First name is:</b> ".$f;
				echo'<br>';
				echo"<b>Middle name is:</b> ".$m;
				echo'<br>';
				echo"<b>Last name is:</b> ".$l;

			}
			fullname($name);

			function volspa($name)
			{
				$vowels=0;
				$spaces=0;
				$vowlesarr=array('a','A','e','E','i','I','o','O','u','U');
				$sp=array(" ");
				$c=strlen($name);
				for($i=0;$i<$c;$i++)
				{
					if(in_array($name[$i],$vowlesarr))
					{
						$vowels++;
					}
					else if(in_array($name[$i],$sp))
					{
						$spaces++;
					}
				}
				echo'<br>';
				echo"<b>No of vowels:</b> ".$vowels;
				echo'<br>';
				echo"<b>No of white spaces:</b> ".$spaces;
			}
			volspa($name);
			echo'<br>';

			function up($name)
			{
				$new= strtoupper($name);
				echo"<b> The Upper case form of the String: </b>".$new;
			}
			up($name);
			echo'<br>';
			echo'<br>';

			function display($name,$f)
			{
				if($f=='Female')
				{
					echo"<b>Output: </b> Mrs. ".$name;
				}
				else if($f=='Male')
				{
					echo"<b>Output: </b> Mr. ".$name;
				}
			}
			display($name,$f);
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
show_source("exp4prog3.php");
?></div>

</body>
</html>
