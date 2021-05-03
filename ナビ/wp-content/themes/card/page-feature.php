<?php
get_header();
?>


<!-- 🌹 総合ランキング 🌹 -->
<div id="container">


    <?php //include('mobileNav.php'); ?>

    <!-- ✨✨ PC -->
    <?php if(!is_mobile()) : ?>
    <?php include('bread.php'); ?>
    <?php endif; ?>



    <!-- ✨💎 PC/SP -->
    <section id="page__title__box" class="pc">

        <h2>お得な特集</h2>

    </section>

    <section id="page__title__box__sp" class="sp">

        <h2>お得な特集</h2>

    </section>


    <!-- ✨💎 PC/SP -->
    <div id="contents__box">

        <!-- 🌹 Main Contents🌹 -->

        <section id="section__box">

            <!-- 総合ランキング -->

            <!-- ✨💎 PC/SP -->
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
                                    さらに詳しく見る
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- loop end -->
                    <?php $i++; endwhile; endif; wp_reset_query(); ?>


                </div>

            </article>


            <!-- 💎💎 SP -->
            <?php include 'components/sp-ranklist.php'; ?>



            <!-- 💎💎 SP -->
            <?php include 'components/sp-feature.php'; ?>




            <!-- 💎💎 SP -->
            <?php include 'components/sp-banner.php'; ?>


        </section>




        <!-- Sidebar -->
        <!-- ✨✨ PC -->
        <?php get_sidebar(); ?>


    </div>

</div>


<?php get_footer(); ?>