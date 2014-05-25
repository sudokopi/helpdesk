<?php require_once('header.html');
	  require_once('connect.php');
	  session_start();
	  if(!isset($_SESSION['username'])){
	  	echo "<form id='login-form' action='login.php' method='post'>";
		echo "<input type='text' name='uname' id='login-uname' class='login-uname' placeholder='Username' focus/>";
		echo "<input type='password' name='pword' id='login-pword' class='login-pword' placeholder='Password'/>";
		echo "<input type='submit' name='submit' value='Submit' id='login-submit' class='login-submit' />";
		echo "</form>";
		echo "</div>";
		echo "<div class='component component-part2'>";
		echo "<div class='alt-button'><a href=''>Alternate Login</a></div>";
		echo "<div class='crt-button'><a href=''>Create Account</a></div>";
		echo "</div>";
	  }
	  else{
	  	echo "<div class='login-picture'>";
		echo "<img src='img/content/sample.jpg'/>";
		echo "</div>";
		echo "<div class='login-info'>";
		echo "<h3>".$_SESSION['fname']."</h3>";
		echo "</div>";
		echo "</div>";
		echo "<div class='component component-part2'>";
		echo "<div class='lgo-button'><a href='logout.php'>Log Out</a></div>";
		echo "</div>";
	  }
?>
								
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
								<?php
									if(!isset($_SESSION['username'])){
										echo 	"<div id='login-button'>Login</div>";
									}
									else{
										echo "<div id='login-button'>Hi ".$_SESSION['fname']."</div>";
									}
								?>
							
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

			<div id="content-box" class="content-box clearfix">
				<section id="header-help">
					<img src="img/help/help-logo.png" id="help-logo">
					<h1>OSAM Help Desk</h1>
				</section>	
				<div id="help-tab">
					<nav>
						<ul>
							<li>Tickets</li>
							<li>Knowledgebase</li>
						</ul>
					</nav>
					<div id= "help-tab-content">
						<section="ticket-content">
							
						</section>
						<section ="faq-content">
						</section>
					</div>
				</div>
			</div>
<?php	
	require_once('close.php');
	require_once('footer.html'); 
?>