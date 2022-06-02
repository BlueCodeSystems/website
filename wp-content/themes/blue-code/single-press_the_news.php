<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->

<div class="clearfix"></div>

<!---------------------------------------body---------------------------------------->
<div class="bluecode" style="padding:70px 0 80px 0;">
  <div class="shadow1"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow1.png" alt="img"> </div>
  <div class="shadow2"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow2.png" alt="img"> </div>
  <div class="container">
    <h2><span>IN THE NEWS<span></span></span></h2>
    <div class="bluepress-details">
      <div class="bluepress-details-lft"> <span> <img src="<?php echo $image[0]; ?>" alt="img"> </span> </div>
      <div class="bluepress-details-rht">
        <p> <big> <?php echo $heading = get_field( "heading" ); ?></big> </p>
        <div class="date-sec"><?php echo get_the_date('M')." ";  echo get_the_date('j')." , ";echo get_the_date('Y'); ?></div>
      </div>
      <div class="details-box">
       <?php the_content(); ?>
        </div>
      </div>
    </div>
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
          <p> <?php echo strip_tags(substr(get_the_content($press->ID),0,200));?></p>
          <a href="<?php the_permalink($press->ID)?>"> Read More </a> </div>
      </div>
      <?php } ?>
    <!--  <div class="col-md-4">
        <div class="NEWS press2">
          <div class="date-sec"> June 23, 2019 </div>
          <h3> Lorem ipsum dolor sit amet, <br>
            consectetur adipiscing elit</h3>
          <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
          <a href=""> Read More </a> </div>
      </div>
      <div class="col-md-4">
        <div class="NEWS press2">
          <div class="date-sec"> June 23, 2019 </div>
          <h3> Lorem ipsum dolor sit amet, <br>
            consectetur adipiscing elit</h3>
          <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
          <a href=""> Read More </a> </div>
      </div>-->
    </div>
  </div>
</div>

<?php endwhile; ?> 
<?php get_footer(); ?>