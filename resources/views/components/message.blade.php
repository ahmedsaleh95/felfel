	@if($flash = session('message'))
	  	<div id="flash-message" class="alert alert-success alert-dismissible fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong class="banner_text_w3layouts">{{ $flash }}</strong>
    		<i class="glyphicon glyphicon-ok"></i>
    	</div>
	@endif

 	<!-- <script src="js/jquery-1.11.1.min.js"></script> -->
    <script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// alert();
				$("#flash-message").fadeOut(5000);
			});
		 </script>