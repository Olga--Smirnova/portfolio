<!DOCTYPE html >
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="description" content="">
	<meta name="keywords" content="Olga Smirnova, web developer Auckland, web developer new zealand, front end Auckland, front end developer Auckland, java script developer Auckland, logo design Auckland"/>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />

	<title>Olga Smirnova</title>
	<link rel="shortcut icon" href="favicon.ico"/>	

<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Teko:600' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Muli|Philosopher:400,700" rel="stylesheet">
<!-- 	<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Dosis|Montserrat:700" rel="stylesheet">

	<link href="dist/assets/css/styles.min.css" rel="stylesheet" type="text/css">
	
	<script src="js/modernizr.custom.js"></script>
<!-- AngularJS -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
</head>


<!--================== Preloader ==============================================-->
<noscript>
	<div class="hidden">
</noscript>
		<div class="preloader"></div>
<noscript>
	</div>
</noscript>

<body class="main-font" ng-app="portfolio">

<!--================== Backups =================================================-->
<!--[if lte IE 9]>
	<div class="message" id="oldie">
		<p><i class="fa fa-exclamation-circle"></i>Sorry, but this website does not support IE9 or lower. Please <a href="http://windows.microsoft.com/ie">upgrade your IE</a> or <a href="http://www.browsehappy.com">switch to another browser</a>.</p>
	</div>
<![endif]-->

<!-- Opera Mini backup -->
	<div style="display:none;" class="message" id="operamini">
		<p><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Sorry, but this website does not support Opera Mini. Please switch to another browser such as Opera for Android, Chrome, Firefox, or Safari.</p>
	</div>

<!-- no JS backup -->
	<noscript>
	    <div class="message" id="nojs">
	    	<p class="text-center"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Sorry, but you need JavaScript to enjoy full experience from this page. Please, enable JavaScript in your browser or switch to a JavaScript device.</p>
	    </div>
	</noscript>


<!--================== Header =================================================-->
	<header>

		<nav class="navbar">
			<div class="container">
				<div class="row-fluid clearfix">
		
				<!-- Logo -->
					<a class="navbar-brand sec-font fw-700" href="//olgasmirnova.co.nz" title="Olga Smirnova">
						Olga Smirnova
					</a>
					
		    	<!-- Hamburger_btn for mobile -->
           		   	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
           		   		<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
           		   	</button>
		
           		   	<div class="collapse navbar-collapse" id="mainNav" role="navigation">  
            	     	<ul class="nav navbar-nav navbar-right">
            	     		<li><a href="#about" class="uppercase sec-font fw-700">About</a></li>
            	     		<li><a href="#portfolio" class="uppercase sec-font fw-700">Portfolio</a></li>
            	     		<li><a href="#contacts" class="uppercase sec-font fw-700">Contacts</a></li>
            	      	</ul>
            	    </div>
            	   </div>
            		
			</div>
		</nav>

    </header> <!-- header ends -->



<!--================== Main =================================================-->
	<main>
		<section class="container-fluid" id="top">
			<div class="row">
				<h1 class="ticker"></h1>
			</div>
		</section>


	<!-- About Page -->
		<section class="container-fluid sec-text-color" id="about">
			<div class="row">
			 	<h2 class="sec-font fw-700 mb-2 header-two">ABOUT</h2>

			<!-- Image -->
				<div class="col-xs-12 col-md-6">
				</div>

			<!-- About text -->
				<div class="col-xs-12 col-md-6">
					<p>Hi, I'm Olga and I create websites.</p>
					<p>Graduated from Yoobee School of Design (former Natcoll), received my diploma with distinction (yehh-yeeh).</p>
					<p>I design clean, minimal and user-friendly interfaces for web, and then I write the code that brings them to life.</p>
					<p class="mb-2">Also I have a biologist background (that's why jellyfish, ahh..).</p>

					<ul>
						<li>Am I currently employed?</li>
						<li>Am I open to the new opportunities?</li>
						<li>Am I a NZ rezident?</li>
					</ul>
				</div>
			</div>
		</section>

	<!-- Portfolio Page -->
		<section class="container-fluid" id="portfolio">
			<div class="row">
				<h2 class="sec-font fw-700 mb-2 header-one">PORTFOLIO</h2>

				<ul class="grid effect-6" id="grid" ng-controller="MainController">

					<li ng-repeat="project in projects">
						<div class="project-tyle">
							<img ng-src="{{ project.img }}" alt="{{ project.imgAlt }}" title="{{ project.imgTitle }}">

							<div class="project-infobox">
								<h3 class="sec-font">{{ project.title }}</h3>
								<p class="used-tools fw-700">
									{{ project.tools }}
								</p>
							</div>
						</div>
					</li>

				</ul>	

			</div>
		</section>

	<!-- Contacts Page -->
		<section class="container-fluid text-color-bg " id="contacts">
			<div cass="row">
				<h2 class="sec-font fw-700 header-one mb-2">CONTACTS</h2>
		
			<!-- Form -->
				<div class="col-xs-12 col-md-6">
					<form method="post" action="post.php" id="contact-form">
						<div class="col-xs-12 col-md-4">
							<label for="name" class="">Your Name:</label>
							<label for="email" class="">Your Email:</label>
							<label for="phone" class="">Your Phone:</label>
							<label for="comment" class="">Your Message:</label>
						</div>

						<div class="col-xs-12 col-md-8">
							<div class="form-group">
								<!-- <label for="name" class="inline-me">Your Name:</label> -->
								<input required type="text" data-easyval="easyValidation" class="form-control inline-me" name="name" placeholder="YOUR NAME" value="">
								<div></div>
							</div>
	
							<div class="form-group">
								<!-- <label for="email" class="">Your Email:</label> -->
								<input required type="text" data-easyval="easyValidation" class="form-control" name="email" placeholder="YOUR EMAIL" value="">
								<div></div>
							</div>
	
							<div class="form-group">
								<!-- <label for="phone" class="">Your Phone:</label> -->
								<input required type="text" data-easyval="easyValidation" class="form-control" name="phone" placeholder="YOUR PHONE" value="">
								<div></div>
							</div>
	
							<div class="form-group">
								<!-- <label for="comment" class="">Your Message:</label> -->
								<textarea required type="text" data-easyval="easyValidation" class="form-control" rows="7" name="comment" placeholder="YOUR MESSAGE"></textarea>
								<div></div>
							</div>
						</div>

							<button type="submit" class="button sec-button">Send</button>

						<!-- Feedback for the form submission -->  
                            <div class="response-output"></div>
                            <div class="sr-only response-output-sr"></div>
	
						</form>
				</div>
	
			<!-- All contacts -->
				<div class="col-xs-12 col-md-6">
				</div>
			</div>
		</section>
	</main>



<!--================== Footer =================================================-->
		<div class="ribbon"></div>
		<footer class="container fw-400 text-white bg-black">
			<div class="row-fluid clearfix">

				<div class="col-xs-12 col-sm-6">
					<p class="inline-me">&copy; 2016 Olga Smirnova. All rights reserved.
                        <!-- <?php 
                            //if( date('Y') !== '2016')
                            //{
                                //echo '&copy; 2016 - ' . date('Y') . ', Olga Smirnova. All rights reserved.';
                            //}//else{
                                //echo '&copy; 2016, Olga Smirnova. All rights reserved.';
                            //}
                        ?>-->
                    </p>
				</div>

			</div>
		</footer>
		
	
<!-- jQuery -->	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Gallery -->
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/imagesloaded.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/AnimOnScroll.js"></script>



	<script type="text/javascript" src="dist/assets/js/main.min.js"></script>


	<!-- Modules -->
    <script src="js/app.js"></script>
	<!-- Controllers -->
    <script src="js/controllers/MainController.js"></script>


	<script>
	    jQuery(document).ready(function($){
	        $.iMissYou({
	            title: "Good developer waits here",
	            favicon: {
	                enabled: true,
	                src:'iMissYouFavicon.ico'
	            }
	        });
	    });
	</script>
	

</body>

</html>