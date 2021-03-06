<?php
$failure = false;
$success= false;
require_once "pdo.php";
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['country']) && isset($_POST['Subject']))
{
	 if ( strlen($_POST['firstname']) < 1 || strlen($_POST['lastname']) <1 || strlen($_POST['country']) <1 || strlen($_POST['subject'] <1))
	 {
	  $failure="Enter all the required details inorder to leave a message.";	 	
	 }
     else{

	$sql="INSERT INTO msg(firstname,lastname,country,subject) VALUES (:firstname,:lastname,:country,:subject)";
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(
		':firstname'=> $_POST['firstname'],
	    ':lastname'=> $_POST['lastname'],
	    ':country'=> $_POST['country'],
	    ':subject'=> $_POST['subject']));
	   $success="Thankyou!!";
        }
}
?>
<?php
if ( $failure !== false ) {
    echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
}
?>
<?php
if ( $success !== false ) {
    echo('<p style="color: green;">'.htmlentities($success)."</p>\n");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>G.V.VISHNUPRIYA PORTFOLIO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1>Welcome to my Portfolio</h1>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">About</a></li>
							<li><a href="#first">Skills</a></li>
							<li><a href="#second">Learning</a></li>
							<li><a href="#cta">Contact</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Introduction</h2>
										</header>
										<p>Hi.I am G.V.Vishnupriya.I am currently persuing B.E at Sri Venkateswara College of Engineering specialised in the field of ComputerScience.
										</p>
									</div>
									<span class="image"><img src="images/vishnu1.jpg" alt="" /></span>
								</div>
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Skills</h2>
								</header>
								<ul class="features">
									<li>
										C Programming
									</li>
									<li>
										MySQL
									</li>
									<li>
										PHP
									</li>
									<li>
									    Webdevelopment
									</li>
									<li>
									    Python
									</li>
									<li>
										MachineLearning
									</li>
								</ul>
								</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Learnings</h2>
								</header>
						     <ul>
                             	<li>Attended ImplantTraning on the topic of"Internet Of Things and its application in realtime",held at BharatSancharNigamLimited</li>
                             	<li>Attended the workshops on the topics such as "Cybersecurity","Brain Computer Interface " and "Introduction to Machine Learning".</li>
                             	<p>Along with studies,I have undergone my intership in Ethna Attributes Soft Technologies Pvt Ltd.I worked on project titled,"Parse,Clean and Conversion of SNMP MIB Data FILES".</p>
                             </ul>
							</section>

						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
									<div class="container">
                                    <div style="text-align:center">
                                    <h2>leave a message:</h2>
                                    </div>
                                    <div class="row">
                                    <div class="column">
                                    <img src="images/code.jpg" style="width:100%">
                                    </div>
                                    <div class="column">
                                 <form method="post">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" name="firstname">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" name="lastname">
                                    <label for="country">Country</label>
                                   <select id="country" name="country">
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                    <option value="India">India</option>
                                    <option value="australia">Russia</option>
                                    <option value="australia">China</option>
                                    <option value="australia">Albania</option>
                                    <option value="australia">Morocco</option>
                                   </select>
                                    <label for="subject">Subject</label>
                                    <textarea id="subject" name="subject"style="height:170px"></textarea>
                                    <input type="submit" name="submit" value="Submit">
                                 </form>
                                   </div>
                                    </div>
                                   </div>
								</header>
							</section>
                                 </div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>Contact details</h2>
							<dl class="alt">
								<dt>Phone</dt>
								<dd>6382688402</dd>
								<dt>Email</dt>
								<dd>gvvishnupriya1707@gmail.com</dd>
							</dl>
							<ul class="icons">
								<li><a href="https://twitter.com" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a href="https://facebook.com" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="https://linkedin.com/in/vishnupriya-velmurugan-b689a3164" class="icon brands fa-linkedin alt"><span class="label">LinkedIn</span></a></li>
								<li><a href="https://GitHub.com" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
							</ul>
						</section>
						<p class="copyright">&copy; VishnupriyaVelmurugan.</p>
					</footer>

			</div>

		
	</body>
</html>