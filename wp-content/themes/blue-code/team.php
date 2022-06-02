<?php
/**
  Template Name:Team
 
 */

get_header(); ?>
<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->

<div class="clearfix"></div>

<!---------------------------------------body---------------------------------------->
<div class="teamdiv" style="padding:70px 0 80px 0;">
<div class="container">
<h2><span> Team <span></span></span></h2>
            <?php
          
            $teamlists=get_posts('numberposts=-1&post_type=teamlist&order=ASC');
            foreach($teamlists as $teamlist){
            setup_postdata($teamlist);
            $teamlistimage=wp_get_attachment_image_src(get_post_thumbnail_id($teamlist->ID),'full');
            ?>
            
            
<a href="" class="berto"> <span> <img src="<?php echo $teamlistimage[0]; ?>" alt="img"> </span>
<div class="caption">
<h3> <?php echo get_the_title($teamlist->ID); ?> </h3>
<p> <em> <?php echo get_the_content($teamlist->ID); ?> </em> </p>
</div>
</a>
    
    <?php } ?>
</div>
</div>
<?php get_footer(); ?>