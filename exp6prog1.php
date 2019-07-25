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
<h1 style="color:white;font-size:200%;">Program-1</h1><br>
<h1 style="color:white;font-size:100%;">
<form method="post">
<h2>Enter your File name<input type="text" name="file"/><br/></h2>
<h3>Choose your Extension<select name="ext"></h3><br>
<option value="">choose ur exten</option>
<option>.txt</option>
<option>.docs</option>
<option>.pdf</option>
</select><br/>
<br>
<input type="submit" value="View" name="view"/><br>
Enter your contents<br><textarea rows="10" cols="30" name="data">

    <?php echo @$contents ; ?>

  </textarea><br/><br>
<input type="submit" value="Write" name="write"/><br><br>
<h2>Search keyword:<br><input type="text" name="data"/><br></h2>
<input type="submit" value="Search" name="search"/><br>
</form>
<hr>
<body>
<?php
function write()
{
  echo" <br>";
   $f=$_POST['file'];
   $ext=$_POST['ext'];
   $data=$_POST['data'];
   $file=$f.$ext;
   if(file_exists($file))
   {
   echo "<font color='red'>file already exists</font>";
   }
   else
   {
     $fo = fopen($file,"a");
     fwrite($fo,$data);
     echo "Your data is saved";
   }
 }
function view()
{   echo" <br>";
    $f=$_POST['file'];
    $ext=$_POST['ext'];
    $file=$f.$ext;
    $filename = "$file";
    echo"File Description--";
    $file = fopen( $filename, 'r' );
    $size = filesize( $filename );
    $filedata = fread( $file, $size );
    echo "$filedata </br>";
  }
  function search()
  {
    echo" <br>";
    $f=$_POST['file'];
    $ext=$_POST['ext'];
    $data=$_POST['data'];
    $file=$f.$ext;
    $filename = "$file";
    echo"SEARCHED KEYWORD is $data \n";
    $file = fopen( $filename, 'r' );
    $size = filesize( $filename );
    $filedata = fread( $file, $size );
    $arr = explode(' ', $filedata);
    $a= array();

    foreach($arr as $a)
    {
      if($a=="banglore")
      {
        echo "  :-- FOUND\n";
        echo implode("\n", $a[0]);
        break;
      }
      else {
        {
          echo "No Matches Found";
        }
      }
  }
}
if(isset($_POST['view']))
{
  view();
}
if(isset($_POST['write']))
{
  write();
}
if(isset($_POST['search']))
{
  search();
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
show_source("exp6prog1.php");
?></div>

</body>
</html>
