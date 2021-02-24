<?php
	session_start();
include('connection.php');
    if(isset($_POST["ticketcount"])){

		$ticketcount=$_POST["ticketcount"];
		$disableid=$_POST["disableid"];
	 		foreach($ticketcount as $key => $value){
	 		// 	$ticket_status_update ="SELECT * FROM `ticket` WHERE `id`=".$disableid;
	 		// 	$data=mysqli_query($conn,$ticket_status_update);
				// $current_data=mysqli_fetch_assoc($data);
	 			if($value!='0'){
	 				$Id=$key;
	 				$Id++;
					mysqli_select_db($conn,"ticket");
				if($disableid==1){
					// if($current_data[$Id]=='0'){
						$ticketup="UPDATE `ticket` SET `statusA`=1 WHERE id=".$Id;
						$sq=mysqli_query($conn,$ticketup);
						$_SESSION['tickets'][]=$value;
					}
					// else{
					// 	// $message = "Seat is Already Booked Select Another Seat";
					// 	// echo "<script type='text/javascript'>alert('$message');</script>";
					// 	$ticketup="UPDATE `ticket` SET `statusA`=0 WHERE id=".$Id;
					// 	$sq=mysqli_query($conn,$ticketup);
					// 	$_SESSION['tickets'][0]=$value;
					// }
					// echo $value;echo"\t";
				// }
				else if($disableid==2){
					// if($current_data['statusA']==0)
					$ticketup="UPDATE `ticket` SET `statusB`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					$_SESSION['tickets'][]=$value;
					// echo $value;echo"\t";
				}
				else if($disableid==3){
					// if($current_data['statusA']==0)
					$ticketup="UPDATE `ticket` SET `statusC`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					$_SESSION['tickets'][]=$value;
					// echo $value;echo"\t";
				}
				else if($disableid==4){
					$ticketup="UPDATE `ticket` SET `statusD`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					$_SESSION['tickets'][]=$value;
					// echo $value;echo"\t";
				}
				else if($disableid==5){
					$ticketup="UPDATE `ticket` SET `statusE`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					$_SESSION['tickets'][]=$value;
					// echo $value;echo"\t";
				}
				else if($disableid==6){
					$ticketup="UPDATE `ticket` SET `statusF`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					$_SESSION['tickets'][]=$value;
					// echo $value;echo"\t";
				}
				else if($disableid==7){
					$ticketup="UPDATE `ticket` SET `statusG`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					$_SESSION['tickets'][]=$value;
					// echo $value;echo"\t";
				}
				else if($disableid==8){
					$ticketup="UPDATE `ticket` SET `statusH`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					$_SESSION['tickets'][]=$value;
					// echo $value;echo"\t";
				}
				else if($disableid==9){
					$ticketup="UPDATE `ticket` SET `statusI`=1 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					$_SESSION['tickets'][]=$value;
					// echo $value;echo"\t";
				}
			}
		}
	}
	// echo"Done";	
?>