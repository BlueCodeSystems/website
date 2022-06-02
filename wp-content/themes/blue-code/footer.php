<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php
	/*
	 * A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	//get_sidebar( 'footer' );
?>

		
<!-- FOOTER -->
<div class="footer">
  <div class="container">
    <div class="topfooter">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 footerMenuOne"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php bloginfo( 'template_url' ); ?>/images/footer-logo.png" alt=""> </a> 
          <?php dynamic_sidebar("Footer-contact-details"); ?>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12 footerMenuTwo">
          <h3><span>Quick Links</span></h3>
          <ul>
            <!--<li><a href="index.html">Home</a></li>
            <li><a href="index.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="impact-areas.html">Impact Areas</a></li>
            <li><a href="insights.html">Insights</a></li> 
            <li><a href="contact-us.html">Contact Us</a></li>-->
             <?php
$args = array(
 'order'                  => 'ASC',
 'orderby'                => 'menu_order',
'post_type'              => 'nav_menu_item',
 'post_status'            => 'publish',
 'output'                 => ARRAY_A,
 'output_key'             => 'menu_order',
 'nopaging'               => true,
'update_post_term_cache' => false );
 $items = wp_get_nav_menu_items( 'Quick Links Footer', $args );
 $page_url = get_permalink();
 foreach($items as $item ) :
 ?>
          <li><a href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
          <?php endforeach;?>
          
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 footerMenuThree">
          <h3><span>Impact Areas</span></h3>
          <ul>
            <!--<li><a href="impact-areas.html">Health</a></li>
            <li><a href="#">Agriculture</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Data for Decisia Making</a></li>
            <li><a href="#">Women & Development</a></li>-->
    <?php
         
            $impacts=get_posts('numberposts=10&post_type=impact_areas_post&order=ASC');
            foreach($impacts as $impact){
            setup_postdata($impact);
            ?>
                <li><a href="<?php the_permalink($impact->ID)?>"><?php echo get_the_title($impact->ID); ?></a></li>
                <?php } ?>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 footerMenuFour">
          <h3><span>Services</span></h3>
          <ul>
         <?php
         
            $serviceslist=get_posts('numberposts=10&post_type=serviceslist&order=ASC');
            foreach($serviceslist as $services){
            setup_postdata($services);
            ?>
                <li><a href="<?php the_permalink($services->ID)?>"><?php echo get_the_title($services->ID); ?></a></li>
                <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bootomFooter">
    <p>&copy; <?php echo date("Y"); ?> Blue Code. All rights reserved.</p>
  </div>
</div> 
<!-- footer --> 

<!-- Bootstrap core JavaScript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-3.4.1.min.js"></script> 
<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo( 'template_url' ); ?>/js/aos.js"></script> 
<script src="<?php bloginfo( 'template_url' ); ?>/js/owl.carousel.min.js"></script> 
<!--<script src="js/bootstrap-datepicker.min.js"></script> --> 
<script>
$(document).ready(function() {
	var owl = $('#owl-carousel');
	owl.owlCarousel({
		margin: 0,
		nav: false,
		dots: true,
		loop: true,
		autoplay: false,
		responsive: {
			0: {
				items: 1
			},
			640: {
				items: 1
			},
			767: {
				items: 1
			},
			768: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
});
</script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="<?php bloginfo( 'template_url' ); ?>/js/ie10-viewport-bug-workaround.js"></script> 

<script>
$(document).ready(function(){
$(".search").click(function(){
    $(".nav-search").slideToggle();
});
});

$(window).resize(function() {
    if ($(window).width() <= 1024) {
        deviceMenuFunctionality()
    }
});


 function deviceMenuFunctionality() {
    $(".expanded-list li, .expand-inner").unbind("click").bind("click", function(f) {
        var d = $(this),
            b = d.children("ul"),
            a = d.find(".toChild").first();
        if ($(this).parent().hasClass("subMenu")) {
            var c = d.find(".childMenu");
            $(".subMenu .childMenu").not(c).hide();
            $(".subMenu .toChild").not(a).removeClass("activeMenu");
            a.toggleClass("activeMenu");
            c.slideToggle();
            f.stopPropagation();
            return
        }
        $(".toChild").not(a).removeClass("activeMenu");
        $(".subMenu").not(b).hide();
        $(".childMenu").not(b).hide();
        a.toggleClass("activeMenu");
        d.children("ul").slideToggle()
    });
    $(".childMenu li a").click(function(a) {
        a.stopPropagation()
    })
};
</script>

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
