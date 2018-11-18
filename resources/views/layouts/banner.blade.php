<div class="w3_banner">
	<div class="container">
		<div class="slider">
			<div class="callbacks_container">
			   <ul class="rslides callbacks callbacks1" id="slider4">
					<li>	
						<div class="banner_text_w3layouts">
							<h3>Modern Farming.</h3>
							<span> </span>
							<p>We Develop  </p>
						</div>
					</li>
					 <li>	
						<div class="banner_text_w3layouts">
							<h3>Modern Science.</h3>
							<span> </span>
							<p>We Do </p>
						</div>
					</li>
					 <li>	
						<div class="banner_text_w3layouts">
							<h3>latin Corps.</h3>
							<span> </span>
							<p>We Deliver </p>
						</div>
					</li>
				</ul>
			</div>
		  <script src="js/responsiveslides.min.js"></script>
		  <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider4").responsiveSlides({
				auto: true,
				pager:true,
				nav:true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
		 </script>
	   </div>
	</div>   
</div>