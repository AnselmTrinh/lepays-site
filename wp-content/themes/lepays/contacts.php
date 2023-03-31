<?php 
/* 
Template Name: Page Contact
This is a custom template for a contact page. It will display a contact form and contact information.

The header template will be included. 
*/
get_header(); 
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- The contact form with inputs for name, email, subject and message. The action attribute is set to the current page URL, which will process the form data. -->
            <form action="<?php the_permalink(); ?>" method="post">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
</div>
<section class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Contact information section with address, phone number, and email address. The information is retrieved from the customizer settings. -->
            <h2>Informations de contact</h2>
            <ul class="list-unstyled">
                <li><i class="fas fa-map-marker-alt"></i> Adresse : 6 Rue du Colonel Gucci
                    <?php echo get_theme_mod('adresse'); ?></li>
                <li><i class="fas fa-phone-alt"></i> Téléphone : quatre vingt deux soixante et onze cinquante deux
                    <?php echo get_theme_mod('telephone'); ?></li>
                <li><i class="fas fa-envelope"></i> Email : anselmDtrinh@Onepiece.com
                    <?php echo get_theme_mod('email'); ?></li>
            </ul>
            <!-- Display the contact form using the shortcode retrieved from the customizer settings. -->
            <?php echo do_shortcode(get_theme_mod('formulaire_contact')); ?>
        </div>
    </div>
</section>
<?php 
// The footer template will be included.
get_footer(); 
?>