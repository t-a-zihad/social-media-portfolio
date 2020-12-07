<?php
	session_start();
	
	/*Required files*/
	include('dbconn.php');
	
	
	$logged_in_post_user_name=$_SESSION['first_name']." ".$_SESSION['last_name'];

	$logged_in_post_user_profile_pic=$_SESSION['image'];
	$logged_in_post_user_postTime= date('F d, Y  g:i:s A');
	$logged_in_post_user_post=$_POST['cpost_cont'];
	
	$logged_in_post_user_image=$_FILES['cpost_img']['name'];
					$logged_in_post_user_image_tmp=$_FILES['cpost_img']['tmp_name'];
					$logged_in_post_user_error=$_FILES['cpost_img']['error'];
	if($logged_in_post_user_post||$logged_in_post_user_image){
		if($logged_in_post_user_error>=1){
			header("location:../home/social.php?feedback=unsupported_img");
			
			exit();
		}else{
		
			mysqli_query($conn,"INSERT INTO post_info (post_user_image, post_user_name, post_time, post_content, post_img) VALUES('$logged_in_post_user_profile_pic', '$logged_in_post_user_name', '$logged_in_post_user_postTime', '$logged_in_post_user_post', '$logged_in_post_user_image')");
			move_uploaded_file($logged_in_post_user_image_tmp,"../home/posted_image/".$logged_in_post_user_image);
			
			header("location:../home/social.php");
			
			exit();
		}
	}else{
		header("location:../home/social.php?feedback=chk");
		
		exit();
	}
	
