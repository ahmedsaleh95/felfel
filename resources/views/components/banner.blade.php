<div class="w3_banner">
	<div class="container">
		<div class="slider">
			<div class="callbacks_container">
			   <ul class="rslides callbacks callbacks1" id="slider4">
					<li>	
						<div class="banner_text_w3layouts">
							<!-- <h3>Maur egetire sit tmae.</h3> -->
							<h3>Aji Charapita</h3>

							<span> </span>
							<p>latin crops </p>

						</div>
					</li>
					 <li>	
						<div class="banner_text_w3layouts">
							<!-- <h3>Eget Integer sit amet.</h3> -->
							<h3>Amaranth</h3>

							<span> </span>
							<p>Egyptian farms </p>
						</div>
					</li>
					 <li>	
						<div class="banner_text_w3layouts">
							<h3>Quinoa</h3>

							<span> </span>
							<p>permuim quality </p>
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
			  	if($("#callbacks1_s2").hasClass('callbacks1_on'))
			  	{
				  	$(".agileits_main").css('background-image', 'url(../images/33.jpeg)');
			  	}
			  	else if($("#callbacks1_s0").hasClass('callbacks1_on')){
				  	$(".agileits_main").css('background-image', 'url(../images/55.jpg)');
			  	}
			  	else if($("#callbacks1_s1").hasClass('callbacks1_on')){
				  	$(".agileits_main").css('background-image', 'url(../images/77.jpg)');
			  	}
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
			  // alert($("#callbacks1_s0").attr('style'));
			  // if($("#callbacks1_s0").attr('style') == 'left')
			  // {
			  // 	alert();
			  // }

			});
		 </script>
	   </div>
	</div>   
</div>