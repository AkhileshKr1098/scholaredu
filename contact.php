<!-- for php using send email  -->

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$enquiry = $_POST['enquiry'];
	$message = $_POST['message'];

	$to = 'Scholarcrpark@gmail.com';
	$subject = 'Contact Form Submission';

	$messageBody = "Name: $name\nEmail: $email\nphone: $phone\nenquiry: $enquiry\n message: $message";

	// Send the email
	$success = mail($to, $subject, $messageBody);

	if ($success) {
		echo '<p>Form submitted successfully!</p>';
	} else {
		echo '<p>Form submission failed. Please try again later.</p>';
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact Us: Reach Out for Premier CBSE, NEET, NTSE, and JEE Coaching in Delhi</title>
	<link rel="icon" href="images/logo3 copy.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content="Scholar coaching for CBSE,NEET coaching classes,JEE preparation coaching,NTSE coaching centers,Best
	 coaching for CBSE board,NEET entrance exam coaching Top JEE coaching institutes,NTSE scholarship exam coaching,CBSE 
	 coaching for students,NEET and JEE coaching programs,NTSE exam preparation courses Scholar coaching academy,CBSE board
	 exam coaching,NEET and JEE coaching in near Govindpuri,NTSE scholarship test coaching,Online coaching for CBSE, NEET, 
	 JEE, NTSE,Scholar coaching for competitive exams,CBSE, NEET, JEE, NTSE coaching near me,Affordable coaching for CBSE, NEET, 
	 JEE, NTSE,Expert coaching for science and math subjects" name="keywords">

	<meta content="Have questions or need assistance? Don't hesitate to contact us. We're here to provide you with 
	information and guidance on our top-notch CBSE, NEET, NTSE, and JEE coaching services in Delhi. Reach out today to start 
	your journey toward academic excellence." name="description">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="canonical" href=" https://scholaredu.in/contact" />

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-D189EJY5BH"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-D189EJY5BH');
	</script>
	<meta name="google-site-verification" content="8Tlc0fmQXYvYHJdtQ5lPF_cqsoB4gtRLp4Oivg12iU8" />
</head>

<body>
	<div id="top-bar" class="top-bar bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-8">
					<div class="col-md pr-4 d-flex topper align-items-center">
						<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span
								class="icon-envelope"> </span></div>
						<span class="text">scholarcrpark@gmail.com</span>
					</div>
				</div>

				<div class="col-md pr-4 d-flex topper align-items-center test2" style="text-align: start;">
					<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center icon_phone">
						<span class="icon-phone2"></span>
					</div>
					<span class="text"> 011-35700364, +91-9811082710, +91-9350373400 </span>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center a1">
			<a class="navbar-brand" href="index">
				<img src="images/logo3 copy.jpg">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="index" class="nav-link pl-0">Home</a>
					</li>
					<li class="nav-item">
						<a href="about" class="nav-link">About Us</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Courses</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="cuet">CUET</a></li>
							<li><a href="b.com-ba">B.Com/ B.A</a></li>
							<li><a href="coaching"> CBSE Coaching</a></li>
						</ul>
					<li class="nav-item">
						<a href="ranking" class="nav-link">Top Ranking</a>
					</li>
					<li class="nav-item">
						<a href="mission" class="nav-link">Our Mission</a>
					</li>
					<li class="nav-item active">
						<a href="contact" class="nav-link">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="hero-wrap hero-wrap-2 mb-5" style="background-image: url('images/4.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Contact Us</h1>
					<p class="breadcrumbs">
						<span class="mr-2"><a href="index">Home <i class="ion-ios-arrow-forward"></i></a></span>
						<span>Contact <i class="ion-ios-arrow-forward"></i></span>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section mb-5">
		<div class="container">
			<div class="row d-flex contact-info">
				<div class="col-md-3 d-flex">
					<div class="bg-light">
						<h3 class="mb-4">Address</h3>
						<p><a>K-1/3 (LGF), Near Deshbandhu College, Main Market, C R Park, Delhi 110019</a></p>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="bg-light">
						<h3 class="mb-4">Contact Number</h3>
						<p><a href="tel://1234567920">011-35700364,
								9811082710, +91-9350373400</a></p>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="bg-light">
						<h3 class="mb-4">Email Address</h3>
						<p><a href="scholarcrpark@gmail.com">scholarcrpark@gmail.<br>com</a></p>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="bg-light">
						<h3 class="mb-4">Website</h3>
						<p><a href="index">scholaredu.in</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
					<div id="response"></div>
					<form id="contact-form">
						<div class="form-group">
							<input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
						</div>
						<div class="form-group">
							<input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<input type="number" id="phone" name="phone" class="form-control" placeholder="Phone No.">
						</div>
						<div class="form-group">
							<input type="text" id="enquiry" name="enquiry" class="form-control" placeholder="Enquiry">
						</div>
						<div class="form-group">
							<textarea name="message" id="message" cols="30" rows="5" class="form-control"
								placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="submit" class="btn btn-primary py-3 px-5">
						</div>
					</form>
				</div>
				<div class="col-md-6 d-flex align-items-stretch">
					<div id="map">
						<div style="overflow:hidden;resize:none;max-width:100%;width:700px;height:600px;">
							<div id="google-maps-display" style="height:100%; width:100%;max-width:100%;"><iframe class="mapBox"
									frameborder="0"
									src="https://www.google.com/maps/embed/v1/place?q=K-1/3+(LGF),Near+Deshbandhu+College,Main+Market,+C+R+Park,+Delhi+110019&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
							</div><a class="googlemaps-made" href="https://www.bootstrapskins.com/themes"
								id="authorize-map-data">premium bootstrap themes</a>
							<style>
								#google-maps-display img {
									max-height: none;
									max-width: none !important;
									background: none !important;
								}
							</style>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Scholar Coaching Center</h2>
						<div class="block-23">
							<ul>
								<li><a href=""><span class="icon icon-map-marker"></span><span class="text">K-1/3
											(LGF),Near Deshbandhu College, Main Market, C R Park, Delhi
											110019</span></a></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">011-35700364,
											9811082710, +91-9350373400</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">scholarcrpark@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Opening Hours</h2>
						<div class="block-21 d-flex">
							<div class="text">
								<h3 class="heading"><a href="#">Mon - Sat
										<br>11.00 am - 8.30pm</a></h3>
								<div class="meta">
								</div>
							</div>
						</div>
						<div class="block-21 d-flex">
							<div class="text">
								<h3 class="heading"><a href="#">Sunday
										<br>9.00 am - 2.00pm</a></h3>
								<div class="meta">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-2">
					<div class="ftco-footer-widget ml-md-4">
						<h2 class="ftco-heading-2">Useful Links</h2>
						<ul class="list-unstyled">
							<li><a href="index"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
							<li><a href="about"><span class="ion-ios-arrow-round-forward mr-2"></span>About Us</a>
							</li>
							<li><a href="ranking"><span class="ion-ios-arrow-round-forward mr-2"></span>Top
									Ranking</a></li>
							<li><a href="mission"><span class="ion-ios-arrow-round-forward mr-2"></span>Our
									Mission</a></li>
							<li><a href="contact"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">

					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="https://www.facebook.com/scholarcrpark"><span
										class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://twitter.com/scholarcrpark"><span
										class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="https://www.youtube.com/@Scholar_edu"><span
										class="icon-youtube"></span></a></li>
							<li class="ftco-animate">
								<a href="https://www.instagram.com/scholarcrpark/">
									<span class="icon-instagram"></span></a>
							</li>
						</ul>
					</div>

					<div class="block-23 footer_box">
						<ul>
							<li>
								<a href="https://www.macreel.co.in/">
									<span class=""></span>
									<span class="text">Developed By:-</span>
									<img src="images/macreel.png" class="macreel" width="100px">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
	<!-- <script src="js/google-map.js"></script> -->
	<script src="js/main.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>

<script>
$(document).ready(function(){
  $('#contact-form').submit(function(e){
      e.preventDefault(); // Prevent form submission
      var formData = $(this).serialize(); // Serialize form data
      console.log(formData);
      $.ajax({
          type: 'POST',
          url: 'contact_email', // PHP script for sending email
          data: formData,
          success: function(response){
              $('#response').html(response); // Display response
          }
      });
  });
});

</script>