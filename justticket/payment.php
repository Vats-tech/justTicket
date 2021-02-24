<?php
	session_start();
include('connection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>payment</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/47c4ff0be6.js"></script>

	<style type="text/css">
		.container{
			background-color:rgba(250, 250, 250,0.9);
			width: 420px;
			height: 560px;
			margin:70px auto;

		}
		.ticket{
			background-color:rgb(0,0,191);
			width: 420px;
			height: 80px;
			

		}
		.wall{
			padding-left: 10px;
			padding-top: 0;
			margin-top: 7px;
           font-family: 'Monoton', cursive;
			/*font-family: 'Raleway', sans-serif;*/


		}
		.text{
			color: orange;
			font-weight: bolder;
			padding-top: 19px;
			text-decoration: underline;
           font-family: 'Monoton', cursive;
			
		}
		.btn{
			width: 420px;
			height: 50px;
			/*margin-top: 350px; */
			background-color: blue;
			border-radius: 10px;
			color: white;
           font-family: 'Monoton', cursive;

		}
		.fas{
			font-weight: bold;
			color:orange;
			font-size: 40px;
			margin-right: 13px;
		}
		.para,.para1{
			padding-left: 20px;
           font-family: 'Monoton', cursive;
		}
		#sumamt,#sumgst,#sumtot{
			padding-left: 250px;
		}
		.thanku{
			color: rgb(240, 0, 184);/*(3, 211, 252)*/;
			font-family: 'Monoton', cursive;
		}
	</style>
</head>
<body>
<?php
if(isset($_GET['pay_id'])){
$payiddb=$_GET['pay_id'];
//echo $payiddb;
mysqli_select_db("payment",$conn);
$payy="SELECT  `amount` FROM `payment` WHERE `id`=".$payiddb;
// $payy="SELECT * FROM `payment`";
$amta=mysqli_query($conn,$payy);
$walletamount=mysqli_fetch_assoc($amta);
// $tota=mysqli_num_rows($amta);

if($walletamount!=0){
// 	$walletamount=array();
// while($result=mysqli_fetch_assoc($amta)){
// 	$walletamount[]=$result['amount'];
// }
?>

	<form action="" method="post">
	<input type="hidden" id="inputprice" name="changein" value="">

<div class="container">
	<div>
		<div class="ticket"><center><h1 class="text"><i class="fas fa-film"></i>
			    JustTicket</h1></center></div>
		<h2 class="wall"><i class="fas fa-wallet"></i>Wallet Amount&emsp;&emsp;&ensp;<i class="fas fa-rupee-sign"></i><span><?php echo $walletamount['amount'];?></span></h2>
		<hr>                                                	
		<br>
		<p class="para">
			Ticket Price -<span id="sumamt">XX</span><br><br>
			GST(10%) -&ensp;&ensp;<span id="sumgst">XX</span>
			<br>
			<hr>
			<p class="para1">Total -&emsp;&emsp;&emsp;<span id="sumtot">XX</span></p>
		</p>
	</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<p class="para">
			<?php 
			// $ticket_array=$_SESSION['tickets'];
			// echo "Seat No - ";
			// for($i=0;$i<sizeof($ticket_array);$i++){
			// 	if($ticket_array[$i]!=0){
			// 	echo " ". $ticket_array[$i];
			// }
			// 	$_SESSION['tickets'][$i] =0;
			// }
		?>
	</p>
			<br>
			<br><center><p class="thanku">Thanks For using justticket</p></center>
		<center><button class="btn" name="submit" type="submit" value="submit" onclick="current()">Pay&emsp;<span id="pay">00</span></button></center>
</div>
</form>

	
  

<script type="text/javascript">
    var totalsumamt=0;
	var suu=localStorage.getItem("storageName");
	var muu= parseInt(suu);
	totalsumamt=parseInt(suu);
	var queamt=document.querySelector("#sumamt");
	var quegst=document.querySelector("#sumgst");
	var quetot=document.querySelector("#sumtot");
	queamt.innerHTML=muu;
	var gst=(10*muu)/100;
	var gst_to_db=(10*muu)/100;
	quegst.innerHTML=gst;
	quetot.innerHTML=muu+gst;
	var que=document.querySelector("#pay");
	que.innerHTML=muu+gst;
	totalsumamt=totalsumamt+gst_to_db;
	//alert(suu);
   
    function current(){
    	document.getElementById("inputprice").value=totalsumamt;
    }
</script>
</body>
</html>
<?php

if(isset($_POST['submit'])){
$deduction=$_POST['changein'];
if($walletamount['amount'] >= $deduction)
$currentamount=$walletamount['amount']-$deduction;

mysqli_select_db("payment",$conn);

$query="UPDATE `payment` SET `amount`=$currentamount WHERE id=".$payiddb;
$sql=mysqli_query($conn,$query);
if($sql){
	// echo "success";
	$message = "TICKET HAS BEEN SENT TO YOUR MAILID";
	echo "<script type='text/javascript'>alert('$message');</script>";
  	header('location:afterlogin.php');

}
else{
	$message = "Insufficient Balance";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
}
}?>

<?php
}?>