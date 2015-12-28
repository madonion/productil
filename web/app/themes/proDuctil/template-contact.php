<?php
/**
 * Template Name: Contact Template
 */
?>

<section class="content-block contact-1">
    <div class="container text-center">

        <!-- /.col-sm-10 -->
        <?php while (have_posts()) : the_post(); ?>
            <?php  the_content() ?>
        <?php endwhile; ?>

    </div>
    <!-- /.container -->
</section>
