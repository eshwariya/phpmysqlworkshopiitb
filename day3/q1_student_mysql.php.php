<!DOCTYPE HTML>
<?php
require 'connect.php';
?>

<html>
<head>
	<title>Marksheet</title>
</head>
<body>
<form  action="student_mysql.php" method="POST">
Name of Student:<input type="text" name="name">
<br>
<p>Marks in Each Subject</p>
<br>
Subject 1:<input type="number" name="sub1">
<br>
Subject 2:<input type="number" name="sub2">
<br>
Subject 3:<input type="number" name="sub3">
<br>
Subject 4:<input type="number" name="sub4">
<br>
Subject 5:<input type="number" name="sub5">
<br>
<input type="submit" value="Submit" name="submit">
<br>
<input type="submit" name="update" value="Update">
<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$m1=$_POST['sub1'];
$m2=$_POST['sub2'];
$m3=$_POST['sub3'];
$m4=$_POST['sub4'];
$m5=$_POST['sub5'];



$sum=$m1+$m2+$m3+$m4+$m5;
$total=500;
$per=($sum)*100/$total;


echo "Total Marks Obtained: $sum<br>";
echo "Total Marks: $total<br>";
echo "Percentage: $per";

$res = mysqli_query($conn,"INSERT INTO result( name, sub1, sub2, sub3, sub4, sub5, `total obtained`, `total marks`, percent) VALUES ('$name','$m1','$m2','$m3','$m4','$m5','$sum','$total','$per')");

if($res){
	echo "<br>Success";
}	
else{
	echo "<br>Not Inserted";
}


}
</html>
?>