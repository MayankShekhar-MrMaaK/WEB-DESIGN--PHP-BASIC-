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
<h1 style="color:white;font-size:200%;">Program-2</h1><br>
<h1 style="color:white;font-size:100%;">
	<form action="" method="POST">
	<h5>Copying file</h5>
	<br>Enter File name to be copied:<br>
	<input type="text" name="file1">
	<br>Enter File name where to copy:<br>
	<input type="text" name="file2">
	<br>Click to copy content:<br>
	<input type="submit" value="Submit" name="submit"><br>
  <br>Enter File name to view<br>
  <input type="text" name="file2">
  <input type="submit" value="View" name="view"/><br>
	</form>
<hr>
<body>
  <?php
  function copy1()
  {
    $file=$_POST["file1"].".txt";
    $copy=$_POST["file2"].".txt";
    if(copy($file,$copy))
    {
    echo "copied $file";
    }
    else
    {
    echo "could not copy $file";
    }
  }
  function view()
  {   echo" <br>";
      $file=$_POST["file2"].".txt";
      echo"File Description--";
      $f = fopen( $file, 'r' );
      $size = filesize( $file );
      $filedata = fread( $f, $size );
      echo "$filedata </br>";
  }
  if(isset($_POST['submit']))
  {
    copy1();
  }
  if(isset($_POST['view']))
  {
    view();
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
show_source("exp6prog2.php");
?></div>

</body>
</html>
