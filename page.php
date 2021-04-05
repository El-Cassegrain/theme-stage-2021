<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

get_header();
//underboot_content_wrapper_start();
?>

<?php
while ( have_posts() ) :
the_post();
?>

<div class="container-fluid no-gutters px-0">
    <div class="row no-gutters">


        <div class="col-12 no-gutters single-img-bg position-relative" style="background-image: url('<?php the_post_thumbnail_url('1366x313'); ?>')">
            <div class="bg-alpha-blue">
                <div class="row justify-content-center align-items-center h-100 w-100 no-gutters">
                    <div class="col-12 text-center the-title">
                        <h1 class="font-title"><?php the_title(); ?></h1>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center the-meta">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/published.svg'; ?>" alt="icon published" class="pl-2 pl-md-0 pr-2">
                        <div class="pr-1">Publié le <?= get_the_date(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="single-container">
    <div class="row mt-4 justify-content-center mb-5 pb-5">
        <div class="col-12 col-md-10 col-lg-8 px-4 px-md-5">
        <main id="main" class="site-main page">
            <?php the_content(); ?>
        </main>
        </div>
        <div class="col-12 mt-5">
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

<?php 

endwhile; // End of the loop.
          

//underboot_content_wrapper_end();
get_footer();
