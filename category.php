<?php get_header(); ?>


<div class="container" id="category-page">
    <!-- Title -->
    <div class="row pt-3 pt-xl-5 title">
        <div class="col-12 text-center">
            <h1 class="title">Catégorie : <br><span class="subtitle"><?php echo single_cat_title(); ?></span></h1>
        </div>
    </div>

    <div class="row justify-content-center my-2 mb-4 pt-4 pb-2">
        <div class="col-12 col-sm-10 col-md-6 about-text">
            <?php echo category_description($category_id); ?>
        </div>

    </div>

    <div class="row align-items-center my-2 pt-4 pb-2 flex-column">
        <div class="col-12 col-sm-10 col-md-6 border-top py-4 pb-3">
            <h2 class="h5 font-content font-weight-normal dark px-3">Tous les articles dans la catégorie
                <?php echo single_cat_title(); ?> :</h2>
        </div>
        <?php 
                    //start WP loop
                    if(have_posts()) : while(have_posts()) : the_post();
                    
                        $thumbnail = get_the_post_thumbnail($post -> ID, "497x283", array('class' => 'img-fluid')); ?>

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
                            <h2 class="title-article font-weight-bold"><a
                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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



        <?php endwhile;  endif;?>

    </div>
</div>


</div>


</main>


<?php get_footer(); ?>