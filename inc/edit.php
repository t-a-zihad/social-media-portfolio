<?php

session_start();
	
	/*Required files*/
	include('dbconn.php');
	
	
	$edited_post_id=$_GET['edit'];
	
	$edited_post=$_POST['cpost_cont'];
	
	$edited_image=$_FILES['cpost_img']['name'];
					$logged_in_post_user_image_tmp=$_FILES['cpost_img']['tmp_name'];
					$logged_in_post_user_error=$_FILES['cpost_img']['error'];
					
	if($edited_post==" "||$edited_image==" "){
		
		echo	'<script type="text/javascript">alert("You have not update your post")</script>';
		header("location:../home/admin.php");
		
	}else{
		if($logged_in_post_user_error>=1){
			header("location:../home/editPost.php?feedback=unsupported_img");
			
			exit();
			
		}else{
		
			mysqli_query($conn,"UPDATE  post_info  SET post_content='$edited_post', post_img='$edited_image' WHERE post_id='$edited_post_id'");
			move_uploaded_file($logged_in_post_user_image_tmp,"../home/posted_image/".$edited_image);
			
			echo	'<script type="text/javascript">alert("Your post has updated")</script>';
			
			echo '<script type="text/javascript">window.open("../home/admin.php","_self")</script>';
			
		}
		
	}
	