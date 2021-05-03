<?php get_header(); ?>


<!-- 🌹 検索結果 🌹 -->
<div id="container">


    <?php //include('mobileNav.php'); ?>

    <!-- ✨✨ PC -->
    <?php if(!is_mobile()) : ?>
    <?php include('bread.php'); ?>
    <?php endif; ?>
    <?php if(is_single('mitsui-feature')) : ?>

    <section id="fv__sub__box">

        <div class="img__wrap">
            <picture>
                <?php if(!is_mobile()) : ?>
                <source type="image/webp"
                    srcset="<?php bloginfo('template_url'); ?>/images/feature/feature__mitsui__pc.webp" width="100%">
                <img src="<?php bloginfo('template_url'); ?>/images/feature/feature__mitsui__pc.jpg" alt=""
                    width="100%">
                <?php else : ?>
                <source type="image/webp"
                    srcset="<?php bloginfo('template_url'); ?>/images/feature/feature__mitsui__sp.webp" width="100%">
                <img src="<?php bloginfo('template_url'); ?>/images/feature/feature__mitsui__sp.jpg" alt=""
                    width="100%">
                <?php endif; ?>
            </picture>
        </div>

    </section>

    <?php elseif(is_single('jcb-feature')) : ?>

    <section id="fv__sub__box">

        <div class="img__wrap">
            <picture>
                <?php if(!is_mobile()) : ?>
                <source type="image/webp"
                    srcset="<?php bloginfo('template_url'); ?>/images/feature/feature__jcb__pc.webp" width="100%">
                <img src="<?php bloginfo('template_url'); ?>/images/feature/feature__jcb__pc.jpg" alt="" width="100%">
                <?php else : ?>
                <source type="image/webp"
                    srcset="<?php bloginfo('template_url'); ?>/images/feature/feature__jcb__sp.webp" width="100%">
                <img src="<?php bloginfo('template_url'); ?>/images/feature/feature__jcb__sp.jpg" alt="" width="100%">
                <?php endif; ?>
            </picture>
        </div>

    </section>


    <?php endif; ?>

    <div id="contents__box">



        <section id="section__box">

            <?php
            if (have_posts()) :  
            while (have_posts()) :  
                the_post();
                $featureImg = get_field('feature-img');
                $featureName = get_field('feature-name');
                $image_id = get_post_thumbnail_id ();
                $image_url = wp_get_attachment_image_src ($image_id, true);
                $type = get_field('type');
                $price = get_field('price');
                $brand = get_field('brand');
                $speed = get_field('speed');
                $point1 = get_field('point1');
                $point2 = get_field('point2');
                $emoney = get_field('emoney');
                $insurance = get_field('insurance');  
                $service = get_field('insurance-service');
                $campaign = get_field('campaign-descript');   
                $points1 = get_field('points1'); 
                $points2 = get_field('points2'); 
                $points3 = get_field('points3'); 
                $points4 = get_field('points4'); 
                $points5 = get_field('points5'); 
                $url = get_field('url');
                $priceFirst = get_field('price-first');
                $priceSecond = get_field('price-second');
                $pointKangen = get_field('point-kangen');
                $issueSpeed = get_field('issue-speed');
                $descript = get_field('description');
                $number = get_field('hyouka');
                $star = get_field('star');
                $catch = get_field('catch');
                $touch = get_field('touch'); 
                $banner = get_field('single-banner');
                $review1 = get_field('review1');
                $review2 = get_field('review2');
                $review3 = get_field('review3');
                $review4 = get_field('review4');
                $review5 = get_field('review5');
                $reviews = array($review1, $review2, $review3, $review4, $review5);
                ?>

            <article id="single__box">

                <!-- 詳細ページ -->
                <?php if(is_singular('card')) : ?>

                <div class="single__item__wrap">

                    <div class="title__wrap">
                        <h2><a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr"
                                target="_blank"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="star__wrap">
                        <div class="star"><img src="<?php echo $star; ?>" alt="">
                        </div>

                        <span class="number">
                            <?php echo $number; ?><span class="ss">点</span>
                        </span>


                    </div>



                    <?php if(!empty($banner)) : ?>
                    <div class="banner__wrap">
                        <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank"><img
                                src="<?php echo $banner; ?>" alt="">
                        </a>
                    </div>
                    <?php endif; ?>



                    <div class="catch__wrap">
                        <?php echo $catch ; ?>
                    </div>

                    <div class="info__wrap">
                        <ul>
                            <li><i class="fas fa-check-square"></i><?php echo $points1; ?></li>
                            <li><i class="fas fa-check-square"></i><?php echo $points2; ?></li>
                            <li><i class="fas fa-check-square"></i><?php echo $points3; ?></li>
                            <?php if(!empty($points4)) : ?>
                            <li><i class="fas fa-check-square"></i><?php echo $points4; ?></li>
                            <?php endif; ?>
                            <?php if(!empty($points5)) : ?>
                            <li><i class="fas fa-check-square"></i><?php echo $points5; ?></li>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <div class="flex__wrap">

                        <div class="image__wrap">
                            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                                <img src="<?php echo $image_url[0] ?>" alt="">
                            </a>
                        </div>

                        <div class="price1__wrap price__wrap">
                            <div class="price__title">年会費（初年度）</div>
                            <div class="price__des">
                                <?php echo $priceFirst; ?>
                            </div>
                        </div>

                        <div class="price2__wrap price__wrap">
                            <div class="price__title">年会費（2年目~）</div>
                            <div class="price__des">
                                <?php echo $priceSecond; ?>
                            </div>
                        </div>

                    </div>

                    <div class="icon__wrap">
                        <?php if(is_mobile()) : ?>
                        <div class="icon__item sp">
                            <div class="title__wrap">年会費（初年度）</div>
                            <div class="image__wrap"> <?php echo $priceFirst; ?></div>
                        </div>
                        <div class="icon__item sp">
                            <div class="title__wrap">年会費（2年度～）</div>
                            <div class="image__wrap"> <?php echo $priceSecond; ?></div>
                        </div>
                        <?php endif; ?>
                        <div class="icon__item">
                            <div class="title__wrap">国際ブランド</div>
                            <div class="image__wrap">
                                <div class="brand__box">
                                    <?php foreach ($brand as $b) : ?>
                                    <?php if(!is_mobile()) : ?>
                                    <?php if($b == "VISA") {
                                    $b = "/images/contents/brand__visa.png";
                                    }elseif($b == "Mastercard") {
                                        $b = "/images/contents/brand__master.png";
                                    }elseif($b == "JCB") {
                                        $b = "/images/contents/brand__jcb.png";
                                    }elseif($b == "American Express") {
                                        $b = "/images/contents/brand__american.png";
                                    }
                                ?>
                                    <?php else :?>
                                    <?php if($b == "VISA") {
                                    $b = "/images/contents/brand__visa.jpg";
                                    }elseif($b == "Mastercard") {
                                        $b = "/images/contents/brand__master.jpg";
                                    }elseif($b == "JCB") {
                                        $b = "/images/contents/brand__jcb.jpg";
                                    }elseif($b == "American Express") {
                                        $b = "/images/contents/brand__american.jpg";
                                    }
                                ?>
                                    <?php endif; ?>
                                    <img class="brand__icon" src="<?php bloginfo('template_url'); ?><?php echo $b; ?>"
                                        alt="">

                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="icon__item">
                            <div class="title__wrap">対応電子マネー</div>
                            <div class="image__wrap">
                                <div class="emoney__box">
                                    <?php foreach ($emoney as $e) : ?>
                                    <?php if(!is_mobile()) : ?>
                                    <?php 
                                    if($e == "Suica") {
                                        $e = "/images/icons/suica.png";
                                        
                                    }elseif($e == "PASMO") {
                                        $e = "/images/icons/pasmo.png";
                                        
                                    }elseif($e == "QUICPay") {
                                        $e = "/images/icons/quic.png";
                                        
                                    }elseif($e == "iD") {
                                        $e = "/images/icons/id.png";
                                        
                                    }elseif($e == "楽天Edy") {
                                        $e = "/images/icons/edy.png";
                                        
                                    }elseif($e == "nanaco") {
                                        $e = "/images/icons/nanaco.png";
                                        
                                    }elseif($e == "WAON") {
                                        $e = "/images/icons/waon.png";
                                        
                                    }elseif($e == "Apple Pay") {
                                        $e = "/images/icons/apple.png";
                                        
                                    }elseif($e == "Google Pay") {
                                        $e = "/images/icons/gpay.png";
                                        
                                    } ?>
                                    <?php else: ?>
                                    <?php 
                                    if($e == "Suica") {
                                        $e = "/images/icons/suica.jpg";
                                        
                                    }elseif($e == "PASMO") {
                                        $e = "/images/icons/pasmo.jpg";
                                        
                                    }elseif($e == "QUICPay") {
                                        $e = "/images/icons/quic.jpg";
                                        
                                    }elseif($e == "iD") {
                                        $e = "/images/icons/id.jpg";
                                        
                                    }elseif($e == "楽天Edy") {
                                        $e = "/images/icons/edy.jpg";
                                        
                                    }elseif($e == "nanaco") {
                                        $e = "/images/icons/nanaco.jpg";
                                        
                                    }elseif($e == "WAON") {
                                        $e = "/images/icons/waon.jpg";
                                        
                                    }elseif($e == "Apple Pay") {
                                        $e = "/images/icons/apple.jpg";
                                        
                                    }elseif($e == "Google Pay") {
                                        $e = "/images/icons/gpay.jpg";
                                        
                                    } ?>
                                    <?php endif; ?>
                                    <img class="emoney__icon" src="<?php bloginfo('template_url'); ?><?php echo $e; ?>"
                                        alt="">

                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                        <div class="icon__item">

                            <div class="title__wrap">ポイント還元率</div>
                            <div class="image__wrap"><?php 
                                        if($point1 == 0) {
                                            echo "0.5%以上";
                                        }elseif($point1 == 1) {
                                            echo "1.0%以上";
                                        }elseif($point1==2) {
                                            echo "2.0%以上";
                                        }else {
                                            echo $point1;
                                        }
                                        ?></div>

                        </div>

                        <div class="icon__item">
                            <div class="title__wrap">発行スピード</div>
                            <div class="image__wrap"> <?php echo $speed; ?></div>
                        </div>


                    </div>

                    <div class="flex__wrap single__insurance" style="margin-top:5px">
                        <div class="hutai__wrap">
                            <h3>付帯保険</h3>
                            <ul class="insurance__list">
                                <?php 
                            $insuranceList = array("国内旅行保険", "海外旅行保険");
                            $insuranceInter = array_intersect($insuranceList, $insurance);
                            $insuranceDiff = array_diff($insuranceList, $insurance);
                            foreach ($insuranceInter as $in) {
                                if($in == "国内旅行保険") {
                                    $in = "国内旅行";
                                } elseif($in == "海外旅行保険") {
                                    $in = "海外旅行";
                                } 
                                echo '<li>'.$in.'</li>';
                            }
                            foreach ($insuranceDiff as $in) {
                                if($in == "国内旅行保険") {
                                    $in = "国内旅行";
                                } elseif($in == "海外旅行保険") {
                                    $in = "海外旅行";
                                } 
                                echo '<li class="grey">'.$in.'</li>';
                            }
                        ?>
                            </ul>
                        </div>
                        <div class="service__wrap">
                            <h3>付帯サービス</h3>
                            <ul class="service__list">
                                <?php 
                            $serviceList = array("家族カード", "分割払い", "ETC");
                            
                            if(!empty($service)) {
                                $serviceInter = array_intersect($serviceList, $service);
                            $serviceDiff = array_diff($serviceList, $service);
                                foreach ($serviceInter as $val) {
                                    echo '<li>'.$val.'</li>';
                                }
                                foreach ($serviceDiff as $val) {
                                    echo '<li class="grey">'.$val.'</li>';
                                }
                                
                            } else {
                                foreach ($serviceList as $val) {
                                    echo '<li class="grey">'.$val.'</li>';
                                }
                            }
                            
                        ?>
                            </ul>
                        </div>
                        <div class="touch__wrap">
                            <h3>タッチ決済</h3>
                            <ul class="touch__list">
                                <?php 
                            $touchList = array("あり");
                            
                            if(!empty($touch)) {
                                foreach ($touch as $val) {
                                    echo '<li>'.$val.'</li>';
                                }
                            } else {
                                echo '<li class="grey">あり</li>';
                            }
                        ?>
                            </ul>
                        </div>
                    </div>


                    <?php if(!empty($campaign)) : ?>
                    <div class="campaign__wrap">

                        <div class="campaign__title"><i class="fas fa-flag"></i>キャンペーン</div>
                        <ul class="campaign__descript">
                            <?php echo $campaign; ?>
                        </ul>

                    </div>
                    <?php endif; ?>

                    <div class="result__button__wrap">

                        <div class="koushiki__wrap">
                            <p class="koushiki__text">＼ 最短5分で申込完了 ／</p>
                            <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                                target="_blank">公式サイトでお得に申し込む
                            </a>
                        </div>

                    </div>

                    <?php if(!empty($review1)) : ?>

                    <div class="review__box">
                        <?php if(is_mobile()) : ?>
                        <h3 class="review__title"><?php the_title(); ?><br>最新の口コミ<i class="fas fa-comment-dots"></i>
                        </h3>
                        <?php else : ?>
                        <h3 class="review__title"><?php the_title(); ?>最新の口コミ<i class="fas fa-comment-dots"></i></h3>
                        <?php endif; ?>
                        <?php $i = 0; foreach ($reviews as $r) { ?>
                        <?php $i++ ; ?>
                        <?php if(!empty($r)) : ?>
                        <div class="review" id="review<?php echo $i; ?>">
                            <?php echo $r; ?>
                        </div>
                        <?php endif; ?>
                        <?php } ?>
                    </div>
                    <?php endif; ?>

                </div>
                <?php else : ?>

                <!-- 特集 -->


                <?php if(!(is_single('mitsui-feature') || is_single('jcb-feature'))) : ?>
                <div class="title__wrap">
                    <h2><?php echo the_title(); ?></h2>
                </div>
                <?php endif; ?>



                <div class="content__wrap">
                    <?php if(is_single('mitsui-feature')) : ?>
                    <?php include ('features/f_mitsui.php') ?>
                    <?php elseif(is_single('jcb-feature')) : ?>
                    <?php include ('features/f_jcb.php') ?>
                    <?php else : ?>
                    <?php the_content(); ?>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </article>

            <?php endwhile; 
                else:
                endif; 
                ?>



            <?php if(!is_mobile()) : ?>
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
            ?>
                    <!-- loop -->
                    <div class="swiper-slide">
                        <div class="slide__item item<?php echo $i; ?>">
                            <div class="img__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo $image_url[0]; ?>" alt="">
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

            <?php endif; ?>

            <!-- 💎💎 SP -->
            <?php include 'components/sp-ranklist.php'; ?>



            <!-- 💎💎 SP -->
            <?php include 'components/sp-feature.php'; ?>



            <!-- 💎💎 SP -->
            <?php include 'components/sp-banner.php'; ?>


            <div style="margin-top: 30px">
                <?php get_search_form(); ?>

            </div>

        </section>

        <?php get_sidebar(); ?>

    </div>

</div>



<?php get_footer(); ?>