<?php


get_header(); ?>
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>

<!-- Carousel
================================================== -->

<div class="clearfix"></div>

<!-- BODY
================================================== -->

<div class="clearfix"></div>
<div class="service-banner"> <img src="<?php bloginfo( 'template_url' ); ?>/images/service-banner.jpg" width="100%" alt="img">
  <div class="text-caption"> <span> <big> Our Services </big> </span> </div>
  <div class="shadow11 hidden-md hidden-sm hidden-xs"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow11.png" alt="img"> </div>
  <div class="shadow22 hidden-md hidden-sm hidden-xs"> <img src="<?php bloginfo( 'template_url' ); ?>/images/black-white-shadow22.png" alt="img"> </div>
</div>
<div class="service-tab">
  <!--<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Strategy & Advocacy</a></li>
    <li><a data-toggle="pill" href="#menu1">Implementation & Management </a></li>
    <li><a data-toggle="pill" href="#menu2">Optimization Impact</a></li>
  </ul>-->
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="servicesdiv">
        <div class="container">
          <h2><span>Strategy & Advocacy<span></span></span></h2>
          <div class="health">
           
              <h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
                sed do eiusmod tempor incididunt </h2>
              <div class="row">
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
                  <h3> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit </h3>
                  <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
                  </a> </div>
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
                  <h3> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit </h3>
                  <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
                  </a> </div>
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
                  <h3> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit </h3>
                  <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
                  </a> </div>
              </div>
            </div>
        
          <div class="chocolate">
            <h4> Fruitcake chocolate cake pudding cupcake cookie</h4>
            <div class="row">
              <div class="chocolate-sec">
                <div class="col-md-4">
                  <div class="chocolate-lft"> <img src="<?php bloginfo( 'template_url' ); ?>/images/service-img1.jpg" alt="img"> </div>
                </div>
                <div class="col-md-8">
                  <div class="chocolate-rht">
                    <p> Croissant cotton candy carrot cake cotton candy sugar plum wafer macaroon. Biscuit oat cake tiramisu marshmallow. Danish gummi bears croissant donut lemon drops croissant cheesecake. Gingerbread tiramisu halvah croissant topping. Muffin oat cake sweet toffee dessert lollipop ice cream sesame snaps muffin. Chupa chups macaroon tiramisu halvah pudding halvah. Dragée sweet halvah cupcake fruitcake sweet cheesecake caramels oat cake. Cheesecake chocolate chocolate bar candy chupa chups soufflé marshmallow carrot cake gummies. Tootsie roll gingerbread halvah bear claw pudding cake icing. Liquorice chocolate bar dessert croissant lemon drops oat cake. Jelly beans croissant tiramisu chocolate cake apple pie chocolate bar. Cookie ice cream macaroon cupcake chocolate cake. Biscuit caramels bonbon croissant. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue. </p>
                  </div>
                </div>
              </div>
              <div class="chocolate-sec">
                <div class="col-md-4 col-md-push-8">
                  <div class="chocolate-lft"> <img src="<?php bloginfo( 'template_url' ); ?>/images/service-img2.jpg" alt="img"> </div>
                </div>
                <div class="col-md-8 col-md-pull-4">
                  <div class="chocolate-rht">
                    <p> Croissant cotton candy carrot cake cotton candy sugar plum wafer macaroon. Biscuit oat cake tiramisu marshmallow. Danish gummi bears croissant donut lemon drops croissant cheesecake. Gingerbread tiramisu halvah croissant topping. Muffin oat cake sweet toffee dessert lollipop ice cream sesame snaps muffin. Chupa chups macaroon tiramisu halvah pudding halvah. Dragée sweet halvah cupcake fruitcake sweet cheesecake caramels oat cake. Cheesecake chocolate chocolate bar candy chupa chups soufflé marshmallow carrot cake gummies. Tootsie roll gingerbread halvah bear claw pudding cake icing. Liquorice chocolate bar dessert croissant lemon drops oat cake. Jelly beans croissant tiramisu chocolate cake apple pie chocolate bar. Cookie ice cream macaroon cupcake chocolate cake. Biscuit caramels bonbon croissant. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="servicesdiv">
        <div class="container">
          <h2><span>Implementation & Management<span></span></span></h2>
          <div class="health">
          
              <h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
                sed do eiusmod tempor incididunt </h2>
              <div class="row">
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
                  <h3> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit </h3>
                  <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
                  </a> </div>
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
                  <h3> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit </h3>
                  <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
                  </a> </div>
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
                  <h3> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit </h3>
                  <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
                  </a> </div>
              </div>
            </div>

          <div class="chocolate">
            <h4> Fruitcake chocolate cake pudding cupcake cookie</h4>
            <div class="row">
              <div class="chocolate-sec">
                <div class="col-md-4">
                  <div class="chocolate-lft"> <img src="<?php bloginfo( 'template_url' ); ?>/images/service-img1.jpg" alt="img"> </div>
                </div>
                <div class="col-md-8">
                  <div class="chocolate-rht">
                    <p> Croissant cotton candy carrot cake cotton candy sugar plum wafer macaroon. Biscuit oat cake tiramisu marshmallow. Danish gummi bears croissant donut lemon drops croissant cheesecake. Gingerbread tiramisu halvah croissant topping. Muffin oat cake sweet toffee dessert lollipop ice cream sesame snaps muffin. Chupa chups macaroon tiramisu halvah pudding halvah. Dragée sweet halvah cupcake fruitcake sweet cheesecake caramels oat cake. Cheesecake chocolate chocolate bar candy chupa chups soufflé marshmallow carrot cake gummies. Tootsie roll gingerbread halvah bear claw pudding cake icing. Liquorice chocolate bar dessert croissant lemon drops oat cake. Jelly beans croissant tiramisu chocolate cake apple pie chocolate bar. Cookie ice cream macaroon cupcake chocolate cake. Biscuit caramels bonbon croissant. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue. </p>
                  </div>
                </div>
              </div>
              <div class="chocolate-sec">
                <div class="col-md-4 col-md-push-8">
                  <div class="chocolate-lft"> <img src="<?php bloginfo( 'template_url' ); ?>/images/service-img2.jpg" alt="img"> </div>
                </div>
                <div class="col-md-8 col-md-pull-4">
                  <div class="chocolate-rht">
                    <p> Croissant cotton candy carrot cake cotton candy sugar plum wafer macaroon. Biscuit oat cake tiramisu marshmallow. Danish gummi bears croissant donut lemon drops croissant cheesecake. Gingerbread tiramisu halvah croissant topping. Muffin oat cake sweet toffee dessert lollipop ice cream sesame snaps muffin. Chupa chups macaroon tiramisu halvah pudding halvah. Dragée sweet halvah cupcake fruitcake sweet cheesecake caramels oat cake. Cheesecake chocolate chocolate bar candy chupa chups soufflé marshmallow carrot cake gummies. Tootsie roll gingerbread halvah bear claw pudding cake icing. Liquorice chocolate bar dessert croissant lemon drops oat cake. Jelly beans croissant tiramisu chocolate cake apple pie chocolate bar. Cookie ice cream macaroon cupcake chocolate cake. Biscuit caramels bonbon croissant. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <div class="servicesdiv">
        <div class="container">
          <h2><span>Optimization Impact<span></span></span></h2>
          <div class="health">
          
              <h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
                sed do eiusmod tempor incididunt </h2>
              <div class="row">
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
                  <h3> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit </h3>
                  <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
                  </a> </div>
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
                  <h3> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit </h3>
                  <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
                  </a> </div>
                <div class="col-md-4"> <a href="" class="health-sec"> <span> <img src="<?php bloginfo( 'template_url' ); ?>/images/health-icon.png" alt="img"> </span>
                  <h3> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit </h3>
                  <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
                  </a> </div>
              </div>
            </div>
        
          <div class="chocolate">
            <h4> Fruitcake chocolate cake pudding cupcake cookie</h4>
            <div class="row">
              <div class="chocolate-sec">
                <div class="col-md-4">
                  <div class="chocolate-lft"> <img src="<?php bloginfo( 'template_url' ); ?>/images/service-img1.jpg" alt="img"> </div>
                </div>
                <div class="col-md-8">
                  <div class="chocolate-rht">
                    <p> Croissant cotton candy carrot cake cotton candy sugar plum wafer macaroon. Biscuit oat cake tiramisu marshmallow. Danish gummi bears croissant donut lemon drops croissant cheesecake. Gingerbread tiramisu halvah croissant topping. Muffin oat cake sweet toffee dessert lollipop ice cream sesame snaps muffin. Chupa chups macaroon tiramisu halvah pudding halvah. Dragée sweet halvah cupcake fruitcake sweet cheesecake caramels oat cake. Cheesecake chocolate chocolate bar candy chupa chups soufflé marshmallow carrot cake gummies. Tootsie roll gingerbread halvah bear claw pudding cake icing. Liquorice chocolate bar dessert croissant lemon drops oat cake. Jelly beans croissant tiramisu chocolate cake apple pie chocolate bar. Cookie ice cream macaroon cupcake chocolate cake. Biscuit caramels bonbon croissant. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue. </p>
                  </div>
                </div>
              </div>
              <div class="chocolate-sec">
                <div class="col-md-4 col-md-push-8">
                  <div class="chocolate-lft"> <img src="<?php bloginfo( 'template_url' ); ?>/images/service-img2.jpg" alt="img"> </div>
                </div>
                <div class="col-md-8 col-md-pull-4">
                  <div class="chocolate-rht">
                    <p> Croissant cotton candy carrot cake cotton candy sugar plum wafer macaroon. Biscuit oat cake tiramisu marshmallow. Danish gummi bears croissant donut lemon drops croissant cheesecake. Gingerbread tiramisu halvah croissant topping. Muffin oat cake sweet toffee dessert lollipop ice cream sesame snaps muffin. Chupa chups macaroon tiramisu halvah pudding halvah. Dragée sweet halvah cupcake fruitcake sweet cheesecake caramels oat cake. Cheesecake chocolate chocolate bar candy chupa chups soufflé marshmallow carrot cake gummies. Tootsie roll gingerbread halvah bear claw pudding cake icing. Liquorice chocolate bar dessert croissant lemon drops oat cake. Jelly beans croissant tiramisu chocolate cake apple pie chocolate bar. Cookie ice cream macaroon cupcake chocolate cake. Biscuit caramels bonbon croissant. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue. </p>
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