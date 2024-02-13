<section class="home-partner-section">
    <div class="home-partner-topwave">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 82" preserveAspectRatio="xMinYMin meet" fill="none">
            <path fill="#273E22" d="M0 22.5c490.574-71.185 715.237 54.093 1441 1.196V82H0V22.5Z" />
        </svg> -->


    </div>
    <h2 class="home-partner-title">Partenaires</h2>
    <div class="home-partner-grid">
        <?php
        $args = array(
            'post_type' => 'partner', // Your custom post type name
            'posts_per_page' => 10, // Number of partner posts to display
        );

        $partner_query = new WP_Query($args);

        if ($partner_query->have_posts()) :
            while ($partner_query->have_posts()) : $partner_query->the_post();
                // Get the permalink of the partner post
                $permalink = get_permalink();
        ?>

                <a class="home-partner-button" href="<?php echo esc_url($permalink); ?>">
                    <p class="home-partner-text"><?php the_title(); ?></p>
                    <?php
                    $logo_image = get_field('partner_image');
                    if ($logo_image) {
                        echo '<img class="home-partner-img" src="' . esc_url($logo_image['url']) . '" alt="' . esc_attr($logo_image['alt']) . '">';
                    }
                    ?>
                </a>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo 'No partner posts found';
        endif;
        ?>
    </div>
</section>