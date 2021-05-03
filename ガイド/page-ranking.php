<?php

get_header();
?>


<!-- 🌹 ランキング一覧 🌹 -->
<div id="container">


    <?php include('mobileNav.php'); ?>


    <!-- ✨✨ PC -->
    <?php include('bread.php'); ?>



    <!-- ✨💎 PC/SP -->
    <section id="page__title__box" class="pc">

        <h2>ランキング</h2>

    </section>



    <!-- ✨💎 PC/SP -->
    <div id="contents__box">

        <!-- 🌹 Main Contents🌹 -->

        <section id="section__box">

            <!-- 総合ランキング -->

            <article id="ranking__title__box">
                <h3>総合ランキング</h3>
            </article>

            <?php if(!is_mobile()) : ?>

            <!-- ✨✨ PC -->
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
                                target="_blank">申し込みはこちら</a>
                            <a href="<?php the_permalink(); ?>" class="syousai__btn">詳細を見る</a>

                        </div>

                    </div>
                    <?php $i++; endwhile; endif; wp_reset_query(); ?>

                </div>


                <a href="<?php echo home_url('/rankingall'); ?>" class="link__wrap">
                    総合ランキング一覧へ
                </a>

            </article>


            <?php else : ?>

            <!-- 💎💎 SP -->
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

                                    <h4>総合満足度</h4>
                                    <div class="star__wrap">

                                        <div class="star"><img
                                                src="<?php bloginfo('template_url'); ?><?php echo $starImg ?>" alt="">
                                        </div>

                                        <span class="number">
                                            <?php echo $rankText; ?>
                                        </span>

                                    </div>

                                    <!-- <div class="review__btn">

                                        <a href="">口コミを見る</a>
                                    </div> -->

                                </div>

                            </div>

                        </div>

                        <!-- 口コミ -->
                        <div class="review__wrap" style="display:none"></div>

                        <div class="ranking__item__middle">
                            <div class="points__wrap">
                                <h4>おすすめする3つのポイント</h4>
                                <ul class="points__list">
                                    <li><?php echo $points1; ?></li>
                                    <li><?php echo $points2; ?></li>
                                    <li><?php echo $points3; ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ranking__item__bottom">
                            <div class="date__wrap">キャンペーン実施中！</div>
                            <div class="btn__wrap__sp">
                                <a class="koushiki__btn" href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                                    公式サイトを見る
                                    
                                </a>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="syousai__btn">
                                詳細を見る
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
                    <span>総合ランキングをもっと見る</span>

                </a>
            </article>





            <!-- 💎💎 SP -->
            <?php include ("components/sp-feature.php"); ?>




            <!-- 💎💎 SP -->
            <?php include ("components/sp-banner.php"); ?>

            <?php endif; ?>

            <article id="ranking__ninki__box">

                <h3 class="pc">人気ランキング</h3>
                <h3 class="sp">人気ランキングから探す</h3>

                <ul class="ranking__ninki__list__wrap">

                    <!-- <li><a href="">2021年人気ランキング</a></li> -->
                    <li><a data-name="all" href="<?php echo home_url('/rankingall'); ?>">総合ランキング</a></li>
                    <li><a data-name="price" href="<?php echo home_url('/rankingprice'); ?>">年会費無料ランキング</a></li>
                    <li><a data-name="point" href="<?php echo home_url('/rankingpoint'); ?>">ポイント還元率ランキング</a></li>
                    <!-- <li><a href="">マイルが貯まるランキング</a></li> -->
                    <!-- <li><a href="">ステータスカードランキング</a></li> -->
                    <li><a data-name="speed" href="<?php echo home_url('/rankingspeed'); ?>">発行スピードランキング</a></li>
                    <li><a data-name="etc" href="<?php echo home_url('/rankingetc'); ?>">ETCカードランキング</a></li>
                    <li><a data-name="business" href="<?php echo home_url('/rankingbusiness'); ?>">個人事業主・法人ランキング</a>
                    </li>

                </ul>

            </article>

        </section>





        <!-- Sidebar -->
        <!-- ✨✨ PC -->
        <?php get_sidebar(); ?>

    </div>

</div>



<?php get_footer(); ?>