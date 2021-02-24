<!-- first page after login.php 1-233-->
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
	$sourcee=array();$namm=array();$descrr=array();$rdatt=array();
	while($resultt=mysqli_fetch_assoc($dataa)){
    $namm[]=$resultt['Moviename'];
    $descrr[]=$resultt['Description'];
    $rdatt[]=$resultt['ReleaseDate'];
    $sourcee[]=$resultt['source'];
    
}
?>

<div class="slider">
	<figure>
	<div class="slide">
		<a href="#"><img src=<?php echo $sourcee[0];?>></a>
	</div>
	<div class="slide">
		<a href="#"><img src=<?php echo $sourcee[1];?>></a>
	</div>
	<div class="slide">
		<a href="#"><img src=<?php echo $sourcee[2];?>></a>
	</div>
	<div class="slide">
		<a href="#"><img src=<?php echo $sourcee[3];?>></a>
	</div>
	<div class="slide">
		<a href="#"><img src=<?php echo $sourcee[4];?>></a>
	</div>
	<div class="slide">
		<a href="#"><img src=<?php echo $sourcee[5];?>></a>
	</div>
	<div class="slide">
		<a href="#"><img src=<?php echo $sourcee[6];?>></a>
	</div>
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
	$image_id=array();$source=array();$nam=array();$descr=array();$rdat=array();
	while($result=mysqli_fetch_assoc($data)){
	$image_id[]=$result['id'];
    $nam[]=$result['moviename'];
    $descr[]=$result['description'];
    $rdat[]=$result['releasedate'];
    $source[]=$result['imgsource'];
  }  

?> 
<div class="divv">
<?php
 $userprofile;
// mysqli_select_db("login",$conn);
// $que="SELECT * FROM `login`";
 $que="SELECT  `Name` FROM `login` WHERE  `id`=".$userprofile;
$quu="SELECT  `amount` FROM `payment` WHERE `id`=".$userprofile;
$daa=mysqli_query($conn,$quu);
$rr=mysqli_fetch_assoc($daa);
$dat=mysqli_query($conn,$que);
$resu=mysqli_fetch_assoc($dat);
if($resu>0){
	// $unam=array();
	// while($resu=mysqli_fetch_assoc($dat)){
	// 	$unam=$resu['Name'];

?>
<p class="welu">Welcome <?php echo $resu['Name'];?><br><br>
	Wallet Amount <i class="fas fa-rupee-sign"></i><?php echo $rr['amount'];?>
</p>
</div>

<div class="headertop">
<div class="container-1">
<div class="box-1" >
     <a href=<?php echo"booking.php?img_id={$image_id[0]}"?>><img class="image-in-box" id="hoga" src=<?php echo $source[0];?>> </a>
     <p>&ensp;<strong><?php echo $nam[0];?></strong><br><small> &ensp;<?php echo $descr[0];?> <strong>.</strong><?php echo $rdat[0];?></small></p>
</div>
<div class="box-1">
    <a href=<?php echo"booking.php?img_id={$image_id[1]}"?>><img class="image-in-box" id="hoga" src=<?php echo $source[1];?>> </a>
     <p>&ensp;<strong><?php echo $nam[1];?></strong><br><small> &ensp;<?php echo $descr[1];?> <strong>.</strong><?php echo $rdat[1];?></small></p> 
</div>
<div class="box-1">
    <a href=<?php echo"booking.php?img_id={$image_id[2]}"?>><img class="image-in-box" id="hoga" src=<?php echo $source[2];?>> </a>
     <p>&ensp;<strong><?php echo $nam[2];?></strong><br><small> &ensp;<?php echo $descr[2];?> <strong>.</strong><?php echo $rdat[2];?></small></p> 
</div>
<div class="box-1">
    <a href=<?php echo"booking.php?img_id={$image_id[3]}"?>><img class="image-in-box" id="hoga" src=<?php echo $source[3];?>> </a>
     <p>&ensp;<strong><?php echo $nam[3];?></strong><br><small> &ensp;<?php echo $descr[3];?> <strong>.</strong><?php echo $rdat[3];?></small></p> 
</div>
<div class="box-1">
    <a href=<?php echo"booking.php?img_id={$image_id[4]}"?>><img class="image-in-box" id="hoga" src=<?php echo $source[4];?>> </a>
     <p>&ensp;<strong><?php echo $nam[4];?></strong><br><small> &ensp;<?php echo $descr[4];?> <strong>.</strong><?php echo $rdat[4];?></small></p> 
</div>
<div class="box-1">
    <a href=<?php echo"booking.php?img_id={$image_id[5]}"?>><img class="image-in-box" id="hoga" src=<?php echo $source[5];?>> </a>
     <p>&ensp;<strong><?php echo $nam[5];?></strong><br><small> &ensp;<?php echo $descr[5];?> <strong>.</strong><?php echo $rdat[5];?></small></p> 
</div>
<div class="box-1">
    <a href=<?php echo"booking.php?img_id={$image_id[6]}"?>><img class="image-in-box" id="hoga" src=<?php echo $source[6];?>> </a>
     <p>&ensp;<strong><?php echo $nam[6];?></strong><br><small> &ensp;<?php echo $descr[6];?> <strong>.</strong><?php echo $rdat[6];?></small></p> 
</div>
<div class="box-1">
    <a href=<?php echo"booking.php?img_id={$image_id[7]}"?>><img class="image-in-box" id="hoga" src=<?php echo $source[7];?>> </a>
     <p>&ensp;<strong><?php echo $nam[7];?></strong><br><small> &ensp;<?php echo $descr[7];?> <strong>.</strong><?php echo $rdat[7];?></small></p> 
</div>
<div class="box-1">
    <a href=<?php echo"booking.php?img_id={$image_id[8]}"?>><img class="image-in-box" id="hoga" src=<?php echo $source[8];?>> </a>
     <p>&ensp;<strong><?php echo $nam[8];?></strong><br><small> &ensp;<?php echo $descr[8];?> <strong>.</strong><?php echo $rdat[8];?></small></p> 
</div>
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

<!-- Booking Page -->
<?php
session_start();
include('connection.php');
error_reporting(0);
$user_id=$_SESSION['uid'];
if($user_id){
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
	  <meta name="description" content="Free Web tutorials">
	  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
	  <meta name="author" content="John Doe">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!--  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>	 -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet"> -->
		<title>Book_seat</title>
	<style type="text/css">
	       .topdiv{
	       	margin: auto;
          }
		.seattop{
			position: absolute;
			transform: translateX(120%) translateY(14%);
			top: 0px;
		    right: 0px;
		    bottom: 0px;
		    left: 0px;

		}
		.seatmatrix{
			background-color:rgb(247,5,90);
			width: 38px;
			height: 38px;
			border-radius: 8px;
			color: white;
			transition: 0.3s;
		}
		.status_e{
			margin-top: 5%;
			background-color:rgb(247,5,90);
			width: 38px;
			height: 38px;
			border-radius: 8px;
			color: white;
			transition: 0.3s;
		}
		.status_r{
		 	margin-top: 5%;

			background-color:yellow;
			width: 38px;
			height: 38px;
			border-radius: 8px;
			color: white;
			transition: 0.3s;
		}
		.status_b{
			margin-top: 5%;

			background-color:grey;
			width: 38px;
			height: 38px;
			border-radius: 8px;
			color: white;
			transition: 0.3s;
		}
		.empty,.reserved,.booked,.dwnld{
           font-family: 'Monoton', cursive;

		}
		.sin{
		      padding-left: 26%;
		      color: black;
		}
		.seatmatrix:hover{
			background-color: green;
			box-shadow: 5px 8px 10px 5px rgba(0,0,0,1);
			/*opacity: .6;*/


		}
	
		.seatm{
			background-color: rgb(0,30,150);
			width: 35px;
			height: 35px;
			border-radius: 8px;
			
		}
		.detail{
			width: 330px;
            height: 625px;
			/*width:25%;*/
			/*margin-top: 4%;*/
			margin-left: 35px;
		/*background-color: rgba(0,0,0,0.2);*/
		}
		
		.sum,.afterselectclass{
			background-color: rgb(0,0,250);
			width: 150px;
			height: 50px;
			border:solid;
			border-radius: 8px;
			color: white;

		}
		.afterselectclass{
			background-color: rgb(20,110,150);
			width: 150px;
			height: 45px;
			border-radius: 6px;
			color: yellow;
			margin-top: 5px;
		}
		.change{
			background-color:yellow;
			/*pointer-events:none;*/
		}
		.changedClass{
			
			background-color: grey;
			pointer-events: none;
		}
		.book{
			float: right;
			padding-top: 1%;
			margin-right: 3%;
		}
		.afterselect{
			float: right;
			padding-top: 1%;
			margin-right: 1%;
		}
		.status_a{
			float: right;
			padding-top: 0%;
			margin-right: 4%;
		}
		#name{
			//font-family: 'Raleway', sans-serif;
		//font-family: 'Raleway', sans-serif;
           // font-family: 'Satisfy', cursive;
           font-family: 'Monoton', cursive;
           margin-left: 40px;

		}
		#imgc{
			width: 330px;/*23%;*/
			height: 530px;
			border-radius: 10px;
		}
		#totalprice{
			
			float: right;
			margin-right: 6%;
			/*background-color: red;*/
					}
		.pricein{
			width: 10%;
            font-family: 'Satisfy', cursive;
            color: hsl(116, 80%, 53%);/*rgb(52,231,39);*/
			margin-left: 1%;
		}
		.viewticket{
			margin-left: 30px;
           font-family: 'Monoton', cursive;
           color: red;
		}
		.dwnld{
			margin-left: 35px;
		}
	</style>
</head>
		<body style="margin-bottom: 0px; margin-top: 0px;margin-right: 0px; margin-left: 0px;">
			<?php
			
			 if(isset($_GET['img_id'])){
			 	//require_once'../..require/connection.php';
				$Id=$_GET['img_id'];
				// mysqli_select_db($conn,"customer");
				$sql="SELECT * FROM `movie` WHERE id=".$Id;
				$result=mysqli_query($conn,$sql) or die("Bad Query:$sql");
				$row=mysqli_fetch_array($result);
		     // }
			?>
		<div class="detail">
			<!-- <div class="top"> -->
				<p id="name">
				<strong><?php echo $row['moviename']?><br></strong>
		        <?php echo $row['description']?><br>
		        <?php echo $row['releasedate']?><br>
		        
				</p><img id="imgc" src="<?php echo $row['imgsource']?>"><br>
				<!-- 	</div> -->
		</div>
<?php
}
?>
              <!-- ticket status booked or not -->
            <?php
				mysqli_select_db($conn,"ticket");
				$ticketselect="SELECT * FROM `ticket`";
				$ticketquery=mysqli_query($conn,$ticketselect) or die("Bad Query:$sql");
				$ticketrows=mysqli_num_rows($ticketquery);

				$Id_frbook;
				$Id_frbook=$Id;
			    if($ticketrows!=0){
				$ticketstatus=array();
				// while($ticketresult=mysqli_fetch_assoc($ticketquery)){
				// 	$ticketstatus[]=$ticketresult['status'];
				// }					
				while($ticketresult=mysqli_fetch_assoc($ticketquery)){
						if($Id_frbook==1){
					$ticketstatus[]=$ticketresult['statusA'];
				}
						else if($Id_frbook==2){
					$ticketstatus[]=$ticketresult['statusB'];
				}
						else if($Id_frbook==3){
					$ticketstatus[]=$ticketresult['statusC'];
				}
						else if($Id_frbook==4){
					$ticketstatus[]=$ticketresult['statusD'];
				}
						else if($Id_frbook==5){
					$ticketstatus[]=$ticketresult['statusE'];
				}
						else if($Id_frbook==6){
					$ticketstatus[]=$ticketresult['statusF'];
				}
						else if($Id_frbook==7){
					$ticketstatus[]=$ticketresult['statusG'];
				}
						else if($Id_frbook==8){
					$ticketstatus[]=$ticketresult['statusH'];

				}
						else if($Id_frbook==9){
					$ticketstatus[]=$ticketresult['statusI'];
				}
			}
            ?>

			<!-- <div class="topdiv"> -->
				<form action="" method="post">
					<input type="hidden" name="ticprice" value="0">
				</form>

				<table  cellspacing="6"; class="seattop">
					<tr>
						<td><h4 style="color:grey">PRIME 200/seat<hr></h4></td>
					</tr>
					    <tr class="tablerow">
						<td style="color: yellow;" class="seatm">&emsp;PRIME</td>
						<td class="seatmatrix <?php if($ticketstatus[0]==1){ echo "changedClass";}?>"><div onclick="myfun(200,0); price(200,0,'A1')" class="sin">A1</div></td>
						<td class="seatmatrix <?php if($ticketstatus[1]==1){ echo "changedClass";}?>"><div onclick="myfun(200,1); price(200,1,'A2')" class="sin">A2</div></td>
						<td class="seatmatrix <?php if($ticketstatus[2]==1){ echo "changedClass";}?>"><div onclick="myfun(200,2); price(200,2,'A3')" class="sin">A3</div></td>
						<td class="seatmatrix <?php if($ticketstatus[3]==1){ echo "changedClass";}?>"><div onclick="myfun(200,3); price(200,3,'A4')" class="sin">A4</div></td>
						<td class="seatmatrix <?php if($ticketstatus[4]==1){ echo "changedClass";}?>"><div onclick="myfun(200,4); price(200,4,'A5')" class="sin">A5</div></td>
						<td class="seatmatrix <?php if($ticketstatus[5]==1){ echo "changedClass";}?>"><div onclick="myfun(200,5); price(200,5,'A6')" class="sin">A6</div></td>
						<td class="seatmatrix <?php if($ticketstatus[6]==1){ echo "changedClass";}?>"><div onclick="myfun(200,6); price(200,6,'A7')" class="sin">A7</div></td>
						<td class="seatmatrix <?php if($ticketstatus[7]==1){ echo "changedClass";}?>"><div onclick="myfun(200,7); price(200,7,'A8')" class="sin">A8</div></td>

					</tr>
					<tr class="tablerow">
						<td><div></div></td>
						<td class="seatmatrix <?php if($ticketstatus[8]==1){ echo "changedClass";}?>"><div onclick="myfun(200,8); price(200,8,'B1')" class="sin">B1</div></td>
						<td class="seatmatrix <?php if($ticketstatus[9]==1){ echo "changedClass";}?>"><div onclick="myfun(200,9); price(200,9,'B2')" class="sin">B2</div></td>
						<td class="seatmatrix <?php if($ticketstatus[10]==1){ echo "changedClass";}?>"><div onclick="myfun(200,10); price(200,10,'B3')" class="sin">B3</div></td>
						<td class="seatmatrix <?php if($ticketstatus[11]==1){ echo "changedClass";}?>"><div onclick="myfun(200,11); price(200,11,'B4')" class="sin">B4</div></td>
						<td class="seatmatrix <?php if($ticketstatus[12]==1){ echo "changedClass";}?>"><div onclick="myfun(200,12); price(200,12,'B5')" class="sin">B5</div></td>
						<td class="seatmatrix <?php if($ticketstatus[13]==1){ echo "changedClass";}?>"><div onclick="myfun(200,13); price(200,13,'B6')" class="sin">B6</div></td>
						<td class="seatmatrix <?php if($ticketstatus[14]==1){ echo "changedClass";}?>"><div onclick="myfun(200,14); price(200,14,'B7')" class="sin">B7</div></td>
						<td class="seatmatrix <?php if($ticketstatus[15]==1){ echo "changedClass";}?>"><div onclick="myfun(200,15); price(200,15,'B8')" class="sin">B8</div></td>
					</tr>
					<tr class="tablerow">
						<td><div></div></td>
						<td class="seatmatrix <?php if($ticketstatus[16]==1){ echo "changedClass";}?>"><div onclick="myfun(200,16); price(200,16,'C1')" class="sin">C1</div></td>
						<td class="seatmatrix <?php if($ticketstatus[17]==1){ echo "changedClass";}?>"><div onclick="myfun(200,17); price(200,17,'C2')" class="sin">C2</div></td>
						<td class="seatmatrix <?php if($ticketstatus[18]==1){ echo "changedClass";}?>"><div onclick="myfun(200,18); price(200,18,'C3')" class="sin">C3</div></td>
						<td class="seatmatrix <?php if($ticketstatus[19]==1){ echo "changedClass";}?>"><div onclick="myfun(200,19); price(200,19,'C4')" class="sin">C4</div></td>
						<td class="seatmatrix <?php if($ticketstatus[20]==1){ echo "changedClass";}?>"><div onclick="myfun(200,20); price(200,20,'C5')" class="sin">C5</div></td>
						<td class="seatmatrix <?php if($ticketstatus[21]==1){ echo "changedClass";}?>"><div onclick="myfun(200,21); price(200,21,'C6')" class="sin">C6</div></td>
						<td class="seatmatrix <?php if($ticketstatus[22]==1){ echo "changedClass";}?>"><div onclick="myfun(200,22); price(200,22,'C7')" class="sin">C7</div></td>
						<td class="seatmatrix <?php if($ticketstatus[23]==1){ echo "changedClass";}?>"><div onclick="myfun(200,23); price(200,23,'C8')" class="sin">C8</div></td>
					</tr>
					<tr class="spacing">
						<td><h4 style="color: grey">CLASSIC 120/seat<hr></h4></td>
					</tr>
					<tr>
						<td  style="color:yellow;" class="seatm">&ensp;CLASSIC</td>
						<td class="seatmatrix <?php if($ticketstatus[24]==1){ echo "changedClass";}?>"><div onclick="myfun(120,24); price(120,24,'J1')" class="sin">J1</div></td>
						<td class="seatmatrix <?php if($ticketstatus[25]==1){ echo "changedClass";}?>"><div onclick="myfun(120,25); price(120,25,'J2')" class="sin">J2</div></td>
						<td class="seatmatrix <?php if($ticketstatus[26]==1){ echo "changedClass";}?>"><div onclick="myfun(120,26); price(120,26,'J3')" class="sin">J3</div></td>
						<td class="seatmatrix <?php if($ticketstatus[27]==1){ echo "changedClass";}?>"><div onclick="myfun(120,27); price(120,27,'J4')" class="sin">J4</div></td>
						<td class="seatmatrix <?php if($ticketstatus[28]==1){ echo "changedClass";}?>"><div onclick="myfun(120,28); price(120,28,'J5')" class="sin">J5</div></td>
						<td class="seatmatrix <?php if($ticketstatus[29]==1){ echo "changedClass";}?>"><div onclick="myfun(120,29); price(120,29,'J6')" class="sin">J6</div></td>
						<td class="seatmatrix <?php if($ticketstatus[30]==1){ echo "changedClass";}?>"><div onclick="myfun(120,30); price(120,30,'J7')" class="sin">J7</div></td>
						<td class="seatmatrix <?php if($ticketstatus[31]==1){ echo "changedClass";}?>"><div onclick="myfun(120,31); price(120,31,'J8')" class="sin">J8</div></td>
					</tr>
					<tr>
						<td><div></div></td>
						<td class="seatmatrix <?php if($ticketstatus[32]==1){ echo "changedClass";}?>"><div onclick="myfun(120,32); price(120,32,'K1')" class="sin">K1</div></td>
						<td class="seatmatrix <?php if($ticketstatus[33]==1){ echo "changedClass";}?>"><div onclick="myfun(120,33); price(120,33,'K2')" class="sin">K2</div></td>
						<td class="seatmatrix <?php if($ticketstatus[34]==1){ echo "changedClass";}?>"><div onclick="myfun(120,34); price(120,34,'K3')" class="sin">K3</div></td>
						<td class="seatmatrix <?php if($ticketstatus[35]==1){ echo "changedClass";}?>"><div onclick="myfun(120,35); price(120,35,'K4')" class="sin">K4</div></td>
						<td class="seatmatrix <?php if($ticketstatus[36]==1){ echo "changedClass";}?>"><div onclick="myfun(120,36); price(120,36,'K5')" class="sin">K5</div></td>
						<td class="seatmatrix <?php if($ticketstatus[37]==1){ echo "changedClass";}?>"><div onclick="myfun(120,37); price(120,37,'K6')" class="sin">K6</div></td>
						<td class="seatmatrix <?php if($ticketstatus[38]==1){ echo "changedClass";}?>"><div onclick="myfun(120,38); price(120,38,'K7')" class="sin">K7</div></td>
						<td class="seatmatrix <?php if($ticketstatus[39]==1){ echo "changedClass";}?>"><div onclick="myfun(120,39); price(120,39,'K8')" class="sin">K8</div></td>
					</tr>
					<tr>
						<td><div></div></td>
						<td class="seatmatrix <?php if($ticketstatus[40]==1){ echo "changedClass";}?>"><div onclick="myfun(120,40); price(120,40,'L1')" class="sin">L1</div></td>
						<td class="seatmatrix <?php if($ticketstatus[41]==1){ echo "changedClass";}?>"><div onclick="myfun(120,41); price(120,41,'L2')" class="sin">L2</div></td>
						<td class="seatmatrix <?php if($ticketstatus[42]==1){ echo "changedClass";}?>"><div onclick="myfun(120,42); price(120,42,'L3')" class="sin">L3</div></td>
						<td class="seatmatrix <?php if($ticketstatus[43]==1){ echo "changedClass";}?>"><div onclick="myfun(120,43); price(120,43,'L4')" class="sin">L4</div></td>
						<td class="seatmatrix <?php if($ticketstatus[44]==1){ echo "changedClass";}?>"><div onclick="myfun(120,44); price(120,44,'L5')" class="sin">L5</div></td>
						<td class="seatmatrix <?php if($ticketstatus[45]==1){ echo "changedClass";}?>"><div onclick="myfun(120,45); price(120,45,'L6')" class="sin">L6</div></td>
						<td class="seatmatrix <?php if($ticketstatus[46]==1){ echo "changedClass";}?>"><div onclick="myfun(120,46); price(120,46,'L7')" class="sin">L7</div></td>
						<td class="seatmatrix <?php if($ticketstatus[47]==1){ echo "changedClass";}?>"><div onclick="myfun(120,47); price(120,47,'L8')" class="sin">L8</div></td>
					</tr>
					
				</table>
			<!-- </div> -->
		
		 <div class="book">
				<a href=<?php echo"payment.php?pay_id={$user_id}"?>><button onclick="databasecheck()" id="passbypost" class="sum">Book Now</button></a>
		 </div>
					<div class="afterselect"><button id="ifdone" class="afterselectclass">Click Only if You are done</button></div>
		 <div id="totalprice">
				<h1 class="pricein">Total:<span id="pricechange">000</span></h1>
		 </div>

		 <div class="status_a">
		  	<div class="status_e"></div>
		  	<strong class="empty">Empty Seat</strong>
		 </div>
		 <div class="status_a">
		  	<div class="status_r"></div>
		  	<strong class="reserved">Reserved Seat</strong>
		 </div>
		 <div class="status_a">
		  	<div class="status_b"></div>
		  	<strong class="booked">Booked Seat</strong>
		 </div>
		<!--  <button class="dwnld" onclick="download()">Download Ticket</button>
		 <p class="viewticket"> Your Ticket Here
		    <p id="comm"  class="viewticket">
			No ticket selected yet
		 </p>
		 </p> -->
		 


		<script type="text/javascript">
					var total=0;
					var count=new Array(48);
					var seatname=new Array(48);
				    for(var i=0;i<count.length;i++){
				    	count[i]=0;seatname[i]=0;
				    }

					var button=document.querySelectorAll(".seatmatrix");
					var pchan=document.querySelector("#pricechange");


					function myfun(x,y,z){					
					button[y].classList.toggle("change");							
						}
                   

				
					function price(m,n,p){
					count[n]=count[n]+1;
					
					var check=count[n];
					if(check%2==0){
						total=total-m;
						localStorage.setItem("storageName",total);
						seatname[n]=0;
					}
					else{
						total=total+m;
						localStorage.setItem("storageName",total);
						seatname[n]=p;

					}
					  // alert(total);
						 pchan.innerHTML=total;	   
				    }

                 $(document).ready(function(){
                 	$("#ifdone").click(function(){
                 		$("#comm").load("ajaxhelper.php",{
                 		ticketcount:seatname,disableid:<?php echo $Id;?>
                 	});               	
                 });
              });
				   
				  function download() {
 				  window.print();
				}  
				    // function database(a,b,c){
				    // 	if(c==0){

				    // 	}
				    // }
  </script>
</body>
	
</html>

<!-- 
					
						// mysqli_select_db($conn,"ticket");
						// $ticketup="UPDATE `ticket` SET `status`=1 WHERE id=1";
						// $sq=mysqli_query($ticketup,$conn);
						// if($sq){
						// echo "success";}
						// else{
						// 	echo "failed";
						 -->
				


<?php
// session_destroy();
}
}
?>


<!-- Ajax Page -->
<?php
include('connection.php');
    if(isset($_POST["ticketcount"])){
		$ticketcount=$_POST["ticketcount"];
		$disableid=$_POST["disableid"];
	 		foreach($ticketcount as $key => $value){
	 			if($value!='0'){
	 				$Id=$key;
	 				$Id++;
					mysqli_select_db($conn,"ticket");
				if($disableid==1){
					$ticketup="UPDATE `ticket` SET `statusA`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					// echo $value;echo"\t";
				}
				else if($disableid==2){
					$ticketup="UPDATE `ticket` SET `statusB`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					// echo $value;echo"\t";
				}
				else if($disableid==3){
					$ticketup="UPDATE `ticket` SET `statusC`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					// echo $value;echo"\t";
				}
				else if($disableid==4){
					$ticketup="UPDATE `ticket` SET `statusD`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					// echo $value;echo"\t";
				}
				else if($disableid==5){
					$ticketup="UPDATE `ticket` SET `statusE`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					// echo $value;echo"\t";
				}
				else if($disableid==6){
					$ticketup="UPDATE `ticket` SET `statusF`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					// echo $value;echo"\t";
				}
				else if($disableid==7){
					$ticketup="UPDATE `ticket` SET `statusG`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					// echo $value;echo"\t";
				}
				else if($disableid==8){
					$ticketup="UPDATE `ticket` SET `statusH`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					// echo $value;echo"\t";
				}
				else if($disableid==9){
					$ticketup="UPDATE `ticket` SET `statusI`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					// echo $value;echo"\t";
				}
			}
		}
	}
	// echo"Done";	
?>

         //         $(document).ready(function(){
         //         	$("#ifdone").click(function(){
         //         		$("#comm").load("ajaxhelper.php",{
         //         		ticketcount:seatname,disableid:<?php echo $Id;?>
         //         	},function(responseTxt, statusTxt, xhr){
         //         		if(statusTxt == "success"){
        	// 			// alert("External content loaded successfully!");
        	// 			location.reload();
        	// 		}
					    // if(statusTxt == "error")
					    // alert("Error: " + xhr.status + ": " + xhr.statusText);
         //         	});               	
         //         });
         //      });
              //    $(document).ready(function(){
              //    	$("#abc").click(function(){
              //    		$("#onselect").load("flipStatus.php",{
              //    		changeid=8;
              //    	});               	
              //    });
              // });
				
				   // $('#ajax_button').on('click', function(){
                
       //          //Disable our button
       //          $('#ajax_button').attr("disabled", true);
                
       //          //The URL that we are sending an Ajax request to.
       //          //For this example, I'm sending a Ajax request to the current page.
       //          var url = window.location.href;
                
       //          $.ajax({
       //              url: url,
       //              success: function(data){
       //                  //The Ajax request was a success.
       //                  //Do something in here.
       //              },
       //              complete: function(){
       //                  //Ajax request is finished, so we can enable
       //                  //the button again.
       //                  $('#ajax_button').attr("disabled", true);
       //              }
       //          });
       //      });
				
				//   function download() {
 			// 	  window.print();
				// }  
				    // function database(a,b,c){
				    // 	if(c==0){

				    // 	}
				    // }