<!DOCTYPE html>
<html>
	<head>
		<title>Bellnet | Online test</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="shortcut icon" href="icon.ico">

		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" href="icomoon/style.css">
		<link rel="stylesheet" href="css/1140.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
				<!--******************** header section start ********************-->
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

		{!!Form::open((array('action' => 'TestController@resulttest')))!!}
						<div class="container12">
						<div class="column3">.</div>
							<div class="column6">
								<input type="text" placeholder="Search">
							</div>
						</div>

			</section><!--******************** header section end ********************-->

			<div class="top_divider"><img src="imgs/top_divider.png" alt=""></div>

			<section class="test-form">
				<div class="container12">
					<div class="column12">
						<p>Quiz</p>
						<div class="content">
							<div class="title">



               @foreach($test as $t)

									<h4>- {!!$t->qustion!!}?</h4>

							</div>

							<div class="radios">
							{!!Form::hidden('status','0')!!}
								<input type="radio" name="{!!$t->id!!}" value="{!!$t->chooseone!!}">{!!$t->chooseone!!}
								<input type="radio" name="{!!$t->id!!}" value="{!!$t->choosetwo!!}">{!!$t->choosetwo!!}
								<input type="radio" name="{!!$t->id!!}" value="{!!$t->choosethree!!}">{!!$t->choosethree!!}
							</div>





							<div class="title">
							@endforeach
									<br><br>

	<input type="submit" name="submit" value="submit" />
							<div class="no-float"></div>

						</div>
					</div>
				</div>
			</section>
				{!!Form::close()!!}
			<br><br><br>


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

	</body>
</html>

