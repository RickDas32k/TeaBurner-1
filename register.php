<?php
include("dbconnect.php");


if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO `register_info`(`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    $iquery = mysqli_query($conn, $query);

	if($iquery)
	{
		//echo "Registration Successfully";
        header("Location: afterRegister.php");
	}
	else{
		echo "failed:";
	}
}
?>
