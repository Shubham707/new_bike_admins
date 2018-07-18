<style>
input[type='number'] {
    -moz-appearance:textfield;
}

input::-webkit-inner-spin-button
 {
  -webkit-appearance: inner-spin-button;
  display: inline-block;
  cursor: default;
  flex: 0 0 auto;
  align-self: stretch;
  -webkit-user-select: none;
  opacity: 0;
  pointer-events: none;
  -webkit-user-modify: read-only;
}
</style>
      <script>
	var slideIndex = 0;
	showSlides();
	
	function showSlides() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    slideIndex++;
	    if (slideIndex > slides.length) {slideIndex = 1}    
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";  
	    dots[slideIndex-1].className += " active";
	    setTimeout(showSlides, 4000); // Change image every 2 seconds
	}
	</script>
<footer class="footer-bg">
	<!-- Footer Content -->
	<div class="footer-top">
	   <div class="container">
		  <div class="row">
			 <div class="col-md-3  col-sm-6 col-xs-12">
				<!-- Info Widget -->
				<div class="widget">
				   <div class="logo"> <img alt="" src="images/logo.png"> </div>
				   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat fringilla port.</p>
				   <ul class="apps-donwloads">
					  <li><img src="images/googleplay.png" alt=""></li>
					  <li><img src="images/appstore.png" alt=""></li>
				   </ul>
				</div>
				<!-- Info Widget Exit -->
			 </div>
			 <div class="col-md-2 col-sm-6 col-xs-12">
				<!-- Follow Us -->
				<div class="widget socail-icons">
				   <h5>Follow Us</h5>
				   <ul>
					  <li><a class="Facebook" ><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
					  <li><a class="Twitter" href="#"><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
					  <li><a class="Linkedin" href="#"><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
					  <li><a class="Google" href="#"><i class="fa fa-google-plus"></i></a><span>Google+</span></li>
				   </ul>
				</div>
				<!-- Follow Us End -->
			 </div>
			 <div class="col-md-2  col-sm-6 col-xs-12">
				<!-- Follow Us -->
				<div class="widget my-quicklinks">
				   <h5>Quick Links</h5>
				   <ul >
					  <li><a href="">Sponge Bucket</a></li>
					 <li><a href="">Request Service</a></li>
					 <li><a href="">Ownership Transfer </a></li>
					 <li><a href="">Need Help?</a></li>
				   </ul>
				</div>
				<!-- Follow Us End -->
			 </div>
			 <div class="col-md-5  col-sm-6 col-xs-12">
				<!-- Newslatter -->
				<div class="widget widget-newsletter">
				   <h5>Singup for Weekly Newsletter</h5>
				   <div class="fieldset">
					  <p>We may send you information about related events, webinars, products and services which we believe.</p>
					  <form>
						 <input class="" value="Enter your email address" type="text">
						 <input class="submit-btn" name="submit" value="Submit" type="submit"> 
					  </form>
				   </div>
				</div>
				<div class="copyright">
				   <p>&copy; 2017 VK Bikes All rights reserved.</p>
				</div>   
				<!-- Newslatter -->
			 </div>
		  </div>
	   </div>
	</div>
   
 </footer>
 </div>
      <!-- Main Content Area End --> 
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="<?php echo base_url();?>js/jquery.min.js"></script>
      <!-- Bootstrap Core Css  -->
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
      <!-- Jquery Easing -->
      <script src="<?php echo base_url();?>js/easing.js"></script>
      <!-- Menu Hover  -->
      <script src="<?php echo base_url();?>js/carspot-menu.js"></script>
      <!-- Jquery Appear Plugin -->
      <script src="<?php echo base_url();?>js/jquery.appear.min.js"></script>
      <!-- Numbers Animation   -->
      <script src="<?php echo base_url();?>js/jquery.countTo.js"></script>
      <!-- Jquery Select Options  -->
      <script src="<?php echo base_url();?>js/select2.min.js"></script>
      <!-- noUiSlider -->
      <script src="<?php echo base_url();?>js/nouislider.all.min.js"></script>
      <!-- Carousel Slider  -->
      <script src="<?php echo base_url();?>js/carousel.min.js"></script>
      <script src="<?php echo base_url();?>js/slide.js"></script>
      <!-- Image Loaded  -->
      <script src="<?php echo base_url();?>js/imagesloaded.js"></script>
      <script src="<?php echo base_url();?>js/isotope.min.js"></script>
      <!-- CheckBoxes  -->
      <script src="<?php echo base_url();?>js/icheck.min.js"></script>
      <!-- Jquery Migration  -->
      <script src="<?php echo base_url();?>js/jquery-migrate.min.js"></script>
      <!-- Style Switcher -->
      <script src="<?php echo base_url();?>js/color-switcher.js"></script>
      <!-- PrettyPhoto -->
      <script src="<?php echo base_url();?>js/jquery.fancybox.min.js"></script>
      <!-- Wow Animation -->
      <script src="<?php echo base_url();?>js/wow.js"></script>
      <!-- Template Core JS -->
      <script src="<?php echo base_url();?>js/custom.js"></script>
   </body>
</html>

