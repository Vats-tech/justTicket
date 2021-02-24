<?php
include('connection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>singup</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/47c4ff0be6.js"></script>

	<style type="text/css">
		.container{
			background-color:rgba(250, 250, 250,0.9);
			width: 420px;
			height: 100%;
			margin:50px auto;

		}
		.ticket{
			background-color:rgb(210,110,11);
			width: 420px;
			height: 80px;
			

		}
		
		.text{
			color:yellow;
			font-weight: bolder;
			padding-top: 19px;
			text-decoration: underline;
           font-family: 'Monoton', cursive;
           padding-left: 10px;
			/*padding-top: 0;
			margin-top: 7px;*/
           /*font-family: 'Monoton', cursive;*/
			
		}
		.btn{
			width: 420px;
			height: 50px;
			/*margin-top: 350px; */
			background-color:rgb(210,110,11);
			border-radius: 10px;
			color: white;
			border:solid;
           font-family: 'Monoton', cursive;

		}
		.fas{
			font-weight: bold;
			color:yellow;
			font-size: 40px;
			margin-right: 13px;
		}
		/*.para,.para1{
			padding-left: 20px;
           font-family: 'Monoton', cursive;*/

		
		#wel{
			font-family: 'Monoton', cursive;

		}

		.inpu{
			border:solid;
			width: 300px;
			height: 40px;
			border-radius: 10px;
			/*background-color: rgb(110,111,1);*/
		}
		.usern{
			padding-left: 10px;
			font-family: 'Monoton', cursive;
			color: grey;
		}
		.det{
			font-family: 'Monoton', cursive;
			padding-left: 110px;
			margin-bottom: 0;
		}
	</style>
</head>
<body>
<div class="container">
	<div>
		<div class="ticket"><center><h1 class="text"><i class="fas fa-film"></i>
			    JustTicket</h1></center></div>
			    <br>
			    <br>
			<p class="det">
        		Please enter your Details
        	</p>
	<hr>
	<br>
        <form action="" method="post">
        	<span class="usern">Name&emsp;&emsp;-</span><input class="inpu" type="text" name="name" placeholder="&emsp;&emsp;Name" value=""><br><br>
        	<span class="usern">City &emsp;&emsp; -</span><input class="inpu"  type="text" name="city" placeholder="&emsp;&emsp;City" value=""><br><br>
        	<span class="usern">State&ensp;&emsp;  -</span><input class="inpu" type="text" name="state" placeholder="&emsp;&emsp;State" value=""><br><br>
        	<span class="usern">Username-</span><input class="inpu" type="text" name="uss" placeholder="&emsp;&emsp;username" value=""><br><br>
        	<span class="usern">Password -</span><input class="inpu" type="password" name="pass" placeholder="&emsp;&emsp; password" value=""><br>
        	<br>
			<center><p id="wel">Welcome to JustTicket</p></center>
		    <center><button class="btn" name="submit" type="submit" value="submit" >Submit&emsp;</button></center>
        </form>
</div>
</div>
 

<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$usernam=$_POST['uss'];
	$passw=$_POST['pass'];
	if($usernam !="" && $passw !="" && $name !="" && $city !="" && $state!=""){
		$query="INSERT INTO `login`(`username`, `password`, `Name`, `city`, `state`) VALUES ('$usernam','$passw','$name','$city','$state')";
		$data=mysqli_query($conn,$query);
	if($data){
	// echo "Added Successfully";
   	header('location:index.php');
	}
	else{
		echo "Failed";
	}
}
}

?>
</body>
</html>
