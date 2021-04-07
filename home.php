<?php 
get_header();
?>

<div class="container-fluid no-gutters px-0">
    <div class="row no-gutters">


        <div class="col-12 no-gutters single-img-bg position-relative" style="background-image: url('<?= get_stylesheet_directory_uri() . "/assets/img/annexes-feature.jpg"; ?>')">
            <div class="bg-alpha-blue">
                <div class="row justify-content-center align-items-center h-100 w-100 no-gutters">
                    <div class="col-12 text-center the-title">
                        <h1 class="font-title">Annexes</h1>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center the-meta">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/published.svg'; ?>" alt="icon published" class="pl-2 pl-md-0 pr-2">
                        <div class="pr-1">Compléments de lecture.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Content -->
    <div class="row justify-content-center my-2 py-4 pb-2 max-width">
        <?php
                    $args = array( 'numberposts' => 12, 'order'=> 'DESC', 'orderby' => 'date', 'paged' => $paged );
                    $postslist = get_posts($args);

                    foreach ($postslist as $post) :  setup_postdata($post); 
                    $thumbnail = get_the_post_thumbnail($post -> ID, "497x283", array('class' => 'img-fluid'));
                   ?>
        <div class="col-12 col-sm-10 col-md-6 col-xl-4 col-xxl-3">
            <div class="box">
                <article>
                    <!-- Thumb -->
                    <header>


                        <div class="row">
                            <div class="col-12">

                                <a href="<?php the_permalink(); ?>">
                                    <?php echo $thumbnail; ?>
                                </a>
                            </div>

                            <div class="col-12 py-2">
                                <span style="color: #C8C8C8"><?php echo 'Posté le ' . get_the_date(); ?></span>
                            </div>
                        </div>
                    </header>

                    <!-- The title -->
                    <div class="row px-4">
                        <div class="col-12">
                            <h2 class="title-article font-weight-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                    </div>


                    <div class="row position-relative excerpt-wrapper pb-3 px-4">
                        <div class="col-12 pt-1 px-3" style="color: #7a7a7a">
                            <?php the_excerpt(); ?>
                        </div>

                        <!-- Read More -->
                        <div class="col-6 ml-auto text-right pr-3 pt-3 pb-2 ">
                            <a href="<?php the_permalink(); ?>" class="link-alt font-link">
                                Lire la suite →
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
    <div class="row justify-content-center max-width">
        <div class="col-12 text-right my-5 pb-2">

            <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>

        </div>
    </div>
</div>




<?php
get_footer();

?>
