<!DOCTYPE html>
<html>
<head>
<style>
div {
    border: 1px solid blue;
    padding: 8px;
}
bg {
  background-image: url("C:\Users\mrmaak\Desktop\phtm\jj\img2.jpg");

  height: 100%;

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
a:link {
    color: green;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: blue;
    background-color: transparent;
    text-decoration: underline;
}
a:hover {
    color: red;
    background-color: yellow;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>

<div class="bg">
<body background=C:\Users\mrmaak\Desktop\phtm\jj\img2.jpg height=100%>
<center><h2>WEBSITEM</h2></center>
<center><img src="C:\Users\mrmaak\Desktop\phtm\jj\img1.jpg" alt="websitemlogo" width="400" height="200"></center>
<marquee>we welcome u </marquee>
<center><p>Create your own website in just a minute</p>
<p>Already a user!!</p>
<form action="form1.php" method="post">
Username: <br><input type="text" name="user" value=""><br>
</form>
Password: <br><input type="password" name="password">
<br>
<?php
$user = $_POST['user'];
$password=$_POST['password'];
if ($user=="mayank"&&$password==12345)
{
  echo ("welcome to website ");
}
else {
  echo "wrong input";
}

 ?>
<a href="Forgot.html" target="_blank">Forgot Password!!</a>
<br><input type="submit" value="LogIN">
</form>
<p>New user!!</p>
<marquee behavior="alternate"><br><a href="Registern.html" target="_Registern">Register  Now</a></marquee>
<br><a href="https://websitesetup.org/website-builders/" target="blank">How good is our website?? </a>
<br>
<br><a href="Registerw.html" target="_Registerw">Why You should register?</a>
<br><p>unable to acess..follow our other links::::</p>

</div>
</center>
</body>
</div>
<div class="dropdown">
  <button class="dropbtn">Links</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

 </html>
