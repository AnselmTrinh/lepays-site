<?php
/*
  Template Name: Sports
*/

// Load the header template.
get_header();
?>
<!-- Jumbotron section with a background image -->
<div class="jumbotron jumbotron-fluid text-white"
    style="background-image: url('https://source.unsplash.com/random/1200x800')">
    <div class="container text-center">
        <h1 class="display-4">Bienvenue sur page Sports</h1>
        <p class="lead">Vous trouverez sur cette page les dernière informations de nos sportifs français et calédoniens
            !.</p>
        <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
    </div>
</div>
<!-- Container for displaying the sports posts -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Display the title of the page dynamically -->
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <!-- Fetch and display the sports posts using WP_Query -->
    <div class="row">
        <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 9,
      'category_name' => 'sports'
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
      ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Display the post thumbnail -->
                <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
                <div class="card-body">
                    <!-- Display the post title and excerpt -->
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <!-- Display the "Read more" button with a link to the full post -->
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
                </div>
            </div>
        </div>
        <?php
        endwhile;
        // Reset the post data after the loop.
        wp_reset_postdata();
      else :
        echo '<p class="text-center">Aucun article trouvé</p>';
      endif;
      ?>
    </div>
</div>
<!-- Container for displaying the event registration form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Inscription à l'événement</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="nom">Nom *</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom *</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone *</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" required>
                </div>
                <div class="form-group">
                    <label for="message">Message (optionnel)</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="accepter" name="accepter" required>
                    <label class="form-check-label" for="accepter">J'accepte les conditions d'utilisation *</label>
                </div>
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();