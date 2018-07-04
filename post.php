<!DOCTYPE html>
<html>
<head>
<title>Job Posting</title>
<meta name="viewport" content="width=device-width , initil-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
  font-family: "Bahnschrift SemiBold Condensed";
}

/* Style the header */
.header {
   background-color: #008080;
    padding: 20px;
    text-align: center;
	height:100px;

}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #FF7F50;
	text-align: left;
	
}
.topnav a {
    float: left;
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
/* Style the topnav links */
.header a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: right;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.header a:hover {
    background-color: #ddd;
    color: black;
}
#content {
  
    
    background-image: url("images/bg.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	height: 600px;
	text-align: center;
	color: white;
	
}
.article{
position: relative;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7); /* Black background with transparency */
    color: white;
    width: 100%;
    padding: 20px;
	height: 600px;


}


@media screen and (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}
div.bar{
	border: 1px solid black;
	text-align: center;
	border-radius: 45px;
	padding: 10px;
	width: 200px;
	margin: 0 auto;
}
/* Style the register links */
.bar a {
    
    display: block;
    color: #f2f2f2;
    text-decoration: none;
}

/* Change color on hover */
.bar a:hover {
    background-color: #ddd;
    color: white;
}

/* Style the footer */
.footer {
        background-color: #FF7F50;
    padding: 20px;
    text-align: center;
	height:100px;
	color: white;
}
</style>
</head>
<body>

<div class="header">
  <img src="images/jobsportal.png" style="float:left;height:70px;width:150px">
  <a href="provider.html"><img src="images/logout.png" style="height:30px;width:30px;" align="middle"> Log Out</a> 
  <a href="JobPortalHome.html"><img src="images/home.png" style="height:30px;width:30px;" align="middle"> Home</a>
</div>

<div class="topnav">
	<a href="post.html"><img src="images/post.png" style="height:30px;width:30px;" align="middle"> Posting Job</a> 
	<a href="applicant.html"><img src="images/msg.png" style="height:30px;width:30px;" align="middle"> View Applicants</a>
</div>
<div id="content">
<div class="article" style="font-size:16px;color:white;">
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

	$id = $_POST['jid'];
	 $post= $_POST['post'];
	$decp = $_POST['decp'];
	$skill = $_POST['skill'];
	$loc=$_POST['location'];
	$quali=$_POST['qul'];
	$exp=$_POST['exp'];
	$sal=$_POST['sal'];
	$com=$_POST['comp'];
     $sql= "INSERT INTO jobs(JobId, Position,Description,JobSkill,Location,Qualification,Experience,Salary,CompanyName) VALUES ('$id','$post','$decp','$skill','$loc','$quali','$exp','$sal','$com')"; 
	
	$temp1=mysqli_query($con,$sql);
	if(!$temp1)
	{ 
		echo 'Not Inserted';
	}
	else
	{
		echo '<h1><center>Job Opening is successfully Posted!!!!<br><a href="employerPortal.html">Continue</a></center></h1>';
	} 

?>
</div>
</div>
<div class="footer">
  <p>&copy; 2018 JOB PORTAL. All rights reserved.</p>

</div>
  
</body>
</html>