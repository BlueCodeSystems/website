<?php
/**
  Template Name:Articles
 
 */

get_header(); ?>

<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->

<div class="clearfix"></div>
<div class="articals">
  <div class="container">
    <h2><span><?php the_title(); ?><span></span></span></h2>
    <div class="row">
    <?php
         
            $articles=get_posts('numberposts=-1&post_type=articles&order=ASC');
            foreach($articles as $article){
            setup_postdata($article);
            
            $articlesimage=wp_get_attachment_image_src(get_post_thumbnail_id($article->ID),'full');
            ?>
   <div class="postdiv">
         <div class="col-md-4">
        <div class="articals-lft"> <span> <img src="<?php echo $articlesimage[0]; ?>" alt="img"> </span> </div>
      </div>
      <div class="col-md-8">
        <div class="articals-rht">
          <h3> <?php echo get_the_title($article->ID); ?> </h3>
          <div class="Posteddiv"> <span> Posted on <big>5 april, 2019</big> </span> <!--<span> <em> <img src="<?php bloginfo( 'template_url' ); ?>/images/articles-listing-icon1.png" alt="img"> <small> 400 </small> </em> <em> <img src="<?php bloginfo( 'template_url' ); ?>/images/articles-listing-icon2.png" alt="img"> <small> <?php echo do_shortcode('[views id="1"]'); ?> </small> </em> </span>--> </div>
          <p> <?php echo strip_tags(substr(get_the_content($article->ID),0,500));?> <a href="<?php the_permalink($article->ID)?>">[…]</a> </p>
        </div>
      </div>
      </div>
      <?php } ?>
      
 
    </div>
    
    
   <!-- <ul class="pagination">
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
    
    -->
  </div>
</div>

<!-- /BODY --> 
<?php get_footer(); ?>