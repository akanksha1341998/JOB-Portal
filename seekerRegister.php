<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width , initil-scale=1">
<style>
* {
    box-sizing: border-box;
}

body{margin:0;}
.header {
    background-color: #008080;
    padding: 20px;
    text-align: center;
	height:100px;
	background-image: url("images/bg1.jpeg");
}

.topnav {
    overflow: hidden;
    background-color: #2F4F4F;
	text-align: center;
	
}

/* Style the topnav links */
.topnav a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: right;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
}

/* Left and right column */
.column.side {
    width: 25%;
}

/* Middle column */
.column.middle {
    width: 50%;
	text-align: center;
	height: 450px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.row: after{
	content: "";
    display: table;
    clear: both;
}
.footer {
    background-color: #2F4F4F;
    padding: 20px;
    text-align: center;
	height:80px;
}
</style>
</head>
<body>
<div class="header">
<img src="images/jobsportal.png" style="float:left;height:70px;width:150px">
</div>

<div class="topnav">
  <a href="JobPortalHome.html"><img src="images/home.png" style="height:30px;width:30px;" align="middle"> Home</a> 
  <a href="provider.html"><img src="images/icon2.png" style="height:30px;width:30px;" align="middle"> Employer login</a>
</div>
<div class="row">
  <div class="column side">
    </div>
  <div class="column middle">
	<fieldset>
	<?php
$con = mysqli_connect('localhost' , 'root' , '');

	if(!$con)
	{
		echo 'Not Connected to server';
	}
	$temp = mysqli_select_db($con,'jonportal');
	if(!$temp)
	{
		echo 'Database not selected';
		echo '</br>';
	}

	$Name = $_POST['name'];
	 $Username= $_POST['uid'];
	$Password = $_POST['pword'];
	$EmailAddress = $_POST['eid'];
	$Birth=$_POST['dob'];
	$Contact=$_POST['con'];
	$Skill=$_POST['skill'];
	$Loc=$_POST['location'];
     $sql= "INSERT INTO users(Name,UserName,Password,Email,DateOfBirth,Contact,JobSkill,Location) VALUES ('$Name','$Username','$Password','$EmailAddress','$Birth','$Contact','$Skill','$Loc')"; 
	
	$temp1=mysqli_query($con,$sql);
	if(!$temp1)
	{ 
		echo 'Not Inserted';
	}
	else
	{
		echo '<h1><center>You have successfully registered!!!!<br><a href="seekerlogin.html">Continue</a></center></h1>';
	} 

?>

	</fieldset>
	</div>
  <div class="column side">
     </div>
</div>

<div class="footer">
  <p>&copy; 2018 JOB PORTAL. All rights reserved.</p>
</div>
</body>
</html>