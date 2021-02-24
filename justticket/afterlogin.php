<?php
	session_start();
	include('connection.php');
	error_reporting(0);
	$userprofile=$_SESSION['uid'];
	if($userprofile){

	}
	else{
		header('location:index.php');
	}
	if($userprofile){

?>

<!DOCTYPE html>
<html>
<head>
	<title>JustTicket</title>
	<link rel="stylesheet" type="text/css" href="after.css">
	<script src="https://kit.fontawesome.com/47c4ff0be6.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
 <div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
  <a class="navbar-brand" href="#">
  <i class="fas fa-film"></i>
  JustTicket</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav ml-auto">
   <!--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->


<!-- <li class="nav-item active">
	<a class="nav-link" href="login1.html">Sign Up</a>
</li> -->
<li class="nav-item active">
	<a class="nav-link" href="logout.php">Logout</a>
</li>
<li class="menu active">
	<!-- <i class="fas fa-bars"></i> -->
</li>
 </ul>
</div>
</div>
</nav>
</div>


<?php
	mysqli_select_db("header",$conn);
	$queryy="SELECT * FROM `header`";
	$dataa=mysqli_query($conn,$queryy);
	$totall=mysqli_num_rows($dataa);
	if($totall!=0){
		$source_img_slider=array();$name_img_slider=array();$description_img_slider=array();$release_date_slider=array();
		while($resultt=mysqli_fetch_assoc($dataa)){
	    $name_img_slider[]			=$resultt['Moviename'];
	    $description_img_slider[]	=$resultt['Description'];
	    $release_date_slider[]		=$resultt['ReleaseDate'];
	    $source_img_slider[]		=$resultt['source'];
	    
	}
?>

<div class="slider">
	<figure>
		<?php
		for($i=0;$i<=6;$i++){
			$image_source		=$source_img_slider[$i];
			echo "
			<div class='slide'>
				<a><img src='$image_source'></a>
			</div>";
		}
		?>
	</figure>
</div> 
<?php
}
?>

<?php
	mysqli_select_db("customer",$conn);
	$query="SELECT * FROM `movie`";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0){
		$image_id=array();$source=array();$movie_name=array();$movie_description=array();$release_date=array();
		while($result=mysqli_fetch_assoc($data)){
		$image_id[]					=$result['id'];
	    $movie_name[]				=$result['moviename'];
	    $movie_description[]		=$result['description'];
	    $release_date[]				=$result['releasedate'];
	    $source[]					=$result['imgsource'];
	  }  

?> 
<div class="divv">
	<?php
	 $userprofile;
	// mysqli_select_db("login",$conn);
	// $que="SELECT * FROM `login`";
	$que  					="SELECT  `Name` FROM `login` WHERE  `id`=".$userprofile;
	$quu  					="SELECT  `amount` FROM `payment` WHERE `id`=".$userprofile;
	$daa 					=mysqli_query($conn,$quu);
	$remaning_amount        =mysqli_fetch_assoc($daa);
	$dat        			=mysqli_query($conn,$que);
	$user_name      		=mysqli_fetch_assoc($dat);
	if($user_name >0){
		// $unam=array();
		// while($resu=mysqli_fetch_assoc($dat)){
		// 	$unam=$resu['Name'];

	?>
	<p class="welu">Welcome <?php echo $user_name['Name'];?><br><br>
		Wallet Amount <i class="fas fa-rupee-sign"></i><?php echo $remaning_amount['amount'];?>
	</p>
</div>


<!-- <div class="box-1" > -->
<div class="headertop">
	<div class="container-1">
		<?php
			for($i=0;$i<=8;$i++){
				$image_source_cards		=$source[$i];
				$movie_name_card		=$movie_name[$i];
				$movie_description_card	=$movie_description [$i];
				$movie_releaseDate_card	=$release_date[$i];
				?>
				<div class="box-1">
		    		<a href=<?php echo"booking.php?img_id={$image_id[$i]}"?>><img class="image-in-box" id="hoga" src=<?php echo $image_source_cards;?>> </a>
		     		<p>&ensp;<strong><?php echo $movie_name_card;?></strong><br><small> &ensp;<?php echo $movie_description_card;?> <strong>.</strong><?php echo $movie_releaseDate_card;?></small></p> 
				</div>
		<?php }?>
	</div>
</div>

<?php
}?>


<div class="spacing">
	<br>
	<br>
	<br>
</div>

<footer id="footerstyle">
	<div class="About1">
		<ul style="list-style-type: none;">
			<li>
				<a href="#">About</a>
			</li>
			<li>
				<small>Terms and Conditions</small>
			</li>
			<li>
				<small>Privacy Policy</small>
			</li>
			<li>
				 <small>Purchase Policy</small><br>
			</li>
		</ul>  
    </div>
    <div class="About1">
    	<strong>Contact</strong>
    	<p><small>Pipeline road South Kalamassery<br>Kochi   682022<br>Kerala INDIA<br>Ph.No-9996665544<br>humsub@gmail.com</small></p>
    </div>
    <div class="About1">
    	<p>HELP<br>Report Content</p>
    </div>
</footer>

<script type="text/javascript" src="imgslide.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php

}
}?>
</body>
</html>