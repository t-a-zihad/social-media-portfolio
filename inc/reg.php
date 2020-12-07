<?php

	
	/*Required files*/
	include('dbconn.php');
	
	
	
	/*body*/

	$u_fname= $_POST['fname'];
	$u_sname= $_POST['sname'];
	$u_email= $_POST['email'];
			$re_email= $_POST['reemail'];
	$u_password=Md5($_POST['pass']);
	$u_birthday= $_POST['day']."-". $_POST['month']."-". $_POST['Year'];
	$u_gender= $_POST['gender'];
	$u_profilePic= $_FILES['ppic']['name'];
			$u_profilePic_tmp= $_FILES['ppic']['tmp_name'];
			$u_profilePic_error= $_FILES['ppic']['error'];
			
	
	
	$blank_password="d41d8cd98f00b204e9800998ecf8427e";
	
	$slected_user_email= mysqli_query($conn,"SELECT * FROM user_info WHERE user_email='$u_email'");
	$email_number= mysqli_num_rows($slected_user_email);
	

	if($u_fname && $u_sname && $u_email && $u_password && $u_birthday && $u_gender && $u_profilePic){
		if($u_password===$blank_password){
			header("location:../index.php?result=emptyPassword");
			
			exit();
		}else{	
			if($u_email==$re_email){
				
				if($email_number>=1){
					header("location:../index.php?result=usedEmail");
					
					exit();
				}else{
					if($u_profilePic_error>=1){
						header("location:../index.php?result=unsupportedImage");
						
						exit();
					}else{
						mysqli_query($conn,"INSERT INTO user_info (user_first_name, user_sur_name, user_email, user_password, user_birthday, user_gender, user_profile_picture) VALUES('$u_fname','$u_sname','$u_email','$u_password','$u_birthday','$u_gender','$u_profilePic')");
						
						move_uploaded_file($u_profilePic_tmp,'../profile/'.$u_profilePic);
						echo "ok";
						header("location:../index.php?result=success");
						
						exit();
					}
				}
				
			}else{
				header("location:../index.php?result=emailNotMatch");
				
				exit();
			}
		}
	}else{
		header("location:../index.php?result=emptyInputs");
		
		exit();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
		
	