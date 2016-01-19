<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main, .grid and #page div elements.
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();

			/* Do not display sidebars if is front page, search or archive */















		if ( is_singular() &&  !is_front_page() ) {































			















				















		















			?> 































		 </div><!-- .row -->















		<?php } ?>































	 </div><!-- #main -->















</div><!-- #page -->































<footer id="footer" role="contentinfo">







	<div id="footer-content" class="container">



		<div class="row">



			<address class ="col-sm-4 text-center">



				6317 Palomino Drive<br>



				Plano, TX 75024<br>



				972-625-6148<br>



			</address>



			<div class="col-sm-4 text-center">



				<?php dynamic_sidebar( 'extended-footer' ); ?>



				<div class="knowbility-logo">



					<a href="http://www.knowbility.org/">



					<img src="http://ideafoundation.tk/wp-content/uploads/2015/10/knowbilitylogo.png" alt ="Knowbility Logo">		



					</a>



				</div>



			<a href="http://ideafoundation.tk/sitemap/">Sitemap</a>



			| &copy; The Idea Foundation

			<br/>



			Last Updated: 11/12/2015 10:50 p.m.



		  	</div>



			<address class="col-sm-4 text-center">



				600 17th Street, #2800 So.<br>



				Denver, CO 80202<br>



				303-260-6411<br>



			</address>



	</div><!-- .row -->







	</div><!-- #footer-content.container -->































</footer><!-- #footer -->















<?php wp_footer(); ?>















<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>















    <script>







        $(document).ready(function () {



$("div#maincontent").attr("role", "main");

$("div.carousel-inner div").removeAttr("role");

$("div.carousel-inner div").removeAttr("aria-labelledby");

$("div#wpcf7-f183-o1").attr("aria-label", "Sign Up For Newsletter");







            $("li#menu-item-35 a").click(function () {



	var n = $("li#menu-item-35").hasClass("open");



	if (n == true) {



	      $(this).attr("aria-expanded", "false");



	} else {



	      $(this).attr("aria-expanded", "true");



	}



$("li#menu-item-37 a.dropdown-toggle").attr("aria-expanded", "false");



           });







            $("li#menu-item-37 a").click(function () {



	var n = $("li#menu-item-37").hasClass("open");



	if (n == true) {



	      $(this).attr("aria-expanded", "false");



	} else {



	      $(this).attr("aria-expanded", "true");



	}



$("li#menu-item-35 a.dropdown-toggle").attr("aria-expanded", "false");



           });











            $("div.navbar-header button").click(function () {



	var nnn = $(this).hasClass("collapsed");



	if (nnn == true) {



	      $(this).attr("aria-expanded", "true");



	} else {



	      $(this).attr("aria-expanded", "false");



	}







           });























































$("input#forjs").attr("alt", "donate");



$("input#forjs2").attr("alt", "donate");



$("input#forjs3").attr("alt", "busy");































                $("div#dgx-donate-form-donation-section > span").each(function () {















$(this).wrap( "<label></label>" );















                });















$("div#dgx-donate-form-donation-section label").attr("class", "groupbut");















$( "label.groupbut" ).wrapAll( "<div class='new' role='group' aria-labelledby='forid' />");















$( "div#header_desc p" ).attr( "id", "forid");















                $("div#dgx-donate-form-donor-section > div").each(function () {















$(this).wrapInner( "<label></label>" );















                });















                $("div#_dgx_donate_user_amount").wrapInner( "<label></label>" );























                $("div#dgx-donate-form-billing-section > div").each(function () {















$(this).wrapInner( "<label></label>" );















                });















        });















    </script>































































</body>















</html>