<?php
get_header(); ?>
<?php
    $cat_id = get_queried_object_id('Sports'); // Get the ID of the current object
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'category__in' => $cat_id // Show only posts that have  this category
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
            ?>
<div class="post">
    <h2><?php the_title(); ?></h2>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
</div>
<?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Aucun article trouvé';
    endif;
?>
<?php
function display_related_posts() {
    global $post;
    $page_title = get_the_title();
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        's' => $page_title // search by title
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
?>
<h2>Articles relatifs à "<?php echo $page_title; ?>" :</h2>
<ul>
    <?php while ($query->have_posts()) : $query->the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
</ul>
<?php
    endif;
    wp_reset_postdata();
}
?>



<?php get_footer(); ?>