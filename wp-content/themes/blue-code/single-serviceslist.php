<?php


get_header(); ?>
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>

<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->

<div class="clearfix"></div>
<div class="service-banner"> <img src="<?php echo $image[0]; ?>" width="100%" alt="img">
  <div class="text-caption"> <span> <big> Our Services </big> </span> </div>
  <div class="shadow11 hidden-md hidden-sm hidden-xs"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow11.png" alt="img"> </div>
  <div class="shadow22 hidden-md hidden-sm hidden-xs"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow22.png" alt="img"> </div>
</div>
<div class="service-tab">

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="servicesdiv">
        <div class="container">
          <h2><span><?php the_title(); ?><span></span></span></h2>
          <div class="health">
           
              <?php the_content(); ?>
              <div class="row">
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php echo  get_field( "box1_icon"); ?>" alt="img"> </span>
                  <?php echo  get_field( "box1_content"); ?>
                  </a> </div>
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php echo  get_field( "box2_icon"); ?>" alt="img"> </span>
                <?php echo  get_field( "box2_content"); ?>
                  </a> </div>
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php echo get_field( "box3_icon"); ?>" alt="img"> </span>
                 <?php echo  get_field( "box3_content"); ?>
                  </a> </div>
              </div>
            </div>
        
          <div class="chocolate">
            <h4> <?php echo  get_field( "bottom_heading"); ?></h4>
            <div class="row">
              <div class="chocolate-sec">
                <div class="col-md-4">
                  <div class="chocolate-lft"> <img src="<?php echo  get_field( "bottom_image_1"); ?>" alt="img"> </div>
                </div>
                <div class="col-md-8">
                  <div class="chocolate-rht">
                    <p><?php echo  get_field( "bottom_content_1"); ?></p>
                  </div>
                </div>
              </div>
              <div class="chocolate-sec">
                <div class="col-md-4 col-md-push-8">
                  <div class="chocolate-lft"> <img src="<?php echo  get_field( "bottom_image_2"); ?>" alt="img"> </div>
                </div>
                <div class="col-md-8 col-md-pull-4">
                  <div class="chocolate-rht">
                    <p><?php echo  get_field( "bottom_content_2"); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</div>
</div>
<div class="shadow111 hidden-md hidden-sm hidden-xs"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow111.png" alt="img"> </div>
<div class="shadow222 hidden-md hidden-sm hidden-xs"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow222.png" alt="img"> </div>

<!-- /BODY --> 

<?php endwhile;?>


<?php get_footer(); ?>