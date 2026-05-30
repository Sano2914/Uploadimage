<?php
$con=mysqli_connect("localhost","root","","Employee") or die(mysqli_error());
	  
//get data from html form
$name=$_POST['name'];
$emailid=$_POST['eid'];
$mob=$_POST['mob'];
	  
//Insert values in empInfo table with column name 
$query="INSERT INTO empInfo(emp_id, name, email, mobile)  VALUES ('', '$name','$emailid','$mob')";
mysqli_query($con,$query);
	
//OR		
//Insert values in empInfo table directly

$query="INSERT INTO empInfo VALUES ('', '$name','$eid','$mob')";
mys
