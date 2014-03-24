<div class="posts">
<div class="content-panel post" id="">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p class="meta">
  <span class="date">
    <strong><?php the_date("F j, Y"); ?></strong>
  </span>
  <span class="category">in
    <?php the_category(",") ?>
    </a>.
  </span>
</p>
<p><?php the_content(); ?></p>
<p class="meta"></p>
</div>


<p class="navigation">
  <?php previous_post_link(); ?>
  <?php //next_post_link( $format, $link, $in_same_cat = false, $excluded_terms = '', $taxonomy = 'category' ); ?>
  <?php next_post_link(); ?>
</p>
</div>