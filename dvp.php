<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="NiBean"></meta>
	<meta name="author" content="NiBean"></meta>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<TITLE>Dummy Real Estate P/L</TITLE>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link href="css/app.css" rel="stylesheet"> -->
	<link href="css/floatNavBar.css" rel="stylesheet">
	<link href="css/navBar.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	<link href="css/search.css" rel="stylesheet">
	<link href="css/dropdowns-enhancement.css" rel="stylesheet">
	<link href="css/jquery.nouislider.css" rel="stylesheet">
	<link href="css/footer.css" rel="stylesheet">
	<link href="css/dvp.css" rel="stylesheet">
	<link href="css/share.css" rel="stylesheet">
	<link href="css/bizCard.css" rel="stylesheet">
	<link href="css/emailBox.css" rel="stylesheet">
	<link href="css/propertyDesc.css" rel="stylesheet">
	<link href="css/propertyInfo.css" rel="stylesheet">
	<link href="css/breadcrumb.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

	<link href="img/images.png" sizes="144x144" rel="apple-touch-icon-precomposed"></link>
	<link href="img/images.png" sizes="114x114" rel="apple-touch-icon-precomposed"></link>
	<link href="img/images.png" sizes="72x72" rel="apple-touch-icon-precomposed"></link>
	<link href="img/images.png" rel="apple-touch-icon-precomposed"></link>
	<link href="img/images.png" rel="shortcut icon"></link>


	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->

	<noscript>
		<p style="color: grey; text-align: center;">
			Your browser does not support JavaScript.
			<br>
			Please visit Google <b><a href="http://www.google.com.au/search?q=enable+javascript&btnG=Search&hl=en-AU&gbv=1">here</a></b>
			to set your broswer to enable JavaScript.
		</p>
		<style>
			#mainWrap, #footerWrap {
				display: none;
			}
			footer {
				background-color: white;
			}
		</style>
	</noscript>

</head>

<body id="body">
	<div id="bodyWrap">
		<?php include 'floatNavBar.php' ?>
		<?php include 'navbar.php' ?>
		<?php include 'carousel.php' ?>
		<div id="mapWrap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.803719636111!2d150.998969!3d-33.817377999999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a2dfa19a89a5%3A0x2f808eb1a1c0e7b2!2s7%2F2+O&#39;Connell+St%2C+Parramatta+NSW+2150!5e0!3m2!1sen!2sau!4v1440713867809" width="636" height="636"></iframe>
		</div>
		<br>
		<div id="belowMapWrap">
			<?php include 'propertyInfo.php' ?>
			<br>
			<?php include 'propertyDesc.php' ?>
			<?php include 'share.php' ?>
			<br>
			<?php include 'bizCard.php' ?>
			<br>
			<?php include 'emailBox.php' ?>
		</div>
		<br>
		<?php include 'breadcrumb.php' ?>
	</div>

	<footer>
		<?php include 'search.php' ?>
		<br>
		<?php include 'footer.php' ?>

	</footer>

	<script src="js/carousel.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/dropdowns-enhancement.js"></script>
	<script src="js/jquery.nouislider.all.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/floatNavBar.js"></script>
	<!-- <script src="js/card.js"></script> -->
	<script src="js/dvp.js"></script>
	<script src="js/emailBox.js"></script>

</body>
</html>
