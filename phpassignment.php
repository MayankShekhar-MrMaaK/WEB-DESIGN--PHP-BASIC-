<html>
	<head>
	</head>
	<body>
			<?php
		  echo"<br>";
			function semicirclearea($rad)
			{
				$carea=$rad*$rad*3.14;
				return $carea/2;
			}
			function squarearea($len)
			{
				$sarea=$len*$len;
				return $sarea;
			}
			function trianglearea($len)
			{
				$tarea=($len*$len)*(sqrt(3))/4;
				return $tarea;
			}
			function rectanglearea($len,$bre)
			{
				$rarea=$len*$bre;
				return $rarea;
			}
			$S1=6 ;
			$S2=9;
			$S3=2.5;
			$S5=96;
			$S4=$S5%5;
			$S6=$S5;
			$S7=1.5;
			echo " MAYANK SHEKHAR<br>MY ROLL NO. IS -->106 <br>";
			echo "Hence Dimensions are <br>";
			echo " S1=$S1 <br> S2=$S2 <br> S3=$S3 <br> S4=$S4 <br> S5=$S5 <br> S6=$S6 <br> S7=$S7 <br>";
			$x=rectanglearea(($S1+$S2),($S7+$S3));
			echo " Area of rectangle =",$x ,"<br>";
			$y=squarearea($S4);
			echo " Area of square having side S4 =",$y,"<br>";
			$z=squarearea($S5);
			echo " Area of square having side S5 and S6 =",$z,"<br>";
			$p=trianglearea($S1);
			echo " Area of triangle having side S1= ",$p,"<br>";
			$q=trianglearea($S2);
			echo " Area of triangle having side S2= ",$q,"<br>";
			$r=semicirclearea($S3);
			echo " Area of circle having side S3= ",$r,"<br>";
			$s=semicirclearea($S7);
			echo " Area of circle having side S7= ",$s,"<br>";
			$t=semicirclearea(($S3+$S7));
			echo " Area of circle having side S3+S7= ",$t,"<br>";
			$tarea=$x+$y+$z+$p+$q+$r+$s+$t;
			echo "Total Area of given diagram below is ",$tarea,"<br>";
			echo "<img src='area.jpg' Given Figure Area />";
		?>
	</body>
</html>
