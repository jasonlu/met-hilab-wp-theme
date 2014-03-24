<?php
the_post();
the_content();
wp_reset_postdata();

$cat = get_cat_ID($post->post_title); //use page title to get a category ID
$args = array( 'posts_per_page' => 5, 'category' => $cat );
$posts = get_posts($args);

if ($posts && $cat > 0) {
    foreach ($posts as $post) {
        setup_postdata($post);
        get_template_part('content-post', 'none');
    }
}
?>
