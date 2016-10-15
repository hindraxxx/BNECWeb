<?php
	include ("connect.php");
	  session_start();
	  if(!isset($_SESSION['name']) || !isset($_SESSION['nim'])){
	    header("location:login.php");
	  }
	$nim= $_SESSION['nim'];
	$code = $_POST["code"]; 
    $var_value = date("Y-m-d",strtotime($_SESSION['date']));
    $purpose = $_POST['alasan']; 
    $startTime = $_POST['startTime']; 
    $endTime = $_POST['endTime'];
    

    mysqli_select_db($connect, "k5442245_bnec");

	$cekdataavailable = mysqli_query($connect, "SELECT * FROM trroom WHERE roomID = '$code' AND tanggal ='$var_value' AND (('$startTime' > start AND '$startTime'< `end`) OR ('$endTime' > start AND '$endTime'< `end`)) ")OR die (mysqli_errOR($connect));
	
	 if(!mysqli_fetch_array($cekdataavailable)){

		$tambahdata = mysqli_query($connect,"INSERT INTO trroom (nim, tanggal, roomID, purpose, start, `end`) VALUES ('$nim','$var_value','$code','$purpose','$startTime','$endTime') ") OR die (mysqli_errOR($connect));
		
		
		if(!$tambahdata){
			echo('input gagal');
		}
		else{
			
		echo "Ruangan Kosong, booking di proses, Anda akan kembali ke reservation page setelah 3 detik";
			header( "refresh:3;url=reserve.php" );
		}
	}
	else{
		echo "Ruangan Sudah di book, proses booking gagal, Anda akan kembali ke reservation page setelah 3 detik";
			header( "refresh:3;url=reserve.php" );
	}

	mysqli_close($connect);
?>