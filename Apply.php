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
	text-align: center;
	color: white;
	
}
.article{
position: relative;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7); /* Black background with transparency */
    color: white;
    width: 100%;
	height: 600px;


}
}
</style>
</head>
<body>
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

	$name = $_POST['name'];
	 $jid= $_POST['jid'];
	$mail = $_POST['email'];
	$contact = $_POST['con'];
	$gen=$_POST['gender'];
	$quali=$_POST['qul'];
	$exp=$_POST['exp'];
     $sql= "INSERT INTO `applicants`(`Name`, `Email`, `ContactNo`, `Gender`, `Qualification`, `Experience`, `JobId`) VALUES ('$name','$mail','$contact','$gen','$quali','$exp','$jid')"; 
	
	$temp1=mysqli_query($con,$sql);
	if(!$temp1)
	{ 
		echo 'Not Inserted';
	}
	else
	{
		echo '<h1><center>You have successfully applied for the Job!!!!</h1><br><h3>You will be contacted by the employer in the due time.</h3>';
	} 

?>
</div>
</div>
</body>
</html>