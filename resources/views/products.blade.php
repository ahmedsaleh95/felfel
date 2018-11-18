<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>aji charapita</title>
<link rel="shortcut icon" type="image/x-icon" href="images/home/IMG_4107.jpg">
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Candid Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" type="text/css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
</head>
<body>
<!-- message -->
	@include('components.message')
<!-- //message -->
@include('components.agileits_main')	
<!-- //banner -->	
<!-- home -->
@include('components.home')
<!-- //home -->
<!-- about -->
@include('components.about')
<!-- //about -->
<!-- gallery -->
<!-- @include('components.gallery') -->
<!-- //gallery -->
<!-- ajicharapita -->
@include('components.ajicharapita')
<!-- //ajicharapita -->
<!-- amaranth -->
@include('components.amaranth')
<!-- //amaranth -->
<!-- quinoa -->
@include('components.quinoa')
<!-- //quinoa -->
<!-- Tooltip -->
@include('components.tooltip')
<!-- //Tooltip -->
<!-- section -->
@include('components.section')
<!-- //section --> 
<!--team -->
<!-- @include('components.team') -->
<!-- //team--> 
<!-- contact --> 
@include('components.contact')
<!-- //contact --> 
<!-- subscribe -->
@include('components.subscribe')
<!-- //subscribe --> 
<!-- copy-right -->
@include('components.copyrights')
<!-- //copy-right -->
<!-- Gallery-plugin -->
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/jquery.cm-overlay.js"></script>
		<script>
			$(document).ready(function(){
				$('.cm-overlay').cmOverlay();
			});
		</script>
<!-- //Gallery-plugin -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<script src="js/SmoothScroll.min.js"></script>
<!-- //end-smooth-scrolling -->	
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>