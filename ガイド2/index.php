<?php get_header() ?>


<!-- 🌹 検索結果 🌹 -->
<div id="container">


    <?php //include('mobileNav.php'); ?>


    <!-- 🌹 FV 🌹 -->



    <?php if(is_mobile()) : ?>

        
    <!-- 💎💎 SP -->
    
    <section id="fv__box" class="sp swiper-container-3d">
        <h1><span>人気ランキングや希望の条件から</span><br>
            あなたの生活に合ったクレジットカードが見つかる！</h1>

        <div class="swiper-wrapper">

            <?php wp_reset_postdata();

            $args = array(
                'posts_per_page' => '10',
                'category_name' => 'rankall',
                'post_type' => 'card',
                'meta_key' => 'rankall-number',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );
            ?>
            <?php 
            $the_query = new WP_Query( $args );
            $i = 1;
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();

            $image_id = get_post_thumbnail_id ();
            $image_url = wp_get_attachment_image_src ($image_id, true);
            $type = get_field('type');
            $price = get_field('price');
            $brand = get_field('brand');
            $point1 = get_field('point1');
            $point2 = get_field('point2');
            $emoney = get_field('emoney');
            $insurance = get_field('insurance');  
            $campaign = get_field('campaign-descript');   
            $points1 = get_field('points1'); 
            $points2 = get_field('points2'); 
            $points3 = get_field('points3'); 
            $webp = get_field('img-webp');
            ?>
            <!-- <style>
                .no-webp #fv__box .swiper-slide a:first-child {
                    background-image:url("<?php echo $image_url[0]; ?>");
                }
                .webp #fv__box .swiper-slide a:first-child {
                    background-image:url("<?php echo $webp; ?>");
                }
            </style> -->
            <div class="swiper-slide">
                
                
                <a href="<?php the_permalink(); ?>">
                <picture>
                    <source type="image/webp" srcset="<?php echo $webp; ?>">
                    <img src="<?php echo $image_url[0]; ?>" alt="">
                </picture>
                </a>
                
                <a href="<?php the_permalink(); ?>">
                    <i class="fas fa-caret-right"></i><?php the_title(); ?>
                </a>
            </div>


            <?php $i++; endwhile; endif; wp_reset_query(); ?>
        </div>

        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>

    <?php else : ?>

    <!-- ✨✨ PC -->
    <section id="fv__box" class="pc">
    </section>

    <?php endif; ?>


    <!-- ✨💎 PC/SP -->
    <div id="contents__box">

        <!-- 🌹 Main Contents🌹 -->

        <section id="section__box">

            <?php get_search_form(); ?>


            <!-- ✨💎 PC/SP -->
            <!-- PC : 4 SP : 3 -->
            <article id="top__campaign__box" class="swiper-container-cam">

                <h2 class="title__wrap">
                    キャンペーン
                </h2>

                <div class="slide__item__wrap swiper-wrapper">
                    <?php wp_reset_postdata();


                $args = array(
                    'posts_per_page' => '-1',
                    'category_name' => 'campaign',
                    'post_type' => 'card',
                    'meta_key' => 'hyouka',
                    'orderby' => 'meta_value_num',
                    'order' => 'desc',
                );

                $the_query = new WP_Query( $args );
                    $i = 1;
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        $image_id = get_post_thumbnail_id ();
                        $image_url = wp_get_attachment_image_src ($image_id, true);
                        $url = get_field('url');
                        $hyouka = get_field('hyouka');
                        $campaign = get_field('campaign-descript'); 
                        $webp = get_field('img-webp');
                        ?>
                    <!-- loop -->
                    <div class="swiper-slide">
                        <div class="slide__item item<?php echo $i; ?>">
                            <div class="img__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <picture>
                                        <source type="image/webp" srcset="<?php echo $webp; ?>">
                                        <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
                                    </picture>
                                </a>
                            </div>

                            <div class="title__wrap">
                                <a href="<?php the_permalink(); ?>">
                                
                                    <?php the_title(); ?>
                                
                                </a>
                            </div>

                            <ul class="text__wrap">
                                <?php echo $campaign; ?>
                            </ul>

                            <div class="data__wrap">
                                キャンペーン<span class="red">実施中！</span>
                                <!-- 2020年<span class="red">12月31日</span> まで -->
                            </div>

                            <div class="link__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    詳細を見る
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- loop -->
                    <?php endwhile; endif; wp_reset_query(); ?>

                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="btn__wrap">
                    <a href="<?php echo home_url('/campaign'); ?>">
                        キャンペーン一覧へ
                    </a>
                </div>

            </article>



            <!-- ✨✨ PC -->
            <!-- PC : No Slider -->
            <article id="top__ranking__box" class="pc">

                <h2 class="title__wrap">
                    総合ランキング
                </h2>

                <div class="top__ranking__wrap ">

                    <?php wp_reset_postdata();
                $args = array(
                    'posts_per_page' => '3',
                    'category_name' => 'rankall',
                    'post_type' => 'card',
                    'meta_key' => 'rankall-number',
                    'orderby' => 'meta_value_num',
                    'order' => 'asc',
                    'post_parent' => 0,
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
                        $descript = get_field('description');
                        $webp = get_field('img-webp');

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
                    <!-- loop -->

                    <div class="top__ranking__item item<?php echo $i; ?> swiper-slide" data-color="<?php echo $i; ?>">


                        <img class="badge rank__<?php echo $i; ?>"
                            src="<?php bloginfo('template_url'); ?>/images/sidebar/ranking/rank__0<?php echo $i; ?>.png"
                            alt="">
                        <img class="badge__bg" src="<?php bloginfo('template_url'); ?>/images/contents/badge__bg.png"
                            alt="">

                        <div class="img__wrap">
                            <a href="<?php the_permalink(); ?>">
                                <picture>
                                    <source type="image/webp" srcset="<?php echo $webp; ?>">
                                    <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
                                </picture>
                            </a>
                        </div>

                        <div class="title__wrap">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>

                        <div class="point__wrap">

                            <div class="row">

                                <p class="text__left">総合評価</p>
                                <div class="text__right star__wrap">

                                    <div class="star">
                                        <img src="<?php bloginfo('template_url'); ?>/images/sidebar/ranking/star-1.png"
                                            alt="">
                                    </div>

                                </div>
                            </div>

                            <div class="row">

                                <p class="text__left">年会費初年度</p>
                                <div class="text__right">
                                    <?php echo $priceFirst; ?>
                                </div>

                            </div>

                            <div class="row">

                                <p class="text__left">年会費2年目～</p>
                                <div class="text__right">
                                    <?php echo $priceSecond; ?>
                                </div>

                            </div>

                        </div>

                        <div class="text__wrap">
                            <?php echo the_excerpt(); ?>
                        </div>

                        <div class="link__wrap">
                            <a href="<?php the_permalink(); ?>">
                                このカードの詳細を見る
                            </a>
                        </div>

                    </div>
                    <!-- loop -->
                    <?php $i++; endwhile; endif; wp_reset_query(); ?>

                </div>

                <div class="btn__wrap">
                    <a href="<?php echo home_url('/rankingall'); ?>">
                        ランキング一覧へ
                    </a>
                </div>

            </article>


            <!-- 💎💎 SP -->
            <article id="top__ranking__box" class="sp swiper-container">

                <h2 class="title__wrap">
                    総合ランキング
                </h2>

                <div class="top__ranking__wrap swiper-wrapper">

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
                        $urlS = get_field('url-syou');
                        $priceFirst = get_field('price-first');
                        $priceSecond = get_field('price-second');
                        $rankText = "";
                        $starImg = "";
                        $campaignS = get_field('campaign-short');  
                        $rankallNnumber = get_field('rankall-number');
                        $points1 = get_field('points1'); 
                        $points2 = get_field('points2'); 
                        $points3 = get_field('points3'); 
                        $descript = get_field('description');
                        $webp = get_field('img-webp');

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
                    <!-- loop -->
                    <div class="swiper-slide">

                        <div class="top__ranking__item item<?php echo $i; ?>" data-color="<?php echo $i; ?>">

                            <img class="badge rank__<?php echo $i; ?>"
                                src="<?php bloginfo('template_url'); ?>/images/sidebar/ranking/rank__0<?php echo $i; ?>.png"
                                alt="">
                            <img class="badge__bg"
                                src="<?php bloginfo('template_url'); ?>/images/contents/badge__bg.png" alt="">

                            <div class="img__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <picture>
                                        <source type="image/webp" srcset="<?php echo $webp; ?>">
                                        <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
                                    </picture>
                                </a>
                            </div>

                            <div class="title__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>

                            <div class="point__wrap">

                                <div class="row">

                                    <p class="text__left">総合評価</p>
                                    <div class="text__right star__wrap">

                                        <div class="star">
                                            <img src="<?php bloginfo('template_url'); ?><?php echo $starImg ?>" alt="">
                                        </div>

                                    </div>
                                </div>

                                <div class="row">

                                    <p class="text__left">年会費初年度</p>
                                    <div class="text__right">
                                        <?php echo $priceFirst; ?>
                                    </div>

                                </div>

                                <div class="row">

                                    <p class="text__left">年会費2年目～</p>
                                    <div class="text__right">
                                        <?php echo $priceSecond; ?>
                                    </div>

                                </div>

                            </div>

                            <div class="text__wrap">
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="link__wrap">
                                <a href="<?php the_permalink(); ?>">このカードの詳細を見る</a>
                            </div>

                        </div>

                    </div>
                    <!-- loop -->
                    <?php $i++; endwhile; endif; wp_reset_query(); ?>

                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="btn__wrap">
                    <a href="<?php echo home_url('/rankingall'); ?>">
                        ランキング一覧へ
                    </a>
                </div>

            </article>


            <!-- 💎💎 SP -->
            <?php include "components/sp-ranklist.php"; ?>



            <!-- ✨✨ PC -->
            <article id="top__feature__box" class="pc swiper-container-feature">

                <h2 class="title__wrap">
                    お得な特集
                </h2>

                <div class="slide__item__wrap top__feature__wrap swiper-wrapper">

                    <?php wp_reset_postdata();

                    $args = array(
                        'posts_per_page' => '-1',
                        'category_name' => 'feature',
                        'post_type' => 'post',
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
                    ?>
                    <!-- loop -->
                    <div class="swiper-slide">

                        <div class="slide__item top__feature__item item<?php echo $i; ?>">


                            <div class="img__wrap"
                                style="background: url(<?php echo $featureImg; ?>) no-repeat 50% 50%; background-size: cover;">
                                <a href="<?php the_permalink(); ?>">

                                </a>
                            </div>

                            <div class="title__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>

                            <div class="text__wrap">
                                <?php echo the_excerpt(); ?>
                            </div>

                            <div class="link__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    この記事を見る
                                </a>
                            </div>

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


            <!-- 💎💎 SP -->
            <?php include "components/sp-feature.php"; ?>



            <!-- 💎💎 SP -->
            <?php include "components/sp-banner.php"; ?>


        </section>




        <!-- Sidebar -->
        <!-- ✨✨ PC -->
        <?php get_sidebar(); ?>

    </div>

</div>


<?php get_footer() ?>