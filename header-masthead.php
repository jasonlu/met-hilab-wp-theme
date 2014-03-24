<div id="header" class="non-entity" role="banner">
  <div class="container">
    <div id="masthead">
        <h1><a href="<?php get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/non-entity-all-white.png" alt="MET Health Informatics Research Lab"></a></h1>
        <p></p>
    </div><!--/#masthead-->
    <div id="pnb" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => null, 'menu_class' => '', 'menu_id' => "nav" ) ); ?>
    </div><!--/#pnb-->
  </div><!--/.container-->
</div><!--/#header-->