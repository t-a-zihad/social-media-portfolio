<?php
	session_start();
	
	if(isset( $_SESSION['first_name'])){
		header("location:home/social.php");
		
		exit();
	}
	
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>social – log in or sign up</title>
		<link rel="stylesheet" href="styles.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	
	<body>
		
		<header>
			<div class="fb-icon">
				<a href="#"><i><img src="images/social-icon.png" alt="fbicon"></i></a>
			</div>
			
			<div class="log-in-to-social">
				<form action="inc/login.php" method="POST">
					<div class="inputting-email_or_phone-number">
						<label for="client_phone-or-email">Email or Phone</label>
						<input id="client_phone-or-email" name="u_email" type="text"/>
					</div>
					
					<div class="inputting-password">
						<label for="client_password">Password</label>
						<input id="client_password" name="u_password" type="password"/>
						<a href="#">Forgotten account?</a>
					</div>
					<div class="log-in-button">
						<input type="submit" value="Log In"/>
					</div>
				</form>
			</div>
		</header>
		
		
		<div class="reg-message">
			
			<?php
				
				if(isset($_GET['result'])){
					
					if($_GET['result']=='emptyInputs'){
						
						echo '<h2 style="text-transform: uppercase;background: blanchedalmond;letter-spacing: 5px;text-align: center;padding: 50px;word-spacing: 10px;font-size: 26pt;color: brown">Please give all the data</h2>';
					}
					if($_GET['result']=='emailNotMatch'){
						
						echo '<h2 style="text-transform: uppercase;background: blanchedalmond;letter-spacing: 5px;text-align: center;padding: 50px;word-spacing: 10px;font-size: 26pt;color: brown">Your email has not match</h2>';
					}
					if($_GET['result']=='success'){
						
						echo '<h2 style="text-transform: uppercase;background: blanchedalmond;letter-spacing: 5px;text-align: center;padding: 50px;word-spacing: 10px;font-size: 26pt;color: brown">Congratulation! You have successfully regestered to <b>social</b></h2>';
					}
					if($_GET['result']=='unsupportedImage'){
						
						echo '<h2 style="text-transform: uppercase;background: blanchedalmond;letter-spacing: 5px;text-align: center;padding: 50px;word-spacing: 10px;font-size: 26pt;color: brown">Your image is not valid</h2>';
					}
					if($_GET['result']=='usedEmail'){
						
						echo '<h2 style="text-transform: uppercase;background: blanchedalmond;letter-spacing: 5px;text-align: center;padding: 50px;word-spacing: 10px;font-size: 26pt;color: brown">You have already an account aganist email</h2>';
					}
					if($_GET['result']=='emptyPassword'){
						
						echo '<h2 style="text-transform: uppercase;background: blanchedalmond;letter-spacing: 5px;text-align: center;padding: 50px;word-spacing: 10px;font-size: 26pt;color: brown">Your password must be given</h2>';
					}
					
					if($_GET['result']=='emailNotPass'){
						
						echo '<h2 style="text-transform: uppercase;background: blanchedalmond;letter-spacing: 5px;text-align: center;padding: 50px;word-spacing: 10px;font-size: 26pt;color: brown">Your email or password is not valid.Please try again</h2>';
					}
					
				}





			?>
			
		
		
		
		</div>
		
		
		<section class="main-content">
			
			<div class="content">
				<div class="connected_people_photo">
				<h1>social helps you connect and share with the people in your life.</h1>
				<img src="images/GwFs3_KxNjS.png" />
			</div>
			
			<div class="social_regestration_form">
				<h1>Create an account</h1>
				<h2>It's free and always will be.</h2>
				
				<form action="inc/reg.php" method="POST" enctype="multipart/form-data">
				
					<div class="name">
						<input name="fname" type="text" placeholder="First name">
						<input name="sname" type="text" placeholder="Surname">
					</div>
					
					
					<input name="email" type="text" placeholder="Mobile number or email adress">
					<input name="reemail" type="text" placeholder="Re-type Mobile number or email adress">
					
					<input type="password" placeholder="New password" name="pass">
					
					<div class="birthday">
						<div class="b-day">   
							<h2 class="bb-day">Birthday</h2>
							
							<select name="day" >
								<option value="day">Day</option> 
								 <option value="1">1</option>
								 <option value="2">2</option>
								 <option value="3">3</option>
								 <option value="4">4</option>
								 <option value="5">5</option>
								 <option value="6">6</option>
								 <option value="7">7</option>
								 <option value="8">8</option>
								 <option value="9">9</option>
								 <option value="10">10</option>
								 <option value="11">11</option>
								 <option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							
							</select>
							<select name="month" >
								<option value="Month">Month</option> 
								 <option value="1">1</option>
								 <option value="2">2</option>
								 <option value="3">3</option>
								 <option value="4">4</option>
								 <option value="5">5</option>
								 <option value="6">6</option>
								 <option value="7">7</option>
								 <option value="8">8</option>
								 <option value="9">9</option>
								 <option value="10">10</option>
								 <option value="11">11</option>
								 <option value="12">12</option>
						   
							</select>
							<select name="Year" >
								 <option value="year">Year</option> 
								 <option value="2018">2018</option>
								 <option value="2019">2019</option>
								 <option value="2020">2020</option>
								 
							</select>
						</div>
						
						<p>Why do I need to provide my date of birth?</p>
					</div>
					
					
					<div class="choose-gender">
						<input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
						<input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
						
						
					</div>
					<input type="file" name="ppic"/>
					<p>By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>
					<input type="submit" value="Regester">
            </form>
				<p>Create a Page for a celebrity, band or business.</p>
			</div>
			
			</div>
			
		</section>
		
		<footer>
		
			<ul class="browsing_better_with_more-languages">
				<li>	<a href="#">	English (UK)	</a>	</li>
				<li>	<a href="#">	বাংলা	</a>	</li>
				<li>	<a href="#">	অসমীয়া	</a>	</li>
				<li>	<a href="#">	हिन्दी	</a>	</li>
				<li>	<a href="#">	नेपाली	</a>	</li>
				<li>	<a href="#">	Bahasa Indonesia	</a>	</li>
				<li>	<a href="#">	العربية	</a>	</li>
				<li>	<a href="#">	中文(简体)	</a>	</li>
				<li>	<a href="#">	Bahasa Melayu	</a>	</li>
				<li>	<a href="#">	Español	</a>	</li>
				<li>	<a href="#">	Português (Brasil)	</a>	</li>
				<li class="box-for-more_languages">	<a href="#">	+	</a>	</li>

			</ul>
			
			<hr/>
			
			<ul class="another-options-for-social">
				
				<li>	<a href="#">	Sign Up	</a>	</li>
				<li>	<a href="#">	Log In	</a>	</li>
				<li>	<a href="#">	Messenger	</a>	</li>
				<li>	<a href="#">	social Lite	</a>	</li>
				<li>	<a href="#">	Mobile	</a>	</li>
				<li>	<a href="#">	Find Friends	</a>	</li>
				<li>	<a href="#">	People	</a>	</li>
				<li>	<a href="#">	Profiles	</a>	</li>
				<li>	<a href="#">	Pages	</a>	</li>
				<li>	<a href="#">	Page categories	</a>	</li>
				<li>	<a href="#">	Places	</a>	</li>
				<li>	<a href="#">	Games	</a>	</li>
				<li>	<a href="#">	Locations	</a>	</li>
				<li>	<a href="#">	Marketplace	</a>	</li>
				<li>	<a href="#">	Groups	</a>	</li>
				<li>	<a href="#">	Instagram	</a>	</li>
				<li>	<a href="#">	Local	</a>	</li>
				<li>	<a href="#">	Fundraisers	</a>	</li>
				<li>	<a href="#">	About	</a>	</li>
				<li>	<a href="#">	Create ad	</a>	</li>
				<li>	<a href="#">	Create Page	</a>	</li>
				<li>	<a href="#">	Developers	</a>	</li>
				<li>	<a href="#">	Careers	</a>	</li>
				<li>	<a href="#">	Privacy	</a>	</li>
				<li>	<a href="#">	Cookies	</a>	</li>
				<li>	<a href="#">	AdChoices	</a>	</li>
				<li>	<a href="#">	Terms	</a>	</li>
				<li>	<a href="#">	Account security	</a>	</li>
				<li>	<a href="#">	Login help	</a>	</li>
				<li>	<a href="#">	Help	</a>	</li>

				
			</ul>
			
			<p>social © 2019</p>
		</footer>
		
		
		
		
	</body>
</html>








