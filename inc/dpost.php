<?php

	/*Required files*/
		include('../inc/dbconn.php');
	
	
	if(isset($_GET['del'])){
		
		$delPost_id=$_GET['del'];
		
		mysqli_query($conn,"DELETE FROM post_info WHERE post_id='$delPost_id' ");
		
		echo '<script type="text/javascript">alert("Your post has been deleted")</script>';
		
		
		echo '<script type="text/javascript">window.open("../home/admin.php","_self")</script>';
		
		
	}
