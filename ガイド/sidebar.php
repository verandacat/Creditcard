<aside id="sidebar__box">

    <h3 class="title">
        総合人気ランキング
    </h3>

    <article class="sidebar__ranking__wrap">

        <ul class="ranking__list">

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
                    $webp = get_field('img-webp');
                    $rankallNnumber = get_field('rankall-number');
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
            <!-- 1位 -->
            <li data-rank="<?php echo $i; ?>">

                <!-- カード共通？ -->
                <img class="badge rank__<?php echo $i; ?>"
                    src="<?php bloginfo('template_url'); ?>/images/sidebar/ranking/rank__0<?php echo $i; ?>.png" alt="">

                <div class="img__wrap">
                    <a href="<?php the_permalink() ?>">
                    <picture>
                        <source type="image/webp" srcset="<?php echo $webp; ?>">
                        <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
                    </picture>
                    </a>
                </div>

                <h4 class="title__text">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h4>

                <div class="text__wrap">

                    <div class="row">

                        <p class="text__left">総合評価</p>

                        <div class="text__right star__wrap">

                            <div class="star">
                                <img src="<?php bloginfo('template_url'); ?><?php echo $starImg ?>" alt="">
                            </div>
                            <span class="number">
                                <?php echo $rankText; ?><span class="ss">点</span>
                            </span>

                        </div>

                    </div>

                    <div class="row">

                        <p class="text__left">年会費初年度</p>

                        <div class="text__right">
                            <?php echo $priceFirst; ?>
                        </div>

                    </div>

                    <div class="row">

                        <p class="text__left">年会費2年目~</p>

                        <div class="text__right">
                            <?php echo $priceSecond; ?>
                        </div>

                    </div>
                </div>

                <div class="link__wrap">
                    <a href="<?php the_permalink() ?>">
                        このカードの詳細を見る
                    </a>
                </div>
            </li>

            <?php $i++; endwhile; endif;  wp_reset_postdata(); ?>

        </ul>

    </article>

    <h3 class="title">
        人気のランキング
    </h3>




    <article class="sidebar__ranklist__wrap">

        <ul class="ranklist__list">

            <!-- <li data-list="2021年人気ランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__01.png" alt="">
                </div>
                <div class="text__wrap">
                    <a href="">
                        2021年人気ランキング
                    </a>
                </div>
            </li> -->

            <li data-list="総合ランキング">

                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/icon__all.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingall'); ?>">
                    <div class="text__wrap">
                        総合ランキング
                    </div>
                </a>
            </li>

            <li data-list="年会費無料ランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/icon__price.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingprice'); ?>">
                    <div class="text__wrap">
                        年会費無料ランキング
                    </div>
                </a>
            </li>

            <li data-list="ポイント還元率ランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/icon__rpoint.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingpoint'); ?>">
                    <div class="text__wrap">
                        ポイント還元率ランキング
                    </div>
                </a>
            </li>

            <li data-list="個人事業主・法人ランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/icon__busi.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingbusiness'); ?>">
                    <div class="text__wrap">
                        個人事業主・法人ランキング
                    </div>
                </a>
            </li>

            <li data-list="ETCカードランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/icon__etc.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingetc'); ?>">
                    <div class="text__wrap">
                        ETCカードランキング
                    </div>
                </a>
            </li>

            <li data-list="ETCカードランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/icon__speed.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingspeed'); ?>">
                    <div class="text__wrap">
                    発行スピードランキング
                    </div>
                </a>
            </li>

            <li data-list="女性用ランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/icon__lady.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankinglady'); ?>">
                    <div class="text__wrap">
                    女性用ランキング
                    </div>
                </a>
            </li>

            <li data-list="学生用ランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/icon__student.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingstudent'); ?>">
                    <div class="text__wrap">
                    学生用ランキング
                    </div>
                </a>
            </li>

            <li data-list="VISAランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__visa.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingvisa'); ?>">
                    <div class="text__wrap">
                    VISAランキング
                    </div>
                </a>
            </li>

            <li data-list="Mastercardランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__master.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingmaster'); ?>">
                    <div class="text__wrap">
                    Mastercardランキング
                    </div>
                </a>
            </li>

            <li data-list="JCBランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__jcb.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingjcb'); ?>">
                    <div class="text__wrap">
                    JCBランキング
                    </div>
                </a>
            </li>

            <li data-list="ゴールドカードランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/gold.jpg" alt="">
                </div>
                <a href="<?php echo home_url('/rankinggold'); ?>">
                    <div class="text__wrap">
                    ゴールドカードランキング
                    </div>
                </a>
            </li>

            <li data-list="マイルが貯まるランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/icon__mil.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingmil'); ?>">
                    <div class="text__wrap">
                    マイルが貯まるランキング
                    </div>
                </a>
            </li>

            <li data-list="ステータスカードランキング">
                <div class="img__wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__status.png" alt="">
                </div>
                <a href="<?php echo home_url('/rankingstatus'); ?>">
                    <div class="text__wrap">
                    ステータスカードランキング
                    </div>
                </a>
            </li>

            <!-- <div class="link__wrap">
                <a href="<?php //echo home_url('/ranking'); ?>">
                    ランキング一覧へ
                </a>
            </div> -->

        </ul>
    </article>

    <h3 class="title">
        特集
    </h3>

    <article class="sidebar__feature__wrap">

        <ul class="feature__list">

            <?php wp_reset_postdata();

                    $args = array(
                        'posts_per_page' => '4',
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
                         $urlS = get_field('url-syou');
                         $featureImg = get_field('feature-img');
                         $featureName = get_field('feature-name');
                         $featureDes = get_field('feature-descript');
                    ?>

            <li data-list="<?php echo $i; ?>">
                <a href="<?php the_permalink(); ?>">
                    <div class="img__wrap"></div>
                    <div class="text__wrap">
                        <div class="text__title"><i class="fas fa-pen-nib"></i> <?php the_title(); ?></div>
                        <div class=" text__description"><?php the_excerpt(); ?></div>
                    </div>
                </a>
            </li>

            <?php $i++; endwhile; endif; wp_reset_query(); ?>

        </ul>

    </article>




    <!-- <article class="sidebar__banner__box" class="pc">
        <a href="">
            <img src="<?php bloginfo('template_url'); ?>/images/qna.jpg" alt="">
        </a>
    </article> -->

</aside>