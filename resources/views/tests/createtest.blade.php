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

					<form action="">
						<div class="container12">
						<div class="column3">.</div>
							<div class="column6">
								<input type="text" placeholder="Search">
							</div>
						</div>
					</form>
			</section><!--******************** header section end ********************-->

			<div class="top_divider"><img src="imgs/top_divider.png" alt=""></div>

			<section class="create-test">
				<div class="container12">
					<div class="column12">
						<p>Create Quiz</p>
						<div class="content">
				{!!Form::open((array('action' => 'TestController@create')))!!}
							<div class="input-part">
									<span>1-  </span><span><input type="text" name="q1"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type1" ><input type="text" name="text1"></input>
								<input type="radio" name="type1" ><input type="text"name="text2"></input>
								<input type="radio" name="type1" ><input type="text"name="text3"></input>
								<input type="radio" name="type1" ><input type="text" name="c1"></input>
							</div>
							<div class="input-part">
									<span>2-  </span><span><input type="text" name="q2"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type2" ><input type="text" name="text4"></input>
								<input type="radio" name="type2" ><input type="text" name="text5"></input>
								<input type="radio" name="type2" ><input type="text" name="text6"></input>
								<input type="radio" name="type1" ><input type="text" name="c2"></input>
							</div>
							<div class="input-part">
									<span>3-  </span><span><input type="text" name="q3"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type3" ><input type="text" name="text7"></input>
								<input type="radio" name="type3" ><input type="text" name="text8"></input>
								<input type="radio" name="type3" ><input type="text" name="text9"></input>
								<input type="radio" name="type1" ><input type="text" name="c3"></input>
							</div>
							<div class="input-part">
									<span>4-  </span><span><input type="text" name="q4"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type4" ><input type="text" name="text10"></input>
								<input type="radio" name="type4" ><input type="text" name="text11"></input>
								<input type="radio" name="type4" ><input type="text" name="text12"></input>
								<input type="radio" name="type1" ><input type="text" name="c4"></input>
							</div>
							<div class="input-part">
									<span>5-  </span><span><input type="text" name="q5"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type5" ><input type="text" name="text13"></input>
								<input type="radio" name="type5" ><input type="text" name="text14"></input>
								<input type="radio" name="type5" ><input type="text" name="text15"></input>
								<input type="radio" name="type1" ><input type="text" name="c5"></input>
							</div>
							<div class="input-part">
									<span>6-  </span><span><input type="text" name="q6"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type6" ><input type="text" name="text16"></input>
								<input type="radio" name="type6" ><input type="text" name="text17"></input>
								<input type="radio" name="type6" ><input type="text"name="text18"></input>
								<input type="radio" name="type1" ><input type="text" name="c6"></input>
							</div>
							<div class="input-part">
									<span>7-  </span><span><input type="text" name="q7"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type7" ><input type="text" name="text19"></input>
								<input type="radio" name="type7" ><input type="text" name="text20"></input>
								<input type="radio" name="type7" ><input type="text" name="text21"></input>
								<input type="radio" name="type1" ><input type="text" name="c7"></input>
							</div>
							<div class="input-part">
									<span>8-  </span><span><input type="text" name="q8"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type8" ><input type="text" name="text22"></input>
								<input type="radio" name="type8" ><input type="text" name="text23"></input>
								<input type="radio" name="type8" ><input type="text" name="text24"></input>
								<input type="radio" name="type1" ><input type="text" name="c8"></input>
							</div>
							<div class="input-part">
									<span>9-  </span><span><input type="text" name="q9"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type9" ><input type="text" name="text25"></input>
								<input type="radio" name="type9" ><input type="text" name="text26"></input>
								<input type="radio" name="type9" ><input type="text" name="text27"></input>
								<input type="radio" name="type1" ><input type="text" name="c9"></input>
							</div>
							<div class="input-part">
									<span>10-</span><span><input type="text" name="q10"></span>
							</div>
							<div class="radios">
								<input type="radio" name="type10" ><input type="text" name="text28"></input>
								<input type="radio" name="type10" ><input type="text"name="text29"></input>
								<input type="radio" name="type10" ><input type="text"name="text30"></input>
								<input type="radio" name="type1" ><input type="text" name="c10"></input>
							</div>
							<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
							<input type="submit" name="submit" value="Submit" />
							<button type="submit">add Question</button>
							{!!Form::close()!!}
						</div>
					</div>
				</div>
			</section>
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

