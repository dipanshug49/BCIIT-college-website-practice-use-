<?php

$con=mysqli_connect('localhost','root' , '');
mysqli_select_db($con,'banking');
$yname=$_POST['yname'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$Password=$_POST['Password'];

$q="select * from online where yname='$yname' && email='$email' && fname='$fname' && lname='$lname'  && address='$address' && city='$city' && country='$country' && Password='$Password';";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1) {
	echo "<h1><center><script>alert('This profile already existed.')</script></center></h1>";
	echo "<script>window:location='login.php'</script>";
}
else{
	$qy="insert into online (yname,email,fname,lname,address,city,country,Password)values('$yname','$email','$fname','$lname','$address','$city','$country','$Password')";
	mysqli_query($con,$qy);
	echo "<script>alert('Congratulation creating new profile')</script>";
	echo "<script>window:location='Profile.php'</script>";  
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

