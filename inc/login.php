<?php
	
	session_start();
	
	/*Required files*/
	include('dbconn.php');
	
	
	
	/*body*/
	
	$uemail= $_POST['u_email'];
	$upass= md5($_POST['u_password']);
	
	
	$user_login= mysqli_query($conn,"SELECT * FROM user_info WHERE user_email='$uemail' AND user_password='$upass'");
	
	
	$user_num = mysqli_num_rows($user_login);
	
	if($user_num==1){
		
		$user_info_part= mysqli_fetch_array($user_login);
		$_SESSION['id_no']=$user_info_part['user_id'];
		$_SESSION['first_name']= $user_info_part['user_first_name'];
		$_SESSION['last_name']= $user_info_part['user_sur_name'];
		$_SESSION['image']= $user_info_part['user_profile_picture'];
		
		header("location:../home/social.php");
		exit();
		
	}else{
		header("location:../index.php?result=emailNotPass");
		
		exit();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	