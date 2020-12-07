<?php session_start(); ?>

<!doctype html>
<?php
	
	/*Required files*/
	include('../inc/dbconn.php');
	
	
	if(!isset( $_SESSION['first_name'])){
		header("location:../index.php");
		
		exit();
	}
	
	$logged_in_user_total_name= $_SESSION['first_name']." ".$_SESSION['last_name'];
	$logged_in_user_pro_pic=$_SESSION['image'];
?>

<html class="no-js" lang="en-US">

<head>
  <meta charset="utf-8">
  <title><?php echo $logged_in_user_total_name; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="240, http://localhost/social.com/home/admin.php" />
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/bootstrap-grid.min.css"> 
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css"> 
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsibe-style.css">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if lt Firefox 65]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  
	  <!-- website building is starting from here -->
	  <!-- header-area is starting from here -->
		<header class="fb-header row">
			<div class="fb-ic-search row col-lg-6">
				<div class="icon text-center col-lg-2"><span class="fab fa-social"></span></div>
				<div class="form input-group col-lg-10">
					<input type="text" class="form-control" placeholder="Search"/>
					<div class="search-icon input-group-append">
						<div class="search input-group-text"><a href="#"><span class="fas fa-search"></span></a></div>
					</div>
				</div>
			</div>
			
			<div class="menu col-lg-6">
				<ul class="link list-inline">
					<li class="text-center list-inline-item"><a href="#"><img class="profile-pic" src="../profile/<?php echo $logged_in_user_pro_pic; ?>" alt="pic" /><?php echo $_SESSION['first_name']; ?></a></li>
					<li class="text-center list-inline-item"><a href="social.php">Home</a></li>
					<li class="text-center list-inline-item"><a href="#">Find Friends</a></li>
					<li class="text-center list-inline-item"><a href="#">Create</a></li>
					<li class="text-center list-inline-item">
						<ul class="mess list-inline-item">
							<li class="text-center list-inline-item"><a href="#"><span class="fas fa-user"></span></a></li>
							<li class="text-center list-inline-item"><a href="#"><span class="fab fa-social-messenger"></span></a></li>
							<li class="text-center list-inline-item"><a href="#"><span class="fas fa-bell"></span></a></li>
						</ul>
					
					</li>
					<li class="text-center list-inline-item">
						<ul class="mess list-inline-item">
							<li class="text-center list-inline-item"><a href="#"><span class="fas fa-question-circle"></span></a></li>
							<div class="dropdown list-inline-item">
								<button class="btn btn-default dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"></button>

								<div class="hidden-menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
									<a href="#" class="dropdown-item">Message</a>
									<a href="#" class="dropdown-item">People You May know</a>
									<a href="../inc/logout.php" class="dropdown-item">Log-out</a>
								</div>
							</div>
						</ul>
						<a href="#"><span class=""></span></a>
					</li>
					
				</ul>
			</div>
			
			
		</header>
		
		
		
	  <!--header-area has ended here  -->
	  
	  <!--content-area is starting from here -->
		<section class="main-content row">
				<div class="left-side col-lg-2">
					<div class="user-info">
						<a title="<?php echo $logged_in_user_total_name; ?>" href="#"><img class="profile-pic" src="../profile/<?php echo $logged_in_user_pro_pic; ?>" alt="pic" /><?php echo $logged_in_user_total_name; ?></a>
					</div>
					<div class="current-situation list-group-item">
						<a href="#" class="list-group-item list-group-item-action active">News Feed</a>
						<a href="#" class="list-group-item list-group-item-action">Messenger</a>
						<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Watch<span></span></a>
					</div>
					
					<div class="shcut">
						<h6>Shortcuts</h6>
						<div class="shcut-item list-group-item">
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">DRB<span>20+</span></a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">RJ Uday Fan Club<span>5+</span></a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Best Friends<span>35+</span></a>
						</div>
					</div>
					
					
					<div class="explore">
						<h6>Explore</h6>
						<div class="explore-item list-group-item">
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Groups<span>20+</span></a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Pages<span>5+</span></a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Events<span>35+</span></a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Fundraisers<span></span></a>
							<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Saved<span>50+</span></a>
							<a href="#" class="smore list-group-item list-group-item-action d-flex justify-content-between align-items-center">See More...</a>
						</div>
					</div>
				</div>
				
				
				
				
				<div class="content col-lg-5">
					<?php
						if(isset($_GET['edit'])):
								
								$edit_post_id=$_GET['edit'];
								$selecting_all_post= mysqli_query($conn, "SELECT * FROM post_info WHERE post_id='$edit_post_id' ORDER BY post_id DESC");
								
								while($all_post_part= mysqli_fetch_array($selecting_all_post)):
							
									$has_posted_id=$all_post_part['post_id'];
									$has_posted_user_ppic=$all_post_part['post_user_image'];
									$has_posted_user_name=$all_post_part['post_user_name'];
									$has_posted_time=$all_post_part['post_time'];
									$has_posted_post=$all_post_part['post_content'];
									$has_posted_img=$all_post_part['post_img'];
						?>
				
				
					<div class="cpost">
						<form class="was-validated" action="../inc/edit.php?edit=<?php echo $has_posted_id;?>" method="POST" enctype="multipart/form-data">
							<div class="title after">
								<h6 class="float-left">Create Post</h6>
								
								<?php 
									if(isset($_GET['feedback'])){
										if($_GET['feedback']=='unsupported_img'){
											echo "<i style='font-size: 14px;margin: 0 30px; color:red;'>Your image is not supported</i>";
										}
										
										if($_GET['feedback']=='chk'){
											echo "<i style='font-size: 14px;margin: 0 30px; color:red;'>Something went wrong.Try again</i>";
										}
										
									}
								?>
								
								
								
								<input type="Submit" value="UPDATE POST" class="btn btn-default cpoat-submit" />
							</div>
							
								<div class="cpost-a container-fluid">
									<div class="cpost-coont after">
										<div class="u-img"><img class="profile-pic" src="../profile/<?php echo $logged_in_user_pro_pic; ?>" alt="pic" /></div>
										<div class="u-spe">
											<textarea name="cpost_cont"  placeholder="Write here to edit post" id="cpost-text"><?php echo $has_posted_post; ?></textarea>
										</div>
									</div>
								
								</div>
							
								<div class="cpost-opt">
									
									<a href="#" class="d-inline-b post-opt" type="button" data-toggle="modal" data-target="#insert-photo">Photo/video</a>
											<div class="inserting-photo modal fade" id="insert-photo">
												<div class="modal-dialog modal-lg modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modalititle">Update Your Image</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															  <span aria-hidden="true">&times;</span>
															</button>
														</div>
														
														<div class="modal-body">
															<div class="box-for-uploading-img">
																 <input type="file" class="custom-file-input" id="validatedCustomFile" name="cpost_img" required>
																<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
															</div>
															
															<div class="show-last">
																<img src="posted_image/<?php echo $has_posted_img;?>" alt="" />
															</div>
														</div>
														
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
														</div>
													</div>
												</div>
											</div>
											
									<a href="#" class="d-inline-b post-opt">Tag Friends</a>
									<a href="#" class="d-inline-b post-opt">Feeling/Activity</a>
									<a href="#" class="d-inline-b post-opt">...</a>
									 
									
									
								</div>
						</form>
					</div>
					
					<?php

							endwhile;
						endif;
					?>
					
					<div class="stories"></div>
					
					
					
					
					
					<div class="posted-news-feed">
						
					
						
					</div>
				
				
				
				</div>
				<div class="right-side col-lg-3">
					<!--<div class="suggested-persons">
						<div class="suggested-persons-title after">
							<h6 class="float-left">People You May Know</h6>
							<a href="#" class="float-right">See All</a>
						</div>
						
						<div class="suggested-persons-shown">
							<div class="suggested-user-info after">
								<div class="suggested-user-pic float-left">
									<img class="profile-pic-suggested-user" src="images/msimg.png" alt="pic" />
								</div>
								<div class="suggested-user-name_time float-left">
									<a href="#">Tamsi Trisha</a>
									<h6>Works at Student Life</h6>
									<div class="suggested-user-opt">
										<button class="btn btn-default">Add Friend</button>
										<button class="btn btn-default">Remove</button>
									</div>
								</div>
							</div>
						</div>
						
						<div class="suggested-persons-shown">
							<div class="suggested-user-info after">
								<div class="suggested-user-pic float-left">
									<img class="profile-pic-suggested-user" src="images/msimg.png" alt="pic" />
								</div>
								<div class="suggested-user-name_time float-left">
									<a href="#">Tamsi Trisha</a>
									<h6>Works at Student Life</h6>
									<div class="suggested-user-opt">
										<button class="btn btn-default">Add Friend</button>
										<button class="btn btn-default">Remove</button>
									</div>
								</div>
							</div>
						</div>
						
						<div class="suggested-persons-shown">
							<div class="suggested-user-info after">
								<div class="suggested-user-pic float-left">
									<img class="profile-pic-suggested-user" src="images/msimg.png" alt="pic" />
								</div>
								<div class="suggested-user-name_time float-left">
									<a href="#">Tamsi Trisha</a>
									<h6>Works at Student Life</h6>
									<div class="suggested-user-opt">
										<button class="btn btn-default">Add Friend</button>
										<button class="btn btn-default">Remove</button>
									</div>
								</div>
							</div>
						</div>
						
						<div class="suggested-persons-shown">
							<div class="suggested-user-info after">
								<div class="suggested-user-pic float-left">
									<img class="profile-pic-suggested-user" src="images/msimg.png" alt="pic" />
								</div>
								<div class="suggested-user-name_time float-left">
									<a href="#">Tamsi Trisha</a>
									<h6>Works at Student Life</h6>
									<div class="suggested-user-opt">
										<button class="btn btn-default">Add Friend</button>
										<button class="btn btn-default">Remove</button>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>-->
					
					
					<div class="sponsored">
						<div class="sponsored-title after">
							<h6 class="float-left">Sponsored</h6>
							<a href="#" class="float-right">Create Ad</a>
						</div>
						
						<div class="sponsored-shown">
							<a href="#">
								<img src="images/s1.png" alt="aa" />
								<h5>Magezon</h5>
								<h6>magezon.com</h6>
							</a>
						</div>
						
						<div class="sponsored-shown">
							<a href="#">
								<img src="images/s1.png" alt="aa" />
								<h5>Magezon</h5>
								<h6>magezon.com</h6>
							</a>
						</div>
						
						<div class="sponsored-shown">
							<a href="#">
								<img src="images/s1.png" alt="aa" />
								<h5>Magezon</h5>
								<h6>magezon.com</h6>
							</a>
						</div>
						
						<div class="sponsored-shown">
							<a href="#">
								<img src="images/s1.png" alt="aa" />
								<h5>Magezon</h5>
								<h6>magezon.com</h6>
							</a>
						</div>
					</div>
					
					<div class="group">
						<div class="group-title after">
							<h6 class="float-left">group</h6>
							<a href="#" class="float-right">Create Ad</a>
						</div>
						
						<div class="group-shown">
							<div class="group-name">
								<img src="images/s1.png" alt="aa" />
								<div class="gdes d-inline-b">
									<a href="#">Magezon</a>
									<h6>2 friends . 117,245 members</h6>
								</div>
								<div class="gopt d-inline-b">
									<button class="btn btn-default">+ join group</button>
								</div>
							</div>
						</div>
						
						<div class="group-shown">
							<div class="group-name">
								<img src="images/s1.png" alt="aa" />
								<div class="gdes d-inline-b">
									<a href="#">Magezon</a>
									<h6>2 friends . 117,245 members</h6>
								</div>
								<div class="gopt d-inline-b">
									<button class="btn btn-default">+ join group</button>
								</div>
							</div>
						</div>
						
						<div class="group-shown">
							<div class="group-name">
								<img src="images/s1.png" alt="aa" />
								<div class="gdes d-inline-b">
									<a href="#">Magezon</a>
									<h6>2 friends . 117,245 members</h6>
								</div>
								<div class="gopt d-inline-b">
									<button class="btn btn-default">+ join group</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="active-persons col-lg-2">
					
					
						
					<div class="active-persons-shown">
					<?php
						$user_id_no=$_SESSION['id_no'];
							$all_user_info= mysqli_query($conn,"SELECT * FROM user_info WHERE user_id!='$user_id_no' ORDER BY user_id DESC  ");
							
							
							while($all_user_part_info=mysqli_fetch_array($all_user_info)):
					?>
						<div class="active-user-info after">
							<?php
								$user_name=$all_user_part_info['user_first_name']." ".$all_user_part_info['user_sur_name'];
								$user_ppic=$all_user_part_info['user_profile_picture'];
							?>
							<a class="float-left" title="<?php echo $user_name; ?>" href="#"><img class="active-profile-pic" src="../profile/<?php echo $user_ppic; ?>" alt="pic" /><?php echo $user_name; ?></a>
							<span class="float-right">1m</span>
						</div>
						
					<?php endwhile;?>	
					</div>
				</div>
		
		</section>
	  <!--content-area has ended here  -->
	  <!--website building has ended here  -->
		
  
  <!-- JQuery is starting from here -->
  <script type="text/javascript" src="js/jQuery v1.11.3.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/all.min.js"></script>
  <script type="text/javascript" src="js/fontawesome.min.js"></script>
  <script type="text/javascript" src="js/mixitup.min.js"></script>
  <script type="text/javascript">
  
	(function($){
	
		$(document).ready(function(){
		
			
				$(".dropdown-toggle").dropdown();
				$(".dropdown-togglea").dropdown();
			
			
			
				$('#cpost-text').focus(
									function(){
										$(this).css('font-size','20px');
										$("input.cpoat-submit").css('display','inline-block');
									}
				);
				
				$('button.view-comm').click(
									function(){
										$('div.user-review').css('border-bottom','1px solid #dddfe2');
										$('.lefted-comm').fadeToggle();
									}
				);
				
				
				
				$('a.post-opt').click(
									function(){
										$("input.cpoat-submit").css('display','inline-block');
									}
									
				);
			
		});
	
	})(jQuery)
  
  </script>
  
  
  
  
  
  
  <!-- JQuery has ended here -->
  

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>



