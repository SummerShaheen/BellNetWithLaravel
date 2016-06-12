<html>
	<head>
		<title>Bellnet | Add Course</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="shortcut icon" href="icon.ico">

		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" href="icomoon/style.css">
		<link rel="stylesheet" href="css/1140.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/navbar-style.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/viewuser,admin.css">
	</head>


	<body>

		<section class="header2" id="header">
					<br>
					<ul class="menu">
						<a class="scroll" href="index.html"><li>Home</li></a>
						<a class="scroll" href="#courses"><li>Courses</li></a>
						<a class="scroll" href="#services"><li>Services</li></a>
						<a class="scroll" id="image" href="indes.html"><li><img src="imgs/logo.png" alt=""></li></a>
						<a class="scroll" href="#tools"><li>Tools</li></a>
						<a class="scroll" href="#about"><li>About</li></a>
						<a class="scroll" href="#contact"><li>Contact Us</li></a>
					</ul>

					<form action="">
						<div class="container12">
							<div class="prefix3 column6">
								<input type="text" placeholder="Search">
							</div>
						</div>
					</form>
					</section><!--******************** header section end ********************-->

                       <div class="top_divider"><img src="imgs/top_divider.png" alt=""></div>

		<section class="course-data">
			<div class="container12">
				<div class="column12">
					<div class="inner-data">
						<h1>Course Details</h1>

						{!!Form::open((array('action' => 'ScheduleController@create_content')))!!}
							<table class="details">
							<tr>
								<td><p>Course Name : </p></td>
								<td><input type="text"  name="name" placeholder=" Enter Course Name ........"></td>
							</tr>
							<tr>
								<td><p>Time Of Course : </p></td>
								<td><input type="text"  name="time" placeholder=" Enter Course time in 24 hour formula ........"></td>
							</tr>
							<tr>
								<td><p>Course ID : </p></td>
								<td><input type="text" name="id" placeholder=" Enter Course ID ........"></td>

							</tr>
							<tr>
								<td><p>Start Date : </p></td>
								<td><input type="text" name="start" placeholder=" Select date ...."></td>

							</tr>
							<tr>
								<td><p>End Date : </p></td>
								<td><input type="text" name="end" placeholder=" Select date ...."></td>

							</tr>
							<tr>
							<td></td>
							<td><input type="submit" name="submit" value="submit" /></td>
							</tr>


						</table>
						{!!Form::close()!!}


					</div>
				</div>
			</div>
		</section>

		<br><br><br><br><br><br><br><br><br><br>

		<section class="footer2">
					<br><br><br><br>
						<div class="container12">
							<div class=" omega alpha column3">
								<div class="leftpart">
									<h4>E-LEARNING</h4>
									<br><br>
									<span class="s1">Courses</span>&nbsp;&nbsp;
									<span class="s1">Tests</span>&nbsp;&nbsp;
									<span class="s1">Live Classes</span>
									<br><br><br>
									<br>
								</div><!-- **************** End leftpart *********** -->

							</div><!-- **************** End column3 *********** -->

							<div class="column9">
								<div class="social">
									<h4>FOLLOW US</h4>
									<a href="https://www.facebook.com/Bellnet-439526066243636/?fref=ts"><span title="facebook" class="icon-facebook"></span></a>
									<a href="https://twitter.com/Bellnet_edu"><span title="twitter" class="icon-twitter"></span></a>
									<a href="https://www.linkedin.com/in/bell-net-24437a119?trk=hp-identity-name"><span title="linkedin" class="icon-linkedin2"></span></a>
									<a href="https://www.pinterest.com/bellnet/"><span title="pinterest" class="icon-pinterest22"></span></a>
									<a href="https://plus.google.com/u/0/103964860171255088807/posts"><span title="googleplus" class="icon-googleplus"></span></a>
									<a href="https://www.instagram.com/bellnet_educational_website_/"><span title="instagram" class="icon-instagram3"></span></a>
									<a href="#"><span title="youtube" class="icon-youtube"></span></a>
								</div>
							</div>
						</div>
						<hr>
						<p>© Bellnet 2016, All Rights Reserved.</p>
					</section>


					<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
					<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

					<script type="text/javascript">
						$('#myTabs a[href="#profile"]').tab('show') // Select tab by name
						$('#myTabs a:first').tab('show') // Select first tab
						$('#myTabs a:last').tab('show') // Select last tab
						$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
					</script>
	</body>
</html>

