<?php



if(isset($_POST['login-submit']))

{

	require ('dbh.inc.php');

	$user=$_POST['User'];

	$password=$_POST['Pass'];

}

	if(empty($user)||empty($password)){

		header("Location:../header.php?EmptyFeilds");

		exit();

	}



	else{

		$db= mysqli_select_db($conn, "project");

		$query=mysqli_query($conn, "Select* from loginpage  where user='$user' && pwd='$password'");

		$row=mysqli_num_rows($query);

		if($row==1){

			header("Location: ../dbms.php");

		}

		else{

			$error="username or password Invalid!";

			header("Location:../header.php?Invalid");

		}

		mysqli_close($conn);

	}









