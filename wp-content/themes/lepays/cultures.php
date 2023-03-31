<?php
/*
Template Name: Cultures // This is a custom template that will be available for selection when creating a page in WordPress.

This template file is used to display a page that lists posts from the "cultures" category. 

*/

get_header(); // This function loads the header.php template file

?>
<div class="jumbotron jumbotron-fluid text-white"
    style="background-image: url('https://source.unsplash.com/random/1200x800')">
    <div class="container text-center">
        <h1 class="display-4">Bienvenue sur page Cultures</h1>
        <p class="lead">Ici vous serez informer des actualités locales.</p>
        <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="row">
        <?php
    // This is an array of arguments for the WP_Query function that will retrieve posts from the "cultures" category.
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'category_name' => 'cultures'
    );
    $query = new WP_Query($args); // This creates a new instance of the WP_Query class with the arguments passed in the $args array.

    if ($query->have_posts()) : // If there are posts in the query
        while ($query->have_posts()) : // Loop through the posts
            $query->the_post(); // Set up the post data
    ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
                </div>
            </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo '<p class="text-center">Aucun article trouvé</p>'; // Display a message if no posts are found
    endif;
    ?>
    </div>
</div> <!-- End container -->

<?php 
// The footer template will be included.
get_footer(); 
?>