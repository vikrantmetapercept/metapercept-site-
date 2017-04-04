 <!--Footer section-->
	<div class="container-fluid bg">
		<div class="row text-center">
		<div class="col-md-4">
			<h2><a href= "http://in.metapercept.com/wordpress/others-metapercept/careers/" style="text-decoration:none;font-weight:400;color:black;">Careers</h2></a>
			<hr width="50px">
			<p>For current job openings visit our <a href="http://in.metapercept.com/wordpress/others-metapercept/careers/">careers</a> page.</p>
		</div>
		
		<div class="col-md-4 ">
			<h2 style="text-decoration:none;font-weight:400;color:black;">News & Events</h2>
			<hr width="50px">
			<ul class="list-unstyled">
				<li><a href="http://in.metapercept.com/wordpress/others-metapercept/news/" style="text-decoration:none;color:black;font-weight:400;text-transform:normal!important;">News</a></li>
				<li><a href="http://in.metapercept.com/wordpress/others-metapercept/events/" style="text-decoration:none;color:black;font-weight:400;">Events</a></li>
			</ul>
		</div>
		
		<div class="col-md-4">
			<h2><a href="contact_us.php" style="text-decoration:none;font-weight:400;color:black;">Contact Us</a></h2>
			<hr width="50px">
			<address>
				<i class="fa fa-phone icon" style="color:#72c02c;"></i>
				<span> Phone:+91-892-840-6975</span> 
				<br/>
				<i class="fa fa-envelope icon" style="color:#72c02c;"></i>
				<span> Email:</span>
				<a href="mailto: info@metapercept.com" class="">info@metapercept.com</a>
				
			</address>
		</div>
		</div>
	</div>

     <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>2017 &copy; Metapercept Technology Services (LLP), All Rights Reserved.</p>
		  <p><a target="_blank" href="privacy_policy.php">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;
		  <a target="_blank" href="sitemap.html">View Sitemap</a></p>
			
			<div class="social">
				<ul class="col-md-12 icon_pad">
					<li><a href="https://www.facebook.com/metapercepttechservices/?hc_ref=SEARCH&fref=nf">
						<i class="fa fa-facebook"></i>
					</a></li>
					<li><a href="http://twitter.com/" >
						<i class="fa fa-twitter"></i>
					</a></li>
					<li><a href="http://www.linkedin.com/in/">
						<i class="fa fa-linkedin"></i>
					</a></li>
					<li><a href="http://in.metapercept.com/wordpress/blog/">
						<i class="fa fa-bold"></i>
					</a></li>
				</ul>
			</div>
			
			<div class="scroll-top-wrapper ">
				<span class="scroll-top-inner">
					<i class="fa fa-2x fa-arrow-circle-up"></i>
					<p>Top</p>
				</span>
			</div>
		</div>
      </div>
    </footer>
  </div>
  <!--/Footer-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

	<script>
	$(function(){
		$(document).on( 'scroll', function(){
			if ($(window).scrollTop() > 100) {
				$('.scroll-top-wrapper').addClass('show');
			} else {
				$('.scroll-top-wrapper').removeClass('show');
			}
		});
		$('.scroll-top-wrapper').on('click', scrollToTop);
	});
	function scrollToTop() {
		verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
		element = $('body');
		offset = element.offset();
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 800, 'linear');
	}
	</script>