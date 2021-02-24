<?php
include('connection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	<h3>UPDATE MOVIE DATA</h3><hr>
	Picture No-<input type="number" name="picid" value=""/>
	Moviename-<input type="text" name="moviename" value=""/>
	Description-<input type="text" name="desc" value="" />
	Release Date-<input type="text" name="date" value="" />
	Movie image-<input type="file" name="file" value="" />
	<input type="submit" name="upload" value="Upload File" />
	<br>

</form>
<hr>
<?php
 if(isset($_POST['upload'])){

$picid=$_POST['picid'];
$mname=$_POST['moviename'];
$des=$_POST['desc'];
$rdate=$_POST['date'];

$file_name=$_FILES['file']['name'];
$file_type=$_FILES['file']['type'];
$file_size=$_FILES['file']['size'];
$file_temp_loc=$_FILES['file']['tmp_name'];
 //copy($tempnam,$folder);
$folder="upload/$file_name";
move_uploaded_file($file_temp_loc,"upload/$file_name");
	
		// echo "file uploaded ";


if($mname!="" && $des!="" && $rdate!="" && $file_name!=""){
	// $query="INSERT INTO `movie`(`moviename`, `description`, `releasedate`, `imgsource`) VALUES ('$mname','$des','$rdate','$folder')";
	$query="UPDATE `movie` SET `moviename`='$mname',`description`='$des',`releasedate`='$rdate',`imgsource`='$folder' WHERE id=".$picid;
	$data=mysqli_query($conn,$query);
	if($data){
	echo "Added Successfully";
	}
	else{
		echo "Failed";
	}
}

}
?>

<br>
<form action="" method="POST" enctype="multipart/form-data">
<h3>UPDATE HEADER DATA</h3><hr>
    PIC NO::<input type="number" name="hid" value="">
	Movie Name::-<input type="text" name="mnam" value="">
	Description::-<input type="text" name="descrip" value="">
	Release Date::-<input type="text" name="rele" value="">
	Movie Image::-<input type="file" name="file" value="">
	<input type="submit" name="done" value="Upload">
</form>
	
	<?php
 if(isset($_POST['done'])){
$hid=$_POST['hid'];
$nam=$_POST['mnam'];
$descri=$_POST['descrip'];
$reldate=$_POST['rele'];

$filename=$_FILES['file']['name'];
$filetype=$_FILES['file']['type'];
$filesize=$_FILES['file']['size'];
$filetemploc=$_FILES['file']['tmp_name'];
 //copy($tempnam,$folder);
$foldersecond="upload/$filename";
move_uploaded_file($filetemploc,"upload/$filename");

if($nam!="" && $descri!="" && $reldate!="" && $filename!=""){
	// $query="INSERT INTO `movie`(`moviename`, `description`, `releasedate`, `imgsource`) VALUES ('$mname','$des','$rdate','$folder')";
    // $que="INSERT INTO `header`(`Moviename`, `Description`, `ReleaseDate`, `source`) VALUES ('$nam','$descri','$reldate','$foldersecond')";
    $que="UPDATE `header` SET `Moviename`='$nam',`Description`='$descri',`ReleaseDate`='$reldate',`source`='$foldersecond' WHERE id=".$hid;


	$datasecond=mysqli_query($conn,$que);
	if($datasecond){
	echo "Added Successfully";
	}
	else{
		echo "Failed";
	}
}

}
?>
<hr>
<br>
<h3>RESET TICKET COUNTER</h3>
<hr>
<form action="" method="POST">
Enter Movie Id Whose Counter Need To Reset <input type="number" name="counter" value="">
<input type="submit" name="reset" value="Reset">
<hr>
</form>
<?php
 if(isset($_POST['reset'])){
 	$reset=$_POST['counter'];
 	for($a=1;$a<=48;$a++){
 		if($reset==1){
			$qee="UPDATE `ticket` SET `statusA`=0 WHERE id=".$a;
					$soq=mysqli_query($conn,$qee);
 		}
 		else if($reset==2){
			$qee="UPDATE `ticket` SET `statusB`=0 WHERE id=".$a;
					$soq=mysqli_query($conn,$qee);

 		}
 		else if($reset==3){
			$qee="UPDATE `ticket` SET `statusC`=0 WHERE id=".$a;
					$soq=mysqli_query($conn,$qee);

 		}
 		else if($reset==4){
			$qee="UPDATE `ticket` SET `statusD`=0 WHERE id=".$a;
					$soq=mysqli_query($conn,$qee);

 		}
 		else if($reset==5){
			$qee="UPDATE `ticket` SET `statusE`=0 WHERE id=".$a;
					$soq=mysqli_query($conn,$qee);

 		}
 		else if($reset==6){
			$qee="UPDATE `ticket` SET `statusF`=0 WHERE id=".$a;
					$soq=mysqli_query($conn,$qee);

 		}
 		else if($reset==7){
			$qee="UPDATE `ticket` SET `statusG`=0 WHERE id=".$a;
					$soq=mysqli_query($conn,$qee);

 		}
 		else if($reset==8){
			$qee="UPDATE `ticket` SET `statusH`=0 WHERE id=".$a;
					$soq=mysqli_query($conn,$qee);

 		}
 		else if($reset==9){
			$qee="UPDATE `ticket` SET `statusI`=0 WHERE id=".$a;
					$soq=mysqli_query($conn,$qee);

 		}

 	}
}
?>
<br>
<h3>UPDATE USER WALLET AMOUNT</h3>
<hr>
<form action="" method="POST">
Insert Id To Update Amount<input type="number" name="wid" value="">	
Enter Amount <input type="number" name="amount" value="">
<input type="submit" name="okk" value="submit">
<hr>
</form>
<?php
if(isset($_POST['okk'])){
	$wid=$_POST['wid'];
	$amount=$_POST['amount'];

	if($wid!="" && $amount!=""){
		$querr="UPDATE `payment` SET `amount`='$amount' WHERE `id`=".$wid;
		$a=mysqli_query($conn,$querr);
		if($a){
			echo "Added Successfully";
		}
		else{
			echo"failed";
		}
	}

}
?>
</body>
</html>