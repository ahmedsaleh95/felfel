<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>ajicharapita</title>
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
<!-- <style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style> -->
</head>
<body>

@include('layouts.agileits_main')

<!-- //banner -->	
<!-- home -->
@include('layouts.home')
<!-- //home -->
<!-- about -->
@include('layouts.about')
<!-- //about -->
<!-- //felfel-->
@include('layouts.bnfsgy')
<!-- felfel-->

<!-- //bnfsgy-->
@include('layouts.felfel')
<!-- bnfsgy-->
<!-- gallery -->
@include('layouts.gallery')
<!-- //gallery -->
<!-- Tooltip -->
@include('layouts.tooltip')
<!-- //Tooltip -->
<!-- section -->
@include('layouts.blog')
<!-- //section --> 
<!--team -->
<!-- @include('layouts.team') -->
<!-- //team-->

<!-- contact --> 
@include('layouts.contact')	
<!-- //contact --> 
<!-- subscribe -->
@include('layouts.subscribe')
<!-- //subscribe --> 
<!-- copy-right -->
@include('layouts.footer')
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