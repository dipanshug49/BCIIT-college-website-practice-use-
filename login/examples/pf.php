<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'banking');
$yname=$_POST['yname'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$pcode=$_POST['pcode'];

$q="select * from credit where yname='$yname' && email='$email' && fname='$fname' && lname='$lname'  && address='$address' && city='$city' && country='$country' && pcode='$pcode';";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1) {
	echo "<script>alert('You form have already submitted')</script>";
	echo "<script>window:location='Notes.html'</script>";
	
}
else{
	$qy="insert into credit(yname,email,fname,lname,address,city,country,pcode)values('$yname','$email','$fname','$lname','$address','$city','$country','$pcode')";
	mysqli_query($con,$qy);
  echo "<script>alert('Thank You, Your Form is sumitted Now You can visit own bank in 7days')</script>";
  echo "<script>window:location='Classroom.html'</script>";
  
}
?>