<?php
get_header();
/* Template Name: Kontaktai */
?>
<?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'facetwp' => true,
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
<div class="section">
        <div class="about">
            <div class="content-section">
                <div class="title">
                    <h1><?php echo get_the_title(); ?></h1>                    
                </div>
                <div class="content">
                <?php echo the_content(); ?>
                </div>
            </div>
            <div class="img-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.983423855413!2d25.2901228515795!3d54.70991477930484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96b1c1c3bc9f%3A0xb4eca31b162c5579!2sVilnius%20Coding%20School%20-%20Karjeros%20keitimo%20centras%2C%20programavimo%20kursai!5e0!3m2!1slt!2slt!4v1652959491242!5m2!1slt!2slt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
<?php
get_footer();
?>
