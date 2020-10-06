<html>
<?php
 echo"Name of student";
?>
<form action='post.php' method='POST'>
<input type='text' name='studentname'><br><br>

<?php
 echo" Marks in each subject "."<br>";

 echo "Subject 1:";
?>

<input type='number' name='subject1' ><br>

<?php
 echo "Subject 2:";
?>

<input type='number' name='subject2'><br>

<?php
 echo "Subject 3:";
?>

<input type='number' name='subject3'><br>

<?php
 echo "Subject 4:";
?>

<input type='number' name='subject4'><br>

<?php
 echo "Subject 5:";
?>

<input type='number' name='subject5'><br>
<input type='submit' value='calculate'><br>
</form>
<?php
if (isset($_POST['subject1']) && isset($_POST['subject2'])&& isset($_POST['subject3'])&& isset($_POST['subject4'])&& isset($_POST['subject5']) && isset($_POST['studentname']))
 {
$studentname=$_POST['studentname'];
$subject1=$_POST['subject1'];
$subject2=$_POST['subject2'];
$subject3=$_POST['subject3'];
$subject4=$_POST['subject4'];
$subject5=$_POST['subject5'];

$total=($subject1 + $subject2 + $subject3 + $subject4 + $subject5);
$totalmarks=100*5;
$percentage=($total*100)/$totalmarks;

echo "Name of student is: ".$studentname."<br>";
echo "Total marks obtained: ".$total."<br>";
echo "Total marks: ".$totalmarks."<br>";
echo "Percentage: ".$percentage;
}
?>
</html>