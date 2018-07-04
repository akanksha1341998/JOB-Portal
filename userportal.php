<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width , initil-scale=1">
<style>
* {
    box-sizing: border-box;
}
body {
  margin: 0;
  font-family: "Bahnschrift SemiBold Condensed";
}
#content {
  
    
    background-image: url("images/back.png");
	background-repeat: no-repeat;
	background-size: cover;
	height: 100%;
	text-align: left;
	color: white;font-size: 20px;
	
}
.article{
position: relative;
padding:10px;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7); /* Black background with transparency */
    color: white;
    width: 100%;
	height: 600px;


}
div.bar{
	text-align: center;
	border-radius: 45px;
	padding: 10px;
	width: 200px;
	margin: 0 auto;
	background-color:#FF7F50;
	color:black;
}
/* Style the register links */
.bar a {
    
    display: block;
    color: black;
    text-decoration: none;
}

/* Change color on hover */
.bar a:hover {
    background-color: #ddd;
    color: white;
}

</style>
</head>
<body>
<div id="content">
<div class="article" style="font-size:16px;color:white;">
<?php
	$con=mysqli_connect('localhost','root','');
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
	$skill=$_POST['skill'];
	$loc=$_POST['location'];
	$sql="select * from jobs where JobSkill='$skill' and Location='$loc'";
	$result=mysqli_query($con,$sql);
	if($result->num_rows>0)
	{
		while($row=mysqli_fetch_array($result))
		{
				echo '<h3>'.$row['CompanyName'].'</h3>Position&nbsp&nbsp&nbsp&nbsp '.$row['Position'].'<br><mark>Job ID&nbsp&nbsp&nbsp&nbsp '.$row['JobId'].'<br></mark>Job Description &nbsp&nbsp&nbsp&nbsp'.$row['Description'].'<br>Qualification &nbsp&nbsp&nbsp&nbsp'.$row['Qualification'].'<br>Experience &nbsp&nbsp&nbsp&nbsp'.$row['Experience'].'<br>Salay &nbsp&nbsp&nbsp&nbsp'.$row['Salary'].'<br>';
				echo '<hr>';
		}
		echo '<div class="bar"><a href="Apply.html">APPLY NOW</a></div>';
	}
	else echo '<h4>Sorry No job openings</h4>';
?>
</div>
</div>
</body>
</html>