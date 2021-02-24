<?php
session_start();
include('connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>login_to_just ticket</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/47c4ff0be6.js"></script>

<style type="text/css">
	body{
		
		background-image: url("https://i2.wp.com/cdn.inc42.com/wp-content/uploads/2019/04/movie-ticketing.jpg?fit=1360%2C1020&ssl=1");
		background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size:auto;//|length|cover|contain|initial|inherit;;
        margin-left: auto;
        margin-right: auto;
        background-color:rgb(3,45,54);//#206f91f5
        width: 100%;
	}	
	.container{
		padding-top: 300px;
		padding-left: 280px;
		padding-right: 280px;
		
	}
	.jumbotron{
		padding-top:100px;
		
	}
</style>
</head>
<body>
	
	<div class="container">
			<center>
				<h1 style="color: rgb(0,0,0);">
				<i class="fas fa-film"></i>
			    JustTicket</h1>
				<form   action="" method="post"  style="color:rgb(244,3,1);">
					<div class="form-row col-md-6 mb-3">
						<label for="username"></label>
						<input id="username" class ="form-control" type="text" name="username" placeholder="Phone no,username,or email">
					</div>
					<div>
						  <div class="form-row col-md-6 mb-3">
						        <label for="user_pswd"></label>
						        <input id="user_pswd" class ="form-control" type="Password" name="password"  placeholder="password">
					      </div>
					    <button class="btn btn-primary" name="submit" type="submit" value="submit">Login</button><br>
					    <small>Don't have account ? <a href="singup.php">Sign up</a></small>
				    </div>
				</form>
			</center>	
		</div>

		<?php
        if(isset($_POST['submit'])){

        	 $user=$_POST['username'];
        	 $pass=$_POST['password'];
        	//if($user!=" " && $pass!=" "){
        		$query="SELECT * FROM `login` WHERE username='$user' AND password='$pass'";
        		$run=mysqli_query($conn,$query);
        		$rows=mysqli_num_rows($run);
                if($rows<1){
                	?>
                	<script>
                	alert('Username Or Password Did not Match');
                	windows.open('index.php','_self');
                	</script>
                	<?php
                }
                else{

                	$data=mysqli_fetch_assoc($run);
                	$id=$data['id'];
                
                	$_SESSION['uid']=$id;
                	header('location:afterlogin.php');

                }
        	
        }
		?>
</body>
</html>