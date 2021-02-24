<?php
	include('connection.php');
    if(isset($_POST["changeId"])){
		$changeid=$_POST["changeId"];
		$disableid=$_POST["disableid"];
		echo"HIII";
				if($disableid==1){
						$ticketup="UPDATE `ticket` SET `statusA`=2 WHERE id=".$Id;
						$sq=mysqli_query($conn,$ticketup);
						
				}
				else if($disableid==2){
					
					$ticketup="UPDATE `ticket` SET `statusB`=2 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					
					
				}
				else if($disableid==3){
					
					$ticketup="UPDATE `ticket` SET `statusC`=2 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					
					
				}
				else if($disableid==4){
					$ticketup="UPDATE `ticket` SET `statusD`=2 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					
				}
				else if($disableid==5){
					$ticketup="UPDATE `ticket` SET `statusE`=2 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
				
				}
				else if($disableid==6){
					$ticketup="UPDATE `ticket` SET `statusF`=2 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					
				}
				else if($disableid==7){
					$ticketup="UPDATE `ticket` SET `statusG`=2 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					
				}
				else if($disableid==8){
					$ticketup="UPDATE `ticket` SET `statusH`=2 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					
				}
				else if($disableid==9){
					$ticketup="UPDATE `ticket` SET `statusI`=2 WHERE id=".$Id;
					$sq=mysqli_query($conn,$ticketup);
					
				}
	}
		
		?>