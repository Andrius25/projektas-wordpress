<?php
get_header();
/* Template Name: Apie mus */
?>
<?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 2,
          'facetwp' => true
        );
        $query = new WP_Query($args);
        ?>
<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>
<div class="section">
<div class="about">
    <div class="content-section">
        <div class="title">
            <h1><?php echo get_the_title();?> </h1>                    
        </div>
        <div class="content">
            <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione autem fugiat rem. Perferendis corporis eum perspiciatis voluptatibus, doloremque pariatur omnis fugit consectetur optio, reprehenderit ipsam.</h2>
            <p><?php echo the_content(); ?></p>
        </div>
    </div>
    <div class="img-section">
    <?php echo get_the_post_thumbnail() ?>
    </div>
</div>
</div>
<?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
<?php
get_footer();
?>