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

	<link href="dist/assets/css/styles.min.css" rel="stylesheet" type="text/css">

</head>

<!--================== Preloader ==============================================-->
<noscript>
	<div class="hidden">
</noscript>
		<div class="preloader"></div>
<noscript>
	</div>
</noscript>

<body>

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
					<a class="navbar-brand" href="//olgasmirnova.co.nz" title="Olga Smirnova">
						Olga Smirnova
					</a>
					
		    	<!-- Hamburger_btn for mobile -->
           		   	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
           		   		<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
           		   	</button>
		
           		   	<div class="collapse navbar-collapse" id="mainNav" role="navigation">  
            	     	<ul class="nav navbar-nav navbar-right">
            	     		<li><a href="#about" class="uppercase">About</a></li>
            	     		<li><a href="#portfolio" class="uppercase">Portfolio</a></li>
            	     		<li><a href="#contacts" class="uppercase">Contacts</a></li>
            	      	</ul>
            	    </div>
            	   </div>
            		
			</div>
		</nav>

    </header> <!-- header ends -->



<!--================== Main =================================================-->
	<main class="container">
		<section class="row" id="top">
			<h1 class="ticker"></h1>
		</section>


	<!-- About Page -->
		<section class="row" id="about">
			<h2>ABOUT</h2>

		<!-- Image -->
			<div class="col-xs-12 col-md-6">
			</div>

		<!-- About text -->
			<div class="col-xs-12 col-md-6">
			</div>
		</section>

	<!-- Portfolio Page -->
		<section class="row" id="portfolio">
			<h2>PORTFOLIO</h2>
		</section>

	<!-- Contacts Page -->
		<section class="row" id="contacts">
			<h2>CONTACTS</h2>
	
		<!-- All contacts -->
			<div class="col-xs-12 col-md-6">
			</div>

		<!-- Form -->
			<div class="col-xs-12 col-md-6">
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

	<script type="text/javascript" src="dist/assets/js/main.min.js"></script>
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