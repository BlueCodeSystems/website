<?php
/**
  Template Name:Job Opportunity
 
 */

get_header(); ?>
<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
<div class="clearfix"></div>
<div class="mapdiv">
  <?php echo get_field( "map"); ?>
</div>
<div class="bluecode">
  <div class="container">
    <h2><span><?php the_title(); ?><span></span></span></h2>
    <div class="row">
      <div class="col-md-6">
        <div class="bluecode-lft">
          <h3> <?php the_title(); ?> </h3>
          <?php echo do_shortcode('[contact-form-7 id="246" title="Job Opportunity"]'); ?></div>
      </div>
      <div class="col-md-6">
        <div class="bluecode-rht">
           <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile;?>
<!-- /BODY -->
<?php get_footer(); ?>