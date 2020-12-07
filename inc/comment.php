<?php
	session_start();
	
	/*Required files*/
	include('dbconn.php');
	
	
	
	//main
	
	$logged_in_comment_user_name=$_SESSION['first_name']." ".$_SESSION['last_name'];
	$logged_in_comment_user_profile_pic=$_SESSION['image'];
	
	$logged_in_comment_user_comment=$_POST['user_comment'];
	$logged_in_comment_user_postId=$_POST['commented_post_id'];
	
	 
	
	if($logged_in_comment_user_comment){
		mysqli_query($conn,"INSERT INTO user_comments (commented_user_name, commented_user_ppic, commented_user_comment, post_id) VALUES('$logged_in_comment_user_name', '$logged_in_comment_user_profile_pic', '$logged_in_comment_user_comment', '$logged_in_comment_user_postId')");
		
		header("location:../home/social.php");
		
		exit();
	}else{
		header("location:../home/social.php");
		
		exit();
	}