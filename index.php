<?php
/**
 * The main template file
 *
 * This is the BU Metropolitan HiLab theme
 *
 *
 * @since HiLab Theme 1.0
 */

get_header(); ?>
<div id="wrapper">
  <?php get_header("masthead"); ?>
  <div id="content" role="main">
    <div class="container">
      <div id="col1" class="main">
        <div class="container">
          <div class="content-panel" id="">
<?php
if ( have_posts() ){
  if (is_page()) {
    get_template_part('content-page', 'none');
  } else {
    // Start the Loop.
    while (have_posts()) {
      the_post();
      get_template_part('content-post', 'none');
    }
  }
} else {
  // If no content, include the "No posts found" template.
  get_template_part( '404', 'none' );
}
?>
          </div><!-- .content-panel -->
        </div><!-- .container -->
      </div><!-- .main -->
      <div id="col2" class="sub" role="complementary">
        <?php //get_sidebar( 'content' ); ?>
        <?php // get_sidebar(); ?>
      </div><!-- .sub -->
    </div><!-- .container -->
  </div><!--  .container -->
</div><!--/wrapper-->

<?php get_footer(); ?>


</body>
</html>