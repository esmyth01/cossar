</div><!--end main-content-->

<footer>


<!-- add navigation to footer -->


<div id="footer-nav">

    <h4>SITEMAP</h4>

    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

</div>



<div id="footer-affiliates">

    <h3>AFFILIATES</h3>

    <p>Terms &amp; Conditions</p>
    <p>Privacy Policy</p>

    <br/><h3>LEGAL</h3>
    <br/>
    <br/>
    <br/>
    <br/>
    <p>&copy;2015 CoSSar</p>



  </div>




</footer>

<?php wp_footer()?>

</div><!--end wrapper-->
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
