<?php require_once('connect.php');?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
		<title>UPLB OSA</title>
		<meta name="description" content="UPLB Office of Student Affairs"/>
		<meta name="keywords" content="uplb, osa, uplbosa" />
		<meta name="author" content="OSA-COMMIT:CIA" />
		<link rel="stylesheet" type="text/css" href="css/osam.css">
		<link rel="stylesheet" type="text/css" href="css/help.css">
		<script type="text/javascript" src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
	</head>
	<body>
		<div id="container" class="container" >
			<div class="content">
				<header class="header content-header">
					<div class="header-component">
						<div class="header-image">
							<img src="img/osam-logo.png" />
						</div>
						<span id="header-minor">University of the Philippines Los Ba&ntilde;os</span>
						<span id="header-major">Office of Student Affairs</span>
					</div>
				</header>
				<div class="content-inner">
					<section id="content-drawer" class="header content-drawer">
						<div id="content-login" class="content-login" >
							<div class="login-component">
								<div class="component component-part1">
									<form id="login-form" action="">
										<input type="text" name="uname" id="login-uname" class="login-uname" placeholder="Username" focus/>
										<input type="password" name="pword" id="login-pword" class="login-pword" placeholder="Password"/>
										<input type="submit" name="submit" value="Submit" id="login-submit" class="login-submit" />
									</form>
								</div>
								<div class="component component-part2">
									<div class="alt-button"><a href="">Alternate Login</a></div>
									<div class="crt-button"><a href="">Create Account</a></div>
								</div>
							</div>
							<div class="login-icon">
								<svg width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 300 100">
									<defs>
										<filter id="svg-shadow" x="0" y="0" width="200%" height="200%" >
											<feOffset result="offset" in="SourceAlpha" dx="0" dy="5" />
											<feGaussianBlur result="shadow" in="offset" stdDeviation="10" />
											<feComponentTransfer>
												<feFuncA type="linear" slope="0.5" />
											</feComponentTransfer>
											<feMerge>
												<feMergeNode />
												<feMergeNode in="SourceGraphic"/>
											</feMerge>
										</filter>
									</defs>
									<path fill="#222" d="M 0 0 L 0 29 C 120 30 200 70 300 35 L 300 0 Z" filter="url(#svg-shadow)"/>
									<!-- <path fill="#222" d="M 0 0 L 0 35 C 100 70 180 5 300 5 L 300 0 Z" filter="url(#svg-shadow)"/> -->
									<!-- <path class="" fill="#222" d="M 0 0 L 0 5 L 5 5 C 200 10 350 80 600 70 Q 750 65 850 40 L 850 0 Z" filter="url(#svg-shadow)"/> -->
								</svg>
								<div id="login-button">Login</div>
							</div>
						</div>
						<div id="content-des" class="content-des">
							<div class="des-filler">

							</div>
							<div class="des">
								<svg id="des-svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 850 100">
									<def>
										<filter id="svg-shadow" x="0" y="0" width="200%" height="200%" >
											<feOffset result="offset" in="SourceAlpha" dx="0" dy="5" />
											<feGaussianBlur result="shadow" in="offset" stdDeviation="10" />
											<feComponentTransfer>
												<feFuncA type="linear" slope="0.5" />
											</feComponentTransfer>
											<feMerge>
												<feMergeNode />
												<feMergeNode in="SourceGraphic"/>
											</feMerge>
										</filter>
									</def>
									<path class="" fill="#222" d="M 850 0 L 850 35 L 845 35 C 650 30 500 80 250 70 Q 100 65 0 40 L 0 0 Z" filter="url(#svg-shadow)"/>									
									<!-- <path class="" fill="#222" d="M 0 0 L 0 5 L 5 5 C 200 10 350 80 600 70 Q 750 65 850 40 L 850 0 Z" filter="url(#svg-shadow)"/>									 -->
									<!-- <path fill="#222" d="M 0 0 L 0 35 C 100 70 180 5 300 5 L 300 0 Z" filter="url(#svg-shadow)"/> -->
								</svg>
							</div>
						</div>
					</section>
					<section id="content-menu" class="content-menu">
						<nav id="menu-wrapper" class="menu-component menu-wrapper">
							<button class="menu-trigger">Menu</button>
							<ul class="menu menu-toggle clearfix">
								<li><a href=""><div class="menu-item">Home</div></a></li>
								<li>
									<a href=""><div class="menu-item">Student Orgs</div><div class="icon-next"></div></a>
									<ul class="submenu">
										<li><a href=""><div class="menu-subitem">Recognized Orgs</div></a></li>
										<li><a href=""><div class="menu-subitem">Reminders</div></a></li>
										<li><a href=""><div class="menu-subitem">Recognition Guidelines</div></a></li>
										<li><a href=""><div class="menu-subitem">Application for Recognition</div></a></li>
										<li><a href=""><div class="menu-subitem">Mailing List</div></a></li>
									</ul>
								</li>
								<li><a href=""><div class="menu-item">Scholarship</div></a></li>
								<li><a href=""><div class="menu-item">OSA Staff</div></a></li>
								<li><a href=""><div class="menu-item">Help</div></a></li>
							</ul>
						</nav>
					</section>

					<div id="content-box" class="content-box clearfix">
						<section id="header-help">
							<img src="img/help/help-logo.png" id="help-logo">
							<h1>OSAM Help Desk</h1>
						</section>
						<div class="help-container">
							<section id="help-notif">
								<p>Success! Reply will be sent to your email</p>
							</section>
							<p class="other-info"> Please fill in the form below.	</p>
							<?php session_start();
								include_once('connect.php');
							?>
							<?php
								if(!empty($_SESSION['username'])){
									$username = $_SESSION['username'];
									$sql = "SELECT firstname, lastname, email FROM students WHERE studentno='$username'";
									$result = mysql_query($sql);
									$count = mysql_num_rows($result);
									if($count == 1){
										$row = mysql_fetch_array($result);
									}
								}
								else{
									$notlog = true;
								}
							?>
							<form action="addTicket.php" method="post">
								<table>
									<tr>
										<td> * Firstname :
											<input type="text" name="firstname" id="firstname" value="<?php if(isset($username)) echo $row['firstname']?>"required />
										</td>
										<td> * Lastname :
											<input type="text" name="lastname" id="lastname" value="<?php if(isset($username)) echo $row['lastname']?>" required />
										</td>
									</tr>
									<tr>
										<td>* Email : 
										<input type="email" name="email" id="user-email" value="<?php if(isset($username)) echo $row['email']?>" required /></td>
									</tr>
									<tr>
										<td>* Type:
												<select name="type">
													<option value="inquiry">Inquiry</option>
													<option value="feedback">Feedback</option>
												</select>
										</td>
									</tr>
									<tr>	
										<td>* Subject:
											<input type="text" name="subject" id="subject" required />
										</td>
									</tr>
									<tr>
										<td>
											Division:
												<select id="division" name="division">
													<option value="COMMIT">Communications and Information and Technology (COMMIT)</option>
													<option value="CTD">Counseling and Testing Division (CTD)</option>
													<option value="DO">Director's Office (DO)</option>
													<option value="ISS">International Students Section (ISS)</option>
													<option value="SFAD">Scholarships and Financial Assistance Division (SFAD)</option>
													<option value="SDT">Student Disciplinary Tribunal (SDT)</option>
													<option value="SOAD">Student Organizations and Activities Division (SOAD)</option>
												</select>
										</td>
										<td>
											Tags:
												<select multiple id="tags" name="tags">
													<option value="assistanship">Assistanship</option>
													<option value="osam account">OSAM Account</option>
													<option value="sts">STS</option>
													<option value="slb">SLB</option>
													<option value="clearance">Clearance</option>
												</select>
										</td>
									</tr>
									<tr>
										<td>
											* Description:
												<textarea name="description" id="concern-description" placeholder="Type the details of your concern here..." required></textarea>
										</td>
									</tr>	
								</table>
								<p class="other-info"> * Required fields</p>
								<input type="reset" value="Reset" id="reset-help" />
								<input type="submit" value="Submit" id="submit-help" onclick="submit_func"/>
							</form>
						</div>						
					</div>

					<footer>
						<div class="footer-svg">
							<svg width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1200 80">
								<path id="f-svg" fill="#222" d="M 0 80 L 0 5 L 355 5 C 550 10 700 65 950 60 Q 1100 55 1200 35 L 1200 100 Z" />
							</svg>
						</div>
						<div class="footer-content">
							<div class="content1">
								<div class="title">About OSA</div>
								<div class="text">
									<p>
										The OSA, under the leadership of Dr. Leticia E. Afuang, envisions itself as a team of excellent service providers producing empowered UPLB students. Its mission is to provide an environment which is conducive and supportive of the studentÂ’s academic needs and personality growth and development.
									</p>
									<a href="">Read more...</a>
								</div>
							</div>
							<div class="content2">
								<div class="title">About OSAM</div>
								<div class="text">
									<p>
										The Office of Student Affairs Management (OSAM) System is an ongoing modernization project at OSA. The OSAM System will help OSA keep up to date with industry standards. OSA is taking advantage of the benefits of Information Technology to promote students' academic growth and personal development.
									</p>
									<a href="">Read more...</a>
								</div>
							</div>
							<div class="content3">
								<div class="title">Need Help? Get in touch with OSA.</div>
								<div class="text">
									<p>
										<div class="office do">
											<div class="name">Director's Office (DO)</div>
											<span class="room">Room 12b</span>
											<span class="telnum">536-2238</span>
											<span class="email">do@uplbosa.org</span>
										</div>
										<div class="office commit">
											<div class="name">Communications and Information Technology (COMMIT)</div>
											<span class="room">Room 12b</span>
											<span class="telnum">536-2238</span>
											<span class="email">do@uplbosa.org</span>
										</div>
										<div class="office ctd">
											<div class="name">Counseling and Testing Division (CTD)</div>
											<span class="room">Room 9</span>
											<span class="telnum">536-7255</span>
											<span class="email">ctd@uplbosa.org</span>
										</div>
										<div class="office iss">
											<div class="name">International Students Section (ISS)</div>
											<span class="room">Room 4</span>
											<span class="telnum">536-2761</span>
											<span class="email">iss@uplbosa.org</span>
										</div>
										<div class="office sfad">
											<div class="name">Scholarships and Financial Assistance Division (SFAD)</div>
											<span class="room">Room 6</span>
											<span class="telnum">536-3212</span>
											<span class="email">sfad@uplbosa.org</span>
										</div>
										<div class="office sdt">
											<div class="name">Student Disciplinary Tribunal (SDT)</div>
											<span class="room">Room 12a</span>
											<span class="telnum">536-7255</span>
											<span class="email">sdt@uplbosa.org</span>
										</div>
										<div class="office soad">
											<div class="name">Student Organizations and Activities Division (SOAD</div>
											<span class="room">Room 8</span>
											<span class="telnum">536-7132</span>
											<span class="email">soad@uplbosa.org</span>
										</div>
									</p> 		
								</div>
							</div>
							<div class="content-logo">
								<img src="img/osam-logo.png"/>
							</div>
							<div class="content-logo2">
								<img src="img/uplb-logo.png"/>
							</div>
						</div>
					</footer>
				</div>
				<footer id="main-footer">
					<div class="footer-component">
						<div class="footer-text">© 2014 Office of Student Affairs Management (OSAM) System. University of the Philippines Los Baños.</div>
					</div>
				</footer>
			</div>
		</div>
		<script>
			$(function() {
				$( '#menu-wrapper' ).dlmenu();
			});
			window.home = true;
		</script>
		<script type="text/javascript" src="js/all.min.js"></script>
		<script type="text/javascript" src="js/help.js"></script>
	</body>
</html>