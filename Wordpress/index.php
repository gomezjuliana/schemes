<!DOCTYPE html>
<?php
get_header();
?>

<!--START HEADER SECTION-->
<header>
	<nav class="nav-bar">
	<div class="nav-bar__hamburger">
		<p>MENU</p>
		<i class="fa fa-bars fa-4" aria-hidden="true"></i>
	</div>
	<ul class="nav-bar__menu">
		<li class="nav-bar__menu--link">About</li>
		<li class="nav-bar__menu--link">Contact</li>
	</ul>
	</nav>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	    <div class="carousel-shadow"></div>
	      <img class="d-block" src="https://static.pexels.com/photos/51387/mount-everest-himalayas-nuptse-lhotse-51387.jpeg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <div class="carousel-shadow"></div>
	      <img class="d-block" src="https://static.pexels.com/photos/51387/mount-everest-himalayas-nuptse-lhotse-51387.jpeg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <div class="carousel-shadow"></div>
	      <img class="d-block" src="https://static.pexels.com/photos/51387/mount-everest-himalayas-nuptse-lhotse-51387.jpeg" alt="First slide">
	    </div>
	    
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="header__container mx-auto text-center">
		<hgroup>
			<h1>One Page</h1>
			<h2>Multi-purpose theme</h2>
		</hgroup>
		<div class="header__cta">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt</p>
			<button type="button" class="btn btn-outline-light">Get Started</button>
		</div>
		<div class="header__carousel"></div>
	</div>
</header>
<!--END OF HEADER-->

<!--START ABOUT SECTION-->
<section class="about">
	<hgroup class="text-center">
		<h5>Some of our accomplishments</h5>
		<h3>About Us</h3>
		<span class="line"></span><i class="fa fa-star" aria-hidden="true"></i><span class="line"></span>
	</hgroup>
	<div>
		<div class="text-center about-right">
			<div class="about__briefcase-shadow">
				<i class="fa fa-briefcase" aria-hidden="true"></i>
			</div>
			<h6>Aug 2016</h6>
			<p>"Lorem ipsum"</p>
			<span class="line"></span><i class="fa fa-chevron-right" aria-hidden="true"></i>
		</div>
		<div class="about-left">
			<h6>Investment deal inked - pulsar media stock skyrocket.</h6>
			<span></span>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et lore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <br><br>
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</section>
<!--END OF ABOUT SECTION-->

<!--START OF CONTACT SECTION-->
<section class="contact">
	<div class="padding-30">
		<hgroup class="text-center">
			<h5>Have a question?</h5>
			<h3>Contact Us</h3>
			<span class="line"></span><i class="fa fa-star" aria-hidden="true"></i><span class="line"></span>
		</hgroup>
		<div class="container">
		  	<div class="row">
		    	<div class="col-sm-12 col-md-4 text-center">
		      		<i class="fa fa-map-marker" aria-hidden="true"></i>
					<p>1 Dundas St. West, Toronto Canada</p>
		    	</div>
		    	<div class="col-sm-12 col-md-4 text-center">
		     		<i class="fa fa-phone" aria-hidden="true"></i>
					<p>1-888-555--5544</p>
		    	</div>
		    	<div class="col-sm-12 col-md-4 text-center">
		    		<i class="fa fa-envelope" aria-hidden="true"></i>
					<p>info@hello.com</p>
		    	</div>
		  	</div>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15863.993627623142!2d-75.5684253!3d6.263938199999999!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sco!4v1503427173932" width="100%"" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	<form class="text-center padding-30">
		<div class="form__left">
			<input type="text" name="fname" placeholder="First Name *">
			<input type="text" name="email" placeholder="Email Address *">
		</div>
		<div class="form__right">
			<input type="text" name="lname" placeholder="Last Name *">
			<input type="text" name="phone" placeholder="Phone Number">
		</div>
		<div>
			<textarea id="message">Message *</textarea>
		</div>
		<button type="button" class="btn">Submit</button>
	</form>
</section>
<!--END OF CONTACT SECTION-->


<?php
get_footer();
?>