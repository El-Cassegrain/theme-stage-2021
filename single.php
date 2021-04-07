<?php 
get_header();

 if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="container-fluid no-gutters px-0">
    <div class="row no-gutters">


        <div class="col-12 no-gutters single-img-bg position-relative" style="background-image: url('<?php the_post_thumbnail_url('1366x313'); ?>')">
            <div class="bg-alpha-blue">
                <div class="row justify-content-center align-items-center h-100 w-100 no-gutters">
                    <div class="col-12 text-center the-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center the-meta">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/published.svg'; ?>" alt="icon published" class="pl-2 pl-md-0 pr-2">
                        <div class="pr-1">Publié dans <?php the_category(); ?></div> - Le <?= get_the_date(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="single-container">
    <div class="row mt-4 justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 px-4 px-md-5">
            <?php the_content(); ?>
        </div>
        <div class="col-12 my-5">
            <div class="d-flex justify-content-between">
                <div class="prev">
                    <?php previous_post_link( '← %link' ); ?>
                </div>
                <div class="next">
                    <?php next_post_link( '%link →' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile; endif;

get_footer();
?>