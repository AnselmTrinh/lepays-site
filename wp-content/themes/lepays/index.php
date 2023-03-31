<?php
get_header(); ?>
<!-- CAROUSSEL -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.imgur.com/5ohiLFw.jpg" class="d-block w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="https://i.imgur.com/lE4Fmef.jpg" class="d-block w-100" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="https://i.imgur.com/XQa3LUl.jpg" class="d-block w-100" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- CARTE ARTICLES -->

<main>
    <div class="container my-5">
        <div class="row">
            <?php
        // Query to get the last 3 posts
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query($args);

        // Loop through the posts
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
    ?>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
                        <p class="mt-3"><small class="text-muted"><?php the_category(', '); ?></small></p>
                    </div>
                </div>
            </div>

            <?php
            endwhile;
            wp_reset_postdata();
        endif;
    ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>