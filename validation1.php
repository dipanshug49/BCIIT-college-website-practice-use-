<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'banking');
$yname=$_POST['yname'];
$Password=$_POST['Password'];


$q="select * from online where yname='$yname' && Password='$Password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1) {

			echo "<script>window:location='login/Teachers/Classroom.php'</script>";


}
else{
	echo "<script>alert('Your Data is not valid')</script>";
			echo "<script>window:location='staff-login.php'</script>";


}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a style="color: green; text-decoration: none; " href="logout.php">LOGOUT</a>
</body>
</html>
