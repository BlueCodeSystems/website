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
      <h2><span>Health<span></span></span></h2>
      <div class="col-sec3">
        <div class="approachdiv-part"> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-IMG1.jpg" alt="img"> </div>
      </div>
      <div class="col-sec8 new-col-sec8">  
        <div class="approachdiv-part">
          <h3> Fruitcake chocolate cake pudding cupcake cookie cotton candy </h3>
          <p> Croissant cotton candy carrot cake cotton candy sugar plum wafer macaroon. Biscuit oat cake tiramisu marshmallow. Danish gummi bears croissant donut lemon drops croissant cheesecake. Gingerbread tiramisu halvah croissant topping. Muffin oat cake sweet toffee dessert lollipop ice cream sesame snaps muffin. Chupa chups macaroon tiramisu halvah pudding halvah. Dragée sweet halvah cupcake fruitcake sweet cheesecake caramels oat cake. Cheesecake chocolate chocolate bar candy chupa chups soufflé marshmallow carrot cake gummies. Tootsie roll gingerbread halvah bear claw pudding cake icing. Liquorice chocolate bar dessert croissant lemon drops oat cake. Jelly beans croissant tiramisu chocolate cake apple pie chocolate bar. Cookie ice cream macaroon cupcake chocolate cake. Biscuit caramels bonbon croissant. </p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="health"> 
<div class="container">
<h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
     sed do eiusmod tempor incididunt	</h2>
     <div class="row">
     <div class="col-md-4">
     <a href="" class="health-sec">
     <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
     <h3> Lorem ipsum dolor sit amet,
consectetur adipiscing elit </h3>
 <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
     </a> 
     </div>
     
     <div class="col-md-4">
     <a href="" class="health-sec">
     <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
     <h3> Lorem ipsum dolor sit amet,
consectetur adipiscing elit </h3>
 <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
     </a> 
     </div>
     
     <div class="col-md-4">
     <a href="" class="health-sec">  
     <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
     <h3> Lorem ipsum dolor sit amet,
consectetur adipiscing elit </h3>
 <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
     </a>
     </div>
     </div>
</div>
</div> 

<div class="health-part"> 
<div class="container">
<h2> Fruitcake chocolate cake pudding cupcake cookie </h2>
<div class="row">
<div class="col-md-4">
<div class="health-part-lft">
 <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-IMG2.jpg" alt="img"> </span>
  </div> 
</div>

<div class="col-md-8">
<div class="health-part-rht"> 
 <p> Croissant cotton candy carrot cake cotton candy sugar plum wafer macaroon. Biscuit oat cake tiramisu marshmallow. Danish gummi bears croissant donut lemon drops croissant cheesecake. Gingerbread tiramisu halvah croissant topping. Muffin oat cake sweet toffee dessert lollipop ice cream sesame snaps muffin. Chupa chups macaroon tiramisu halvah pudding halvah. Dragée sweet halvah cupcake fruitcake sweet cheesecake caramels oat cake. Cheesecake chocolate chocolate bar candy chupa chups soufflé marshmallow carrot cake gummies. Tootsie roll gingerbread halvah bear claw pudding cake icing. Liquorice chocolate bar dessert croissant lemon drops oat cake. Jelly beans croissant tiramisu chocolate cake apple pie chocolate bar. Cookie ice cream macaroon cupcake chocolate cake. Biscuit caramels bonbon croissant. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue. </p>
</div> 
</div>
</div>
<div class="up-chack">
<p> These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
 </p><br> 
<p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>


</div>



</div>
</div>

<?php endwhile;?>


<?php get_footer(); ?>