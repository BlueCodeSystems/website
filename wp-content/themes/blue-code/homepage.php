<?php
/**
  Template Name:Home
 
 */

get_header(); ?>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
     <?php
          $n=1;$i=0;
            $home_banners=get_posts('numberposts=10&post_type=home_banner&order=ASC');
            foreach($home_banners as $home_banner){
            setup_postdata($home_banner);
            
            $home_bannerimage=wp_get_attachment_image_src(get_post_thumbnail_id($home_banner->ID),'full');
            ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($n==1){echo 'active';}?>"><?php echo $n; ?></li>
    <?php $n++;$i++;} ?>
   
  </ol>
  <div class="carousel-inner" role="listbox">
  
   <?php
          $n=1;
            $home_banners=get_posts('numberposts=10&post_type=home_banner&order=ASC');
            foreach($home_banners as $home_banner){
            setup_postdata($home_banner);
            
            $home_bannerimage=wp_get_attachment_image_src(get_post_thumbnail_id($home_banner->ID),'full');
            ?>
            
            
    <div class="item <?php if($n==1){echo 'active';}?>" style="background-image: url(<?php echo $home_bannerimage[0]; ?>);">
      <div class="container">
        <div class="carousel-caption">
         <?php the_content(); ?>
          <a class="btn btn-primary" href="<?php echo get_page_link( 19 ); ?>" role="button">Learn More</a></div>
      </div>
    </div>
    
    <?php $n++;} ?>
  
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"></a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"></a> </div>
<div class="clearfix"></div>
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
<!-- BODY
================================================== -->
<div class="hmAboutDiv">
  <div class="container">
    <h2><span>Who we are<span></span></span></h2>
    <h3><span>Our Mission</span></h3>
    <?php echo $our_mission = get_field( "our_mission" ); ?>
    <a href="<?php echo get_page_link( 19 ); ?>" class="btn btn-primary">Learn More</a> </div>
</div>
<div class="clearfix"></div>
<div class="hmImpactArea">
  <div class="container">
    <h2><span>IMpact Areas <span></span></span></h2>
     <?php echo $impact_areas = get_field( "impact_areas" ); ?>
    <div class="row">
     <?php
         
            $impact_areas=get_posts('numberposts=3&post_type=impact_areas_post&order=ASC');
            foreach($impact_areas as $impact_area){
            setup_postdata($impact_area);
            
            $impact_areasimage=wp_get_attachment_image_src(get_post_thumbnail_id($impact_area->ID),'full');
            ?>
      <div class="col-md-4">
      
        <a href="<?php the_permalink($impact_area->ID); ?>" class="colorBoxDiv">
          <div class="imgDiv <?php if($impact_area->ID == 179){ echo 'first';}elseif($impact_area->ID == 183){ echo 'second';}else{echo 'third';} ?>"></div>
          <h3><?php echo get_the_title($impact_area->ID); ?></h3>
         <?php echo get_field( "front_page_content" ,$impact_area->ID); ?>
        </a>
        
      </div>
      <?php } ?>
   
    </div>
  </div>
</div>
<?php endwhile;?>
<div class="clearfix"></div>
<div class="hmTestimonials">
  <div class="lftTestimonialsDiv">
    <h3>Testimonials</h3>
    <h2><span>Our Happy Clients <br>
      sent us bunch of love <span></span></span></h2>
  </div>
  <div class="rTestimonialsDiv">
    <div class="clientDiv">
      <div class="owl-carousel owl-theme" id="owl-carousel">
      <?php
         
            $testimonials=get_posts('numberposts=10&post_type=testimonial&order=ASC');
            foreach($testimonials as $testimonial){
            setup_postdata($testimonial);
            
            $testimonialsimage=wp_get_attachment_image_src(get_post_thumbnail_id($testimonial->ID),'full');
            ?>
        <div class="item">
          <div class="clientSaysBox">
            <div class="imgDiv"><img src="<?php echo $testimonialsimage[0]; ?>" alt=""></div>
            <?php echo get_the_content($testimonial); ?>
            <h3><?php  echo get_the_title($testimonial); ?></h3>
            <h4><?php echo $designation = get_field( "designation",$testimonial->ID ); ?></h4>
          </div>
        </div>
        <?php } ?>
    
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="hmPartnersDiv">
  <div class="container">
    <h2>Our Partners</h2> 
    <ul>
      <?php
         
            $our_partners=get_posts('numberposts=6&post_type=our_partners&order=ASC');
            foreach($our_partners as $our_partner){
            setup_postdata($our_partner);
            
            $ourpartnersimage=wp_get_attachment_image_src(get_post_thumbnail_id($our_partner->ID),'full');
            ?>
      <li><img src="<?php echo $ourpartnersimage[0]; ?>" alt=""></li>
      <?php } ?>
    
    </ul>
  </div>
</div>
<div class="clearfix"></div>
<!-- /BODY --> 
  



<?php get_footer(); ?>