<?php
get_header();
/* Template Name: Apie mus */
?>


<div class="section">
<div class="about">
    <div class="content-section">
        <div class="title">
            <h1><?php echo get_the_title(); ?></h1>                    
        </div>
        <div class="content">
            <p><?php echo the_content(); ?></p>
        </div>
    </div>
    <div class="img-section">
    <?php echo get_the_post_thumbnail()?>
    </div>
</div>
</div>


<?php
get_footer();
?>