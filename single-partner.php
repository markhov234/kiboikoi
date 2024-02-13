<?php
get_header(); // Inclure l'en-tête du thème
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while (have_posts()) :
            the_post();

            // Afficher le titre du partenaire
            the_title('<h1>', '</h1>');

            // Afficher la description du partenaire
            $description = get_field('partner_description');
            if ($description) {
                echo '<div class="partner-description">' . $description . '</div>';
            }

            // Afficher l'image du logo du partenaire
            $logo_image = get_field('partner_image');
            if ($logo_image) {
                echo '<img src="' . esc_url($logo_image['url']) . '" alt="' . esc_attr($logo_image['alt']) . '">';
            }

        endwhile;
        ?>
    </main><!-- #main -->
    </div><!-- #primary -->

    <?php
    get_footer(); // Inclure le pied de page du thème
    ?>