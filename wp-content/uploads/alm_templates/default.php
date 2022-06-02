<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<div class="col-md-4">
<div class="NEWS"> <span> <img src="<?php echo $url ?>" alt="img"> </span>
          <h3><?php echo $heading = get_field( "heading" ); ?></h3>
          <div class="date-sec"> <?php the_time("F d, Y"); ?> </div>
          <?php echo strip_tags(substr(get_the_content(),0,200));?>
          <a href="<?php the_permalink($post->ID)?>"> Read More </a> </div>  
      </div>