<?php


get_header(); ?>
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>

<div class="clearfix"></div>
<!-- BODY
================================================== -->

<div class="clearfix"></div>
<div class="articals articals2">
  <div class="container">
    <h2><span>Presentations<span></span></span></h2>
    <div class="row">
      <div class="postdiv postdiv2">
        <div class="col-md-6">
          <div class="articals-lft articals-lft2"> <span> <img src="<?php echo $image[0]; ?>" alt="img"> </span> </div>
        </div>
        <div class="col-md-6">
          <div class="articals-rht articals-rht2">
            <h3> <?php the_title(); ?> </h3>
            <div class="Posteddiv"> <span> Posted on <big><?php echo get_the_date('j'); ?> <?php echo get_the_date('M'); ?> , <?php echo get_the_date('Y'); ?></big> </span> <span>  <em> <img src="<?php bloginfo( 'template_url' ); ?>/images/articles-listing-icon2.png" alt="img"> <small> <?php if(function_exists('the_views')) { the_views(); } ?> </small> </em> </span> </div>
            <p> <?php the_content(); ?> </p>
          </div>
        </div>
      </div>
    </div>
    <div class="blue-articles">
      <h3>  <?php echo  get_field( "second_heading"); ?> </h3>
      <p>  <?php echo  get_field( "second_content"); ?></p>
    </div>
    <div class="blue-articles">
      <h3>  <?php echo  get_field( "third_heading"); ?> </h3>
      <p>  <?php echo  get_field( "third_content"); ?> </p>
    </div>
  </div>
</div>

<!-- /BODY --> 

<?php endwhile;?>


<?php get_footer(); ?>