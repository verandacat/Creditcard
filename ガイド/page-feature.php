<?php
get_header();
?>


<!-- ð¹ ç·åã©ã³ã­ã³ã° ð¹ -->
<div id="container">


    <?php //include('mobileNav.php'); ?>

    <!-- â¨â¨ PC -->
    <?php if(!is_mobile()) : ?>
    <?php include('bread.php'); ?>
    <?php endif; ?>



    <!-- â¨ð PC/SP -->
    <section id="page__title__box" class="pc">

        <h2>ãå¾ãªç¹é</h2>

    </section>

    <section id="page__title__box__sp" class="sp">

        <h2>ãå¾ãªç¹é</h2>

    </section>


    <!-- â¨ð PC/SP -->
    <div id="contents__box">

        <!-- ð¹ Main Contentsð¹ -->

        <section id="section__box">

            <!-- ç·åã©ã³ã­ã³ã° -->

            <!-- â¨ð PC/SP -->
            <article id="feature__sub__items__box">

                <div class="feature__sub__wrap">
                    <?php wp_reset_postdata();

                    $args = array(
                        'posts_per_page' => '-1',
                        'post_type' => 'post',
                        'category_name' => 'feature',
                        'meta_key' => 'feature-number',
                        'orderby' => 'date',
                        'order' => 'asc',
                        'post_parent' => 0,
                    );
                    ?>
                    <?php
                     $the_query = new WP_Query( $args );
                     $i = 1;
                     if ( $the_query->have_posts() ) :
                         while ( $the_query->have_posts() ) : $the_query->the_post();
                         $featureImg = get_field('feature-img');
                         $featureName = get_field('feature-name');
                         $featureDes = get_field('feature-descript');
                    ?>

                    <!-- loop -->
                    <div class="feature__sub__item__wrap item<?php echo $i; ?>">

                        <div class="feature__item__content__wrap">

                            <div class="img__wrap">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $featureImg; ?>" alt=""></a>
                            </div>

                            <div class="title__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <div class="text__wrap">
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="link__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    ããã«è©³ããè¦ã
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- loop end -->
                    <?php $i++; endwhile; endif; wp_reset_query(); ?>


                </div>

            </article>


            <!-- ðð SP -->
            <?php include 'components/sp-ranklist.php'; ?>



            <!-- ðð SP -->
            <?php include 'components/sp-feature.php'; ?>




            <!-- ðð SP -->
            <?php include 'components/sp-banner.php'; ?>


        </section>




        <!-- Sidebar -->
        <!-- â¨â¨ PC -->
        <?php get_sidebar(); ?>


    </div>

</div>


<?php get_footer(); ?>