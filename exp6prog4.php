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

<h1 style="color:white;font-size:250%;"><br>EXPERIMENT-6<br><br></h1>
<h1 style="color:white;font-size:200%;">Program-4<br><br>REGISTRATION FORM</h1><br>
<h1 style="color:white;font-size:100%;">
  <form action="" method="POST">
  <br>First Name:<br>
  <input type="text" name="fname"><br>
  <br>Last Name:<br>
  <input type="text" name="lname"><br>
  <br>Age:<br>
  <input type="number" name="age"><br>
  <br>Gender:<br>
  <input type="radio" name="gender" value="Female"> Female<br>
  <input type="radio" name="gender" value="Male"> Male<br>
  <br>Course:<br>
  <input type="radio" name="course" value="Gate"> GATE<br>
  <input type="radio" name="course" value="GRE"> GRE<br>
  <input type="radio" name="course" value="CAT"> CAT<br>
  <br>Submit<br>
  <input type="submit" value="save">
  </form><hr>
<body>
  <?php
$fp=fopen("student_detail.txt","w");
$first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$course=$_POST["course"];
fwrite($fp,$first_name);
fwrite($fp,$last_name);
fwrite($fp,$age);
fwrite($fp,$gender);
fwrite($fp,$course);
$detail=fread($fp,filesize("student_detail.txt"));
echo $detail."<br>";
echo "Successfully feeded the registration details..";
?><?php
$fp=fopen("innovativelearningcenter.txt","a");
$sub1="C";
$sub2="C++";
$sub3="Java";
$sub4="Daa";
$sub5="Php";
echo fputs($fp,"Syllabus of GATE".":");
fputs($fp,$sub1);
fputs($fp," ");
fputs($fp,$sub2);
fputs($fp," ");
fputs($fp,$sub3);
fputs($fp," ");
fputs($fp,$sub4);
fputs($fp," ");
fputs($fp,$sub5);
fputs($fp," ");
echo "syllabus successfully inserted";
fclose($fp);
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
show_source("exp6prog4.php");
?></div>

</body>
</html>
