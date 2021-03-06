<?php

get_header();
?>


<!-- ð¹ ã©ã³ã­ã³ã°ä¸è¦§ ð¹ -->
<div id="container">


    <?php include('mobileNav.php'); ?>


    <!-- â¨â¨ PC -->
    <?php include('bread.php'); ?>



    <!-- â¨ð PC/SP -->
    <section id="page__title__box" class="pc">

        <h2>ã©ã³ã­ã³ã°</h2>

    </section>



    <!-- â¨ð PC/SP -->
    <div id="contents__box">

        <!-- ð¹ Main Contentsð¹ -->

        <section id="section__box">

            <!-- ç·åã©ã³ã­ã³ã° -->

            <article id="ranking__title__box">
                <h3>ç·åã©ã³ã­ã³ã°</h3>
            </article>

            <?php if(!is_mobile()) : ?>

            <!-- â¨â¨ PC -->
            <article id="ranking__items__box" class="pc">

                <div class="ranking__wrap">

                    <?php wp_reset_postdata();


            $args = array(
                'posts_per_page' => '3',
                'category_name' => 'rankall',
                'post_type' => 'card',
                'meta_key' => 'rankall-number',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );

            $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    $image_id = get_post_thumbnail_id ();
                    $image_url = wp_get_attachment_image_src ($image_id, true);
                    $url = get_field('url');
                    $priceFirst = get_field('price-first');
                    $priceSecond = get_field('price-second');
                    $rankText = "";
                    $starImg = "";
                    $campaignS = get_field('campaign-short');  
                    $rankallNnumber = get_field('rankall-number');
                    $points1 = get_field('points1'); 
                    $points2 = get_field('points2'); 
                    $points3 = get_field('points3'); 

                    if($rankallNnumber == 1) {
                        $rankText = "4.9";
                        $starImg = "/images/ranking/star-1.png";
                    } elseif($rankallNnumber==2) {
                        $rankText = "4.8";
                        $starImg = "/images/ranking/star-1.png";
                    } else {
                        $rankText = "4.7";
                        $starImg = "/images/ranking/star-2.png";
                    } 
                    ?>
                    <div class="ranking__item__wrap rank<?php echo $i; ?>">

                        <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank"><img
                                src="<?php echo $image_url[0]; ?>" alt=""></a>

                        <div class="title__wrap">
                            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank"><?php the_title(); ?></a>
                        </div>

                        <div class="star__wrap">
                            <div class="star"><img src="<?php bloginfo('template_url'); ?><?php echo $starImg ?>"
                                    alt=""></div>
                            <span class="number">
                                <?php echo $rankText; ?>
                            </span>
                        </div>

                        <div class="text__wrap">
                            <?php the_excerpt(); ?>
                        </div>

                        <div class="rank__btn__wrap">

                            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="koushiki__btn prrrr"
                                target="_blank">ç³ãè¾¼ã¿ã¯ãã¡ã</a>
                            <a href="<?php the_permalink(); ?>" class="syousai__btn">è©³ç´°ãè¦ã</a>

                        </div>

                    </div>
                    <?php $i++; endwhile; endif; wp_reset_query(); ?>

                </div>


                <a href="<?php echo home_url('/rankingall'); ?>" class="link__wrap">
                    ç·åã©ã³ã­ã³ã°ä¸è¦§ã¸
                </a>

            </article>


            <?php else : ?>

            <!-- ðð SP -->
            <article id="ranking__items__box" class="sp swiper-container-ranktop">

                <div class="ranking__wrap swiper-wrapper">
                    <?php $args = array(
                'posts_per_page' => '3',
                'category_name' => 'rankall',
                'post_type' => 'card',
                'meta_key' => 'rankall-number',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );

            $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    $image_id = get_post_thumbnail_id ();
                    $image_url = wp_get_attachment_image_src ($image_id, true);
                    $url = get_field('url');
                    $priceFirst = get_field('price-first');
                    $priceSecond = get_field('price-second');
                    $rankText = "";
                    $starImg = "";
                    $campaign = get_field('campaign-descript');  
                    $campaignS = get_field('campaign-short'); 
                    $rankallNnumber = get_field('rankall-number');
                    $points1 = get_field('points1'); 
                    $points2 = get_field('points2'); 
                    $points3 = get_field('points3'); 

                    if($rankallNnumber == 1) {
                        $rankText = "4.9";
                        $starImg = "/images/ranking/star-1.png";
                    } elseif($rankallNnumber==2) {
                        $rankText = "4.8";
                        $starImg = "/images/ranking/star-1.png";
                    } else {
                        $rankText = "4.7";
                        $starImg = "/images/ranking/star-2.png";
                    } 
                    ?>
                    <div class="ranking__item__wrap rank<?php echo $i; ?> swiper-slide">

                        <div class="title__wrap">
                            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank"><?php the_title(); ?></a>
                        </div>

                        <div class="ranking__item__top">


                            <div class="image__wrap">
                                <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank"><img
                                        src="<?php echo $image_url[0]; ?>" alt=""></a>
                            </div>



                            <div class="manzoku__wrap">

                                <div class="manzoku__content">

                                    <h4>ç·åæºè¶³åº¦</h4>
                                    <div class="star__wrap">

                                        <div class="star"><img
                                                src="<?php bloginfo('template_url'); ?><?php echo $starImg ?>" alt="">
                                        </div>

                                        <span class="number">
                                            <?php echo $rankText; ?>
                                        </span>

                                    </div>

                                    <!-- <div class="review__btn">

                                        <a href="">å£ã³ããè¦ã</a>
                                    </div> -->

                                </div>

                            </div>

                        </div>

                        <!-- å£ã³ã -->
                        <div class="review__wrap" style="display:none"></div>

                        <div class="ranking__item__middle">
                            <div class="points__wrap">
                                <h4>ãããããã3ã¤ã®ãã¤ã³ã</h4>
                                <ul class="points__list">
                                    <li><?php echo $points1; ?></li>
                                    <li><?php echo $points2; ?></li>
                                    <li><?php echo $points3; ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ranking__item__bottom">
                            <div class="date__wrap">ã­ã£ã³ãã¼ã³å®æ½ä¸­ï¼</div>
                            <div class="btn__wrap__sp">
                                <a class="koushiki__btn" href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                                    å¬å¼ãµã¤ããè¦ã
                                    
                                </a>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="syousai__btn">
                                è©³ç´°ãè¦ã
                            </a>

                        </div>

                    </div>
                    <?php $i++; endwhile; endif; wp_reset_query(); ?>

                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </article>


            <article id="more__button__ranking" class="sp">
                <a href="<?php echo home_url('/rankingall'); ?>">
                    <span>ç·åã©ã³ã­ã³ã°ããã£ã¨è¦ã</span>

                </a>
            </article>





            <!-- ðð SP -->
            <?php include ("components/sp-feature.php"); ?>




            <!-- ðð SP -->
            <?php include ("components/sp-banner.php"); ?>

            <?php endif; ?>

            <article id="ranking__ninki__box">

                <h3 class="pc">äººæ°ã©ã³ã­ã³ã°</h3>
                <h3 class="sp">äººæ°ã©ã³ã­ã³ã°ããæ¢ã</h3>

                <ul class="ranking__ninki__list__wrap">

                    <!-- <li><a href="">2021å¹´äººæ°ã©ã³ã­ã³ã°</a></li> -->
                    <li><a data-name="all" href="<?php echo home_url('/rankingall'); ?>">ç·åã©ã³ã­ã³ã°</a></li>
                    <li><a data-name="price" href="<?php echo home_url('/rankingprice'); ?>">å¹´ä¼è²»ç¡æã©ã³ã­ã³ã°</a></li>
                    <li><a data-name="point" href="<?php echo home_url('/rankingpoint'); ?>">ãã¤ã³ãéåçã©ã³ã­ã³ã°</a></li>
                    <!-- <li><a href="">ãã¤ã«ãè²¯ã¾ãã©ã³ã­ã³ã°</a></li> -->
                    <!-- <li><a href="">ã¹ãã¼ã¿ã¹ã«ã¼ãã©ã³ã­ã³ã°</a></li> -->
                    <li><a data-name="speed" href="<?php echo home_url('/rankingspeed'); ?>">çºè¡ã¹ãã¼ãã©ã³ã­ã³ã°</a></li>
                    <li><a data-name="etc" href="<?php echo home_url('/rankingetc'); ?>">ETCã«ã¼ãã©ã³ã­ã³ã°</a></li>
                    <li><a data-name="business" href="<?php echo home_url('/rankingbusiness'); ?>">åäººäºæ¥­ä¸»ã»æ³äººã©ã³ã­ã³ã°</a>
                    </li>

                </ul>

            </article>

        </section>





        <!-- Sidebar -->
        <!-- â¨â¨ PC -->
        <?php get_sidebar(); ?>

    </div>

</div>



<?php get_footer(); ?>