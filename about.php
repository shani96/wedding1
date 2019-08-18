<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer | About Page</title>
	
	<?php include('head.php'); ?>

</head>

<body>

	<?php include('header.php'); ?>

 <!-- inner banner -->
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h2 class="text-center text-white">
                    About Page
                </h2>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->


<!-- about -->
<section class="about py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Who We Are</h3>
		<div class="row about-grids">
			<div class="col-lg-6">
				<h4>We are committed to service excellence and quality on wedding & events</h4>
				<p class="mb-3">Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictu lacinia, nislen est posuere nulla,
				nec egestas leo miid sed lorem. Maecenas sem nulla. Maecenas risus enim, pharetra accumsan nulla vitae, mollis hendrerit orci.
				Pellentesque nec purus eurts tortor molestie fringilla ut sit amet mauris. Maecenas mattis eleifend lacus non condimentum. Elit
				Donec fringilla nisi risus.</p>
				<p>Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictu lacinia, nislen est posuere nulla,
				nec egestas leo mid.</p>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<img src="images/who.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- contact query -->
<section class="query">
	<div class="wthree-different-dot1 py-5">
		<div class="container py-sm-3">
			<div class="row query-grids">
				<div class="col-lg-5">
					<h4 class="mb-3">Find Your Style</h4>
					<p class="mb-3">Find Your style as you need. we are providing wide range of services, like Wedding planning, Decorating & Catering, Braidal Makeup & Mehandi, Wedding Photography & Videography, DJ as well as Wedding Cards. We are also providing any type service occantional events.</p>
					<a href="contact.php">Contact and Inquiry </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //contact query -->

<!-- subscribe -->
<section class="subscribe text-center bg-light py-5">
	<div class="container p-sm-3">
		<h3 class="heading mb-2"> Subscribe Newsletter </h3>
		<p class="mb-5">Signup and recieve 15% on your First Plan.</p>
		<form action="#" method="post">
			<input class="form-control" type="email" placeholder="Your Email Address" name="Subscribe" required="">
			<button class="btn1">
				<span class="fa fa-paper-plane"></span>
			</button>
		</form>
	</div>
</section>
<!-- //subscribe -->

<?php include('footer.php'); ?>

<?php // include('login-reg.php'); ?>

</body>
</html>