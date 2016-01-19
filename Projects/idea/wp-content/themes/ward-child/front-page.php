<?php
/**
 * The front page template.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
get_header();
global $paged;
$bavotasan_theme_options = bavotasan_theme_options();

if ( 2 > $paged ) {
// Display home page top widgetized area
	if ( is_active_sidebar( 'home-page-top-area' ) ) {
		?>
		<div id="home-page-widgets">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'home-page-top-area' ); ?>
				</div>
			</div>
		</div>
		<?php
	}
}
if ( 'page' == get_option('show_on_front') ) {

?>

<div class="container-fluid">
	<div class="row">
	  <div class = "slider">	
    		<div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
	    
            <div class="item active" data-number="1">
		<h3 class="clipped">Idea Foundation Kids</h3>
                <img src="http://ideafoundation.tk/wp-content/uploads/2015/10/banner.png" alt="Idea Foundation Kids" />
            </div>
            <div class="item" data-number="1">
		<h3 class="clipped">Health and Education in Sierra Leone, West Africa</h3>
                <img src= "http://ideafoundation.tk/wp-content/uploads/2015/10/carousel_image_one_edit_20.png" alt="Health and Education in Sierra Leone, West Africa" />
            </div>
            <div class="item" data-number="1">
		<h3 class="clipped">Medical Equipment and Supplies, Food for Villages, Women&rsquo;s Literacy and Vocational Program, Safe Drinking Water - Learn more about our Ebola Relief Programs</h3>
                <img src="http://ideafoundation.tk/wp-content/uploads/2015/10/carousel_2_image_edit1.png" alt="Medical Equipment and Supplies, Food for Villages, Women&rsquo;s Literacy and Vocational Program, Safe Drinking Water - Learn more about our Ebola Relief Programs" />
            </div>
        </div>
        <!-- Carousel indicators -->

        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        	<img class ="leftcontrol" src="http://ideafoundation.tk/wp-content/uploads/2015/10/left_carousel.png" alt="Carousel Previous Button">
        </a>

   
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
        	<img class="rightcontrol" src="http://ideafoundation.tk/wp-content/uploads/2015/10/right_carousel.png" alt="Carousel Next Button">
        </a>
    </div>
</div>


	  <img class ="banner" src="http://ideafoundation.tk/wp-content/uploads/2015/10/banner1.jpg" alt="Idea Foundation Banner">
	  <div class = "aboutidea" >

<div class="wrapper" id = "maincontent">
	

	    <h1>About the IDEA Foundation</h1>
	    <p class="text-justify">
	The IDEA Foundation promotes long-term welfare and self-sufficiency through cost effective education, health, economic development and social service projects in developing and at risk areas. IDEA currently focuses on Sierra Leone, West Africa.
	IDEA was granted its 501(c)3 status in 2007. The idea that guides IDEA's philanthropy is that the right gift at the right time can make a difference even for future generations. 



	    </p>

	</div>

	</div>
	  <!--3 Column Widget-->
<?php if(is_front_page() ) { ?>

	  <div id = "colwidgets">

	  <div class="wrapper">

	    <?php ResponsiveColumnWidgets(); ?>

	</div>

	  </div>

	  <!--end col widget -->
<?php } ?>
        </div>
</div>

<!--Do not delete this php line or it will destroy everything-->

<?php }?>

<?php if ( 'page' == get_option('show_on_front') ) { ?>
	</div>
</div>
<?php
}
?>
<?php get_footer(); ?>