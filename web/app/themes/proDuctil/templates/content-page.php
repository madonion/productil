<section id="content-1-4" class="content-block-nopad content-1-4">
    <div class="image-container col-md-5 col-sm-3 pull-left">
        <div class="background-image-holder">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4 content clearfix">
                <?php the_field('customexcerpt'); ?>
                <?php the_content() ?>
            </div>
        </div>
        <!-- /.row-->
    </div>
    <!-- /.container -->
</section>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
