<?php

include('connection.php');
error_reporting(0);
echo "HIII";
$ticket_status_update = "SELECT * FROM `ticket` WHERE `id`=1";
	 			$data=mysqli_query($conn,$ticket_status_update);
				$current_data=mysqli_fetch_assoc($data);
				echo $current_data['statusA'];
// $sql="SELECT * FROM `ticket`";
// 				$ret=mysqli_query($conn,$sql);
// 				// $a=array();
// 				// $id=0;
// while($val=mysqli_fetch_assoc($ret)){
// 	echo $val['statusA'];
// }
// foreach ($a as $key => $value) {
// 	# code...
// 	echo $value;
// }
?>