<?php
/**
  Template Name:Approach
 
 */

get_header(); ?>
<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
<div class="clearfix"></div>
<div class="approach">
  <div class="container">
    <div class="approach-sec">
      <h2><span><?php the_title(); ?><span></span></span></h2>
      <div class="col-sec3">
        <div class="approachdiv-part"> <img src="<?php echo $image[0]; ?>" alt="img"> </div>
      </div>
      <div class="col-sec8">
        <div class="approachdiv-part">
        <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cake">
  <div class="container">
    <ul>
    
      <li>
     <div class="col-sec3 newcol-rht hidden-lg hidden-md">
          <div class="cake-part"> <img src="<?php echo $second_section_image = get_field( "second_section_image" ); ?>" alt="img"> </div>
        </div>
        
        <div class="col-sec8 newcol-lft" style="padding:0;"> 
          <div class="cake-part">
            <?php echo $second_section_content = get_field( "second_section_content" ); ?>
          </div>
        </div>
        
     <div class="col-sec3 newcol-rht hidden-sm hidden-xs">
          <div class="cake-part"> <img src="<?php echo $second_section_image; ?>" alt="img"> </div>
        </div>
     </li>
      
      <li>
        <div class="col-sec3 hidden-lg hidden-md">
          <div class="cake-part"> <img src="<?php echo $third_section_image = get_field( "third_section_image" ); ?>" alt="img"> </div>
        </div>
      
      
        <div class="col-sec8" style="padding:0;">
          <div class="cake-part">
            <?php echo $third_section_content = get_field( "third_section_content" ); ?>
          </div>
        </div>
        <div class="col-sec3 hidden-sm hidden-xs">
          <div class="cake-part"> <img src="<?php echo $third_section_image; ?>" alt="img"> </div>
        </div>
      </li>
      
    </ul>
  </div>
</div>


<div class="sugar">
<div class="container">
 
<div class="sugar-rht hidden-lg hidden-md">   
<span> <img src="<?php echo $forth_section_image = get_field( "forth_section_image" ); ?>" alt="img"> </span>
</div>

<div class="sugar-lft"> 
 <?php echo $forth_section_content = get_field( "forth_section_content" ); ?>
</div>

<div class="sugar-rht hidden-sm hidden-xs">   
<span> <img src="<?php echo $forth_section_image; ?>" alt="img"> </span>
</div>

</div>
</div>
<?php endwhile;?>
<!-- /BODY --> 
<?php get_footer(); ?>