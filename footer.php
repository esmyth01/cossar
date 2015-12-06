
</div><!--end main-content-->
</div><!--end wrapper-->
<footer>
<div id="footer-inner">

<!-- add navigation to footer -->


<div id="footer-nav">

    <h4>SITEMAP</h4>

    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

</div>



<div id="footer-affiliates">

    <h4>AFFILIATES</h4>
	
    <h4 class="legal">LEGAL</h4>
	<ul>
    <li><a href="javascript:;">Terms &amp; Conditions</a></li>
    <li><a href="javascript:;">Privacy Policy</a></li>
	</ul>
 </div>
  
<div id="copy">
<p>&copy;2015 CoSSaR</p>
</div>


</div><!-- end footer-inner -->
</footer>

<?php wp_footer()?>


<script>


	window.onload = function() {


		jQuery(".jquery-title").click(function() {
			jQuery(".menu-main-container").slideToggle();
			return false;
		});


		jQuery(window).resize(function(){

			if (jQuery(window).width() > 667) {
				jQuery(".menu-main-container").css('display', 'block');
			}

			if (jQuery(window).width() < 667) {
				jQuery(".menu-main-container").css('display', 'none');
			}
		});

	};


	</script>


</body>

</html>
