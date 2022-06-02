<?php
/**
  Template Name:Clients Partners
 
 */

get_header(); ?>
<style>
@media screen and (max-width: 480px) {
.bluecode {
padding: 30px 0 40px 0 !important;
}
}
</style>
<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->

<div class="clearfix"></div>
<div class="partners" style="padding: 70px 0 80px 0;">
  <div class="container">
    <div class="partners-sec">
    <?php while (have_posts()) : the_post(); ?>
      <h2><span><?php the_title(); ?><span></span></span></h2>
     <?php the_content(); ?>
      <?php endwhile;?>
      <div class="row">
         <?php
          
            $our_partners=get_posts('numberposts=-1&post_type=our_partners&order=ASC');
            foreach($our_partners as $our_partner){
            setup_postdata($our_partner);
            $our_partnerimage=wp_get_attachment_image_src(get_post_thumbnail_id($our_partner->ID),'full');
            ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"> <a href="" class="partners-box"> <span><small> <img src="<?php echo $our_partnerimage[0]; ?>" alt="img"></small> </span> </a> </div>
        <?php } ?>

      </div>
    </div>
  </div>
</div>

<!-- /BODY --> 
<?php get_footer(); ?>