<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- font awesome CSS -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<!-- Owl Stylesheets -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.min.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_url' ); ?>/css/owl.theme.default.min.css" rel="stylesheet">

<!-- animation css -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/aos.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap-datepicker.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/style.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css" rel="stylesheet">
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body>
<!-- header -->
<div class="navbar-wrapper" id="tf-menu">
  <div class="container">
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt=""></a> </div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">About Us</a>
            <div class="MDropdown">
              <ul class="dropdownMenu">
                <!--<li><a href="approach.html">Approach</a></li>
                <li><a href="team.html">Team</a></li>  
                <li><a href="clients-partners.html">Clients &amp; Partners</a></li>
                <li><a href="press.html">Press</a></li>-->
                 <?php
$args = array(
 'order'                  => 'ASC',
 'orderby'                => 'menu_order',
'post_type'              => 'nav_menu_item',
 'post_status'            => 'publish',
 'output'                 => ARRAY_A,
 'output_key'             => 'menu_order',
 'nopaging'               => true,
'update_post_term_cache' => false );
 $items = wp_get_nav_menu_items( 'About Us', $args );
 $page_url = get_permalink();
 foreach($items as $item ) :
 ?>
          <li <?php if($item->url == $page_url){?>class="active"<?php }?>><a href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
          <?php endforeach;?>
              </ul>
              <div class="dropdownContent">
               <?php dynamic_sidebar("Featured-Content-About-Us-Menu"); ?>
                 </div>
            </div>
          </li>
          <li><a href="#">Services</a><div class="MDropdown">
              <ul class="dropdownMenu">
               <?php
         
            $serviceslist=get_posts('numberposts=10&post_type=serviceslist&order=ASC');
            foreach($serviceslist as $services){
            setup_postdata($services);
            ?>
                <li><a href="<?php the_permalink($services->ID)?>"><?php echo get_the_title($services->ID); ?></a></li>
                <?php } ?>
            
                
              </ul>
              <div class="dropdownContent">
                <?php dynamic_sidebar("Featured-Content-Services-Menu"); ?></div>
            </div></li>
          <li><a href="#">Impact Areas</a><div class="MDropdown">
              <ul class="dropdownMenu">
                 <?php
         
            $impacts=get_posts('numberposts=10&post_type=impact_areas_post&order=ASC');
            foreach($impacts as $impact){
            setup_postdata($impact);
            ?>
                <li><a href="<?php the_permalink($impact->ID)?>"><?php echo get_the_title($impact->ID); ?></a></li>
                <?php } ?>
              </ul>
              <div class="dropdownContent">
               <?php dynamic_sidebar("Featured-Content-Impact-Areas-Menu"); ?> </div>
            </div></li>
          <li><a href="#">Insights</a><div class="MDropdown">
              <ul class="dropdownMenu">
                <?php
$args = array(
 'order'                  => 'ASC',
 'orderby'                => 'menu_order',
'post_type'              => 'nav_menu_item',
 'post_status'            => 'publish',
 'output'                 => ARRAY_A,
 'output_key'             => 'menu_order',
 'nopaging'               => true,
'update_post_term_cache' => false );
 $items = wp_get_nav_menu_items( 'INSIGHTS', $args );
 $page_url = get_permalink();
 foreach($items as $item ) :
 ?>
          <li <?php if($item->url == $page_url){?>class="active"<?php }?>><a href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
          <?php endforeach;?>
                
              </ul>
              <div class="dropdownContent">
               <?php dynamic_sidebar("Featured-Content-Insights-Menu"); ?> </div>
            </div></li>
          <li><a href="#">Contact Us</a><div class="MDropdown">
              <ul class="dropdownMenu">
                  <?php
$args = array(
 'order'                  => 'ASC',
 'orderby'                => 'menu_order',
'post_type'              => 'nav_menu_item',
 'post_status'            => 'publish',
 'output'                 => ARRAY_A,
 'output_key'             => 'menu_order',
 'nopaging'               => true,
'update_post_term_cache' => false );
 $items = wp_get_nav_menu_items( 'Contact Us', $args );
 $page_url = get_permalink();
 foreach($items as $item ) :
 ?>
          <li <?php if($item->url == $page_url){?>class="active"<?php }?>><a href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
          <?php endforeach;?>
                
              </ul>
              <div class="dropdownContent">
                <?php dynamic_sidebar("Featured-Content-contact-Menu"); ?></div>
            </div></li>
         
          
          <li class="hidden-sm hidden-xs"><a href="#url1" class="search"> <img src="<?php bloginfo( 'template_url' ); ?>/images/search.png" alt="icon"> </a></li>
          <div class="nav-search hidden-sm hidden-xs" id="search">
            <!--<input type="text" placeholder="Search...">
            <input type="submit" value="">-->
        <form action="<?php echo home_url(); ?>" id="search-form" method="get">
              <input type="text" name="s" id="s" value="Search" onblur="if(this.value=='')this.value='Search'"
    onfocus="if(this.value=='Search')this.value=''" />
              <input type="submit" value="" />
            </form>
          </div>
        </ul>
      </div>
      <div class="blue-searchicon hidden-lg hidden-md"> <a href="#url" class="search"> <img src="<?php bloginfo( 'template_url' ); ?>/images/search.png" alt="icon"> </a>
        <div class="nav-search nav-search2 hidden-lg hidden-md" id="search">
          <!--<input type="text" placeholder="Search...">
          <input type="submit" value="">-->
          <form action="<?php echo home_url(); ?>" id="search-form" method="get">
              <input type="text" name="s" id="s" value="Search" onblur="if(this.value=='')this.value='Search'"
    onfocus="if(this.value=='Search')this.value=''" />
              <input type="submit" value="" />
            </form>
        </div>
      </div>
    </nav>
  </div>
</div>
<div class="clearfix"></div>
<!-- /.header --> 