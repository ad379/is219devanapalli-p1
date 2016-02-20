<!--
to do list:
1.change tab header
2.fill in about me
3.fill in education
4.fill in interets
5.fill in work experience
6.contact info
7.get submit button working
-->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Ashish Devanapalli</title>
	<meta name="description" contetn="Personal Webpage">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>

	<style type="text/css">
	body{
		padding-top: 40px;
	}
	</style>
<body data-spy="scroll" data-target="#my-navbar">
	
	<!-- Navigation Bar-->
		<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a href="" class="navbar-brand">My HomePage</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">

				<!--<a href="" class="btn btn-warning navbar-btn navbar-right">Resume</a>-->
					<ul class="nav navbar-nav">
						<li><a href="#AboutMe">About Me</a>
						<li><a href="#Education">Education</a>
						<li><a href="#Interests">Interests</a>
						<li><a href="#WorkExperience">Work Experience</a>
						<li><a href="#ContactInformation">Contact Information</a>
					</ul>
				</div>
			</div><!--end container-->
		</nav><!-- end navigation-->

		<!-- jumbotron-->

		<div class="jumbotron">
			<div class="container text-center">
				<h1><font color="orange" face="Comic sans MS">Ashish Devanapalli's Personal Page</font></h1>
				<p>A little bit about myself and my interests</p>

				<!--<div class=btn-group"">
					<a href="" class="btn btn-lg btn-warning">Makes Button</a>
				</div>-->
			</div><!-- end container-->
		</div><!-- end jumbotron-->

		<div class="container"><!--Start of about me-->
			<section>
				<div class="page-header" id="AboutMe">
					<h2><font color="orange"><strong>About Me</strong></font></h2>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<h3>Hello!</h3>
						<p>Welcome to my site! My name is Ashish Devanapalli and here you will get to know a little bit about me and my interests. Some background, I was born in India and lived their for about six years before immigrating to Canada. Specifically I lived in St. Laureant, Montreal for another six years before moving here to the US. Because of this I speak 2 languanges fluently: English and Telugu and understand and communicate basic thoughts in French and Hindi. Moving around a lot has taught me how to be flexible and quick in accilimating to new places and people. Some of my hobbies include reading, playing soccer and ultimate frisbee and video games. I am also a huge comics fan and and thrilled whenever a new Marvel's or DC movie or show comes out!</p>
					</div>

				</div>
			</section>
		</div>	

		<div class="container"><!--Section with Education-->
			<section>
				<div class="page-header" id="Education">
					<h2><font color="orange"><strong>Education</strong></font></h2>
				</div>

				<div class="row">
					<div class="col-md-6">
						<blockquote>
							<p>
								<strong>College:</strong> New Jersey Institute of Technology</br>
								<strong>Major:</strong> Bachelor's in Computer Computer Science</br>
								<strong>Location:</strong> Newark, New Jersey</br>
								<strong>Years Attended:</strong> 2013-Present</br>
							</p>
						</blockquote>						
					</div>					

					<div class="col-md-6">
						<blockquote>
							<p>
								<strong>Highschool:</strong> Bergen County Academies</br>
								<strong>Location:</strong> Hackensack, New Jersey</br>
								<strong>Years Attended:</strong> 2009-2013</br>
							</p>
						</blockquote>						
					</div>

				</div>
			</section>
		</div><!-- end container-->

		<div class="container"><!--Start of interests-->
			<section>
				<div class="page-header" id="Interests">
					<h2><font color="orange"><strong>Interests</strong></font></h2>
				</div>

				<div class="row">
					<div class="col-sm-8">
						<h3>Computers and Programming</h3>
						<p>I really enjoy computers and programming in general. I have always had an interest in mathematics but it was not until highschool, where I took some elective class in java and html that I found my interest in programming. I enjoy the thrill you feel when you finally get that last bug working and the entire code finally falls into place and gives you the answer or output you were looking for!</p>
					</div>
					<div class="col-sm-4">
						<img src="comp.jpg" class="img-responsive" alt="image">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-8">
						<h3>Teaching</h3>
						<p>I have been working with children in some form of manner since I was in middle school, whether it is tutoring or at a camp. It started with a job at KUMON, and afterschool enrichment program for k-12 kids. From there, I speced out to personal tutoring and summer camps at my highchool for prospective kids. I enjoy working with children. i pride myself on have the patience to work with a child till he understands or acheives the task at hand and for having the creativity needed to tailor a method of teaching for each child.</p>
					</div>
					<div class="col-sm-4">
						<img src="teacher.jpg" class="img-responsive" alt="image">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-8">
						<h3>Medecine</h3>
						<p>I originally joined NJIT as part of a seven-year joint medcial program with St.Georges Medical School. And so I still have an interest in the human body. I have countless volunteer and intership hours in hospitals working with nurses and doctors. But now I wish to combine that interest with my new major. This is extermely possible with how much data comes out of hospitals and the current poor state in which it is handled.</p>
					</div>
					<div class="col-sm-4">
						<img src="medecine.png" class="img-responsive" alt="image">
					</div>
				</div>

			</section>
		</div>

		<div class="container"><!--start of work experience-->
			<section>
				<div class="page-header" id="WorkExperience"> <!--start of carousel-->
					<h2><font color="orange"><strong>Work Experience</strong></font></h2>
				</div>

				<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#screenshot-carousel" data-slide-to="1"></li>
						<li data-target="#screenshot-carousel" data-slide-to="2"></li>
						<li data-target="#screenshot-carousel" data-slide-to="3"></li>
						<li data-target="#screenshot-carousel" data-slide-to="4"></li>
						<li data-target="#screenshot-carousel" data-slide-to="5"></li>
						<li data-target="#screenshot-carousel" data-slide-to="6"></li>
						<li data-target="#screenshot-carousel" data-slide-to="7"></li>
						<li data-target="#screenshot-carousel" data-slide-to="8"></li>
						<li data-target="#screenshot-carousel" data-slide-to="9"></li>
						<li data-target="#screenshot-carousel" data-slide-to="10"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="ramapo.PNG" alt="text of the image">
						</div>

						<div class="item">
							<img src="library.PNG" alt="text of the image">
						</div>

						<div class="item">
							<img src="brain.PNG" alt="text of the image">
						</div>

						<div class="item">
							<img src="valley.PNG" alt="text of the image">
						</div>

						<div class="item">
							<img src="ecamp.PNG" alt="text of the image">
						</div>

						<div class="item">
							<img src="academy.PNG" alt="text of the image">
						</div>

						<div class="item">
							<img src="kumon.PNG" alt="text of the image">
						</div>

						<div class="item">
							<img src="math.PNG" alt="text of the image">
						</div>

						<div class="item">
							<img src="karate.PNG" alt="text of the image">
						</div>

						<div class="item">
							<img src="tutor.PNG" alt="text of the image">
						</div>


					</div>
					<a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div><!--end of carousel-->
			</section>
		</div><!--end of work experience-->

		<div class="container"><!--Section with Contact Info-->
			<section>
				<div class="page-header" id="ContactInformation">
					<h2><font color="orange"><strong>Contact Information</strong></font></h2>
				</div>

				<div class="row">
					<div class="col-lg-4">
							<p>Send me a message or contact me with the following information</p>
							<address>
								<strong>Ashish Devanapalli</strong></br>
								30-06 Berkshire Road</br>
								Fair Lawn, New Jersey</br>
								07410</br>
								P: 201 7912172</br>
								Email: ashd65@gmail.com
							</address>						
					</div>
					<div class="col-lg-8">
						<form action="form-horizontal">
							<div class="form-group">
								<label for="user-name" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="user-name" placeholder="Enter your name">
								</div>
							</div>

							<div class="form-group">
								<label for="user-email" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="user-email" placeholder="Enter your email address">
								</div>
							</div>

							<div class="form-group">
								<label for="user-message" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea name="user-message" id="user-message" class="form-control" cols="20" rows="10" placeholder="Enter your message"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button type="submit" class="btn btn-warning">Submit</button>
								</div>	
							</div>

						</form>						
					</div>
				</div>
			</section>
		</div><!-- end container-->


		<footer>
			<hr><!--end message-->
				<div class="well">
					<div class="container text-center">
						<h3> Thank you for checking me out!</h3>
						<p>And feel free to contact me with any opportunities!</p>
					</div>
				</div><!--end of well-->
		</footer>
		



<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>