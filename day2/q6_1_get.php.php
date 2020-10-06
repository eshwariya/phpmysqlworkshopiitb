<html>

<form action='get.php' method='GET'>
<input type='number' name='side1'><br>
<input type='submit' value='Click here'><br>

<input type='number' name='side2'><br>
<input type='submit' value='Click here'><br>

<input type='number' name='side3'><br>
<input type='submit' value='Click here'>
</form>

</html>

<?php

$a=$_GET['side1'];
$b=$_GET['side2'];
$c=$_GET['side3'];

if($a+$b>$c && $b+$c>$a && $c+$a>$b )

{
   if(($a*$a)+($b*$b) == ($c*$c) || ($b*$b)+($c*$c) == ($a*$a) || ($a*$a)+($c*$c) == ($b*$b))
     echo "It is a right angle traingle";

   elseif($a==$b && $b==$c)
     echo "It is a equilateral traingle";
   
   elseif($a==$b || $b==$c ||$c==$a)
    echo "It is a isoceless traiangle";

   else
    echo "it is a scalene triangle";
}
else
echo "it is not triangle";

?>