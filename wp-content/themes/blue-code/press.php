<?php
/**
  Template Name:Press
 
 */

get_header(); ?>
<style>
@media screen and (max-width: 480px) {
.bluecode { padding: 30px 0 40px 0 !important; }
}
</style>
<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->

<div class="clearfix"></div>
<div class="bluecode" style="padding: 70px 0 80px 0;">
  <div class="shadow1"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow1.png" alt="img"> </div>
  <div class="shadow2"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow2.png" alt="img"> </div>
  <div class="container">
    <h2><span>IN THE NEWS<span></span></span></h2>
    <div class="row">
  <?php /*?>  <?php
          
            $press_the_news=get_posts('numberposts=6&post_type=press_the_news&order=ASC');
            foreach($press_the_news as $press){
            setup_postdata($press);
            $pressimage=wp_get_attachment_image_src(get_post_thumbnail_id($press->ID),'full');
            ?>
      <div class="col-md-4">
        <div class="NEWS"> <span> <img src="<?php echo $pressimage[0]; ?>" alt="img"> </span>
          <h3><?php echo $heading = get_field( "heading" ); ?></h3>
          <div class="date-sec"> June 23, 2019 </div>
          <?php echo strip_tags(substr(get_the_content(),0,200));?>
          <a href="<?php the_permalink()?>"> Read More </a> </div>  
      </div>
      <?php } ?><?php */?>
   
      
      <?php echo do_shortcode('[ajax_load_more container_type="div" css_classes=".col-md-4" post_type="press_the_news" posts_per_page="6" transition_container="false" images_loaded="true" button_label="Load More" button_loading_label="Load More" nested="true"]'); ?>
    </div>
   <!-- <div class="full" style="text-align:center;"> <a href="" class="load-more"> Load More </a> </div>-->
  </div>
</div>
<div class="Press_Releases">
  <div class="container">
    <div class="shadow1"> <img src="<?php bloginfo( 'template_url' ); ?>/images/shadow1.png" alt="img"> </div>
    <div class="shadow2"> <img src="<?php bloginfo( 'template_url' ); ?>/images/shadow2.png" alt="img"> </div>
    <h2> Press Releases </h2>
    <div class="row">
     <?php
          
            $press_the_news=get_posts('numberposts=3&post_type=press_the_news&order=ASC');
            foreach($press_the_news as $press){
            setup_postdata($press);
            $pressimage=wp_get_attachment_image_src(get_post_thumbnail_id($press->ID),'full');
            ?>
      <div class="col-md-4">
        <div class="NEWS press2">
          <div class="date-sec"> <?php echo get_the_date('M')." ";  echo get_the_date('j')." , ";echo get_the_date('Y'); ?> </div>
          <h3><?php echo $heading1 = get_field( "heading",$press->ID ); ?></h3>
          <p><?php echo strip_tags(substr(get_the_content($press->ID),0,200));?></p>
          <a href="<?php the_permalink($press->ID)?>"> Read More </a> </div> 
      </div>
      <?php } ?>
     <!-- <div class="col-md-4">
        <div class="NEWS press2">
          <div class="date-sec"> June 23, 2019 </div>
          <h3> Lorem ipsum dolor sit amet, <br>
            consectetur adipiscing elit</h3>
          <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
          <a href="#"> Read More </a> </div>
      </div>
      <div class="col-md-4">
        <div class="NEWS press2">
          <div class="date-sec"> June 23, 2019 </div>
          <h3> Lorem ipsum dolor sit amet, <br>
            consectetur adipiscing elit</h3>
          <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
          <a href="#"> Read More </a> </div>
      </div>-->
    </div>
  </div>
</div>
<!-- /BODY -->  
<?php get_footer(); ?>