<?php
/**
  Template Name:Impact Areas
 
 */

get_header(); ?>
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->

<div class="clearfix"></div>
<div class="approach">
  <div class="container">
    <div class="approach-sec">
      <h2><span><?php the_title();?><span></span></span></h2>
      <div class="col-sec3">
        <div class="approachdiv-part"> <img src="<?php echo $image[0]; ?>" alt="img"> </div>
      </div>
      <div class="col-sec8 new-col-sec8">  
        <div class="approachdiv-part">
         <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="health"> 
<div class="container">
<h2> <?php echo  get_field( "second_heading"); ?></h2>
     <div class="row">
     <div class="col-md-4">
     <a href="" class="health-sec">
     <span> <img src="<?php echo  get_field( "box_1_icon"); ?>" alt="img"> </span>
   <?php echo  get_field( "box_1_content"); ?>
     </a> 
     </div>
     
     <div class="col-md-4">
     <a href="" class="health-sec">
     <span> <img src="<?php echo  get_field( "box_2_icon"); ?>" alt="img"> </span>
    <?php echo  get_field( "box_2_content"); ?>
     </a> 
     </div>
     
     <div class="col-md-4">
     <a href="" class="health-sec">  
     <span> <img src="<?php echo  get_field( "box_3_icon"); ?>" alt="img"> </span>
    <?php echo  get_field( "box_3_content"); ?>
     </a>
     </div>
     </div>
</div>
</div> 

<div class="health-part"> 
<div class="container">
<h2> <?php echo  get_field( "third_heading"); ?> </h2>
<div class="row">
<div class="col-md-4">
<div class="health-part-lft">
 <span> <img src="<?php echo  get_field( "bottom_image"); ?>" alt="img"> </span>
  </div> 
</div>

<div class="col-md-8">
<div class="health-part-rht"> 
<?php echo  get_field( "bottom_content"); ?>
</div> 
</div>
</div>
<div class="up-chack">
<?php echo  get_field( "bottom_second_content"); ?>


</div>



</div>
</div>

<?php endwhile;?>


<?php get_footer(); ?>