<?php wp_reset_postdata();

include 'args.php';

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
$touch = get_field('touch'); 
$points1 = get_field('points1'); 
$points2 = get_field('points2'); 
$points3 = get_field('points3'); 
$points4 = get_field('points4');
$points5 = get_field('points5');
$url = get_field('url');
$furl = get_field('furl');
$furlS = get_field('furl-s');
$urlEtc = get_field('url_etc');
$urlSpeed = get_field('url_speed');
$urlStu = get_field('url_student');
$rankText = "";
$starImg = "";
$priceFirst = get_field('price-first');
$priceSecond = get_field('price-second');
$pointKangen = get_field('point-kangen');
$issueSpeed = get_field('issue-speed');
$descript = get_field('description');
$fName = get_field('f-name');
$fAdd = get_field('f-add');
$fTel = get_field('f-tel');
$fRevo = get_field('f-revo');
$catch = get_field('catch');
$etcCatch = get_field('etc-catch');
$webp = get_field('img-webp');
$review1 = get_field('review1');
$review2 = get_field('review2');
$review3 = get_field('review3');
$review4 = get_field('review4');
$review5 = get_field('review5');
$reviews = array($review1, $review2, $review3, $review4, $review5);
?>

<?php if(is_page('rankingall') || is_page('mitsui-numle-l')) : ?>
<?php $ex = get_field('rankall-number'); ?>
<?php elseif(is_page('rankingprice')) : ?>
<?php $ex = get_field('rankprice-number'); ?>
<?php elseif(is_page('rankingpoint')) : ?>
<?php $ex = get_field('rankpoint-number'); ?>
<?php elseif(is_page('rankingbusiness')) : ?>
<?php $ex = get_field('rankbusiness-number'); ?>
<?php elseif(is_page('rankingetc')) : ?>
<?php $ex = get_field('ranketc-number'); ?>
<?php elseif(is_page('rankingspeed')) : ?>
<?php $ex = get_field('rankspeed-number'); ?>
<?php elseif(is_page('rankinglady')) : ?>
<?php $ex = get_field('ranklady-number'); ?>
<?php elseif(is_page('rankingstudent')) : ?>
<?php $ex = get_field('rankstudent-number'); ?>
<?php elseif(is_page('rankingvisa')) : ?>
<?php $ex = get_field('rankvisa-number'); ?>
<?php elseif(is_page('rankingmaster')) : ?>
<?php $ex = get_field('rankmaster-number'); ?>
<?php elseif(is_page('rankingjcb')) : ?>
<?php $ex = get_field('rankjcb-number'); ?>
<?php elseif(is_page('rankinggold')) : ?>
<?php $ex = get_field('rankgold-number'); ?>
<?php elseif(is_page('rankingmil')) : ?>
<?php $ex = get_field('rankmil-number'); ?>
<?php elseif(is_page('rankingsyuhu')) : ?>
<?php $ex = get_field('ranksyuhu-number'); ?>
<?php elseif(is_page('rankingstatus')) : ?>
<?php $ex = get_field('rankstatus-number'); ?>
<?php endif; ?>

<?php
if($i == 1) {
    $rankText = "4.9";
    $starImg = "/images/ranking/star-1.png";
} elseif($i==2) {
    $rankText = "4.8";
    $starImg = "/images/ranking/star-1.png";
} elseif($i==3) {
    $rankText = "4.7";
    $starImg = "/images/ranking/star-2.png";
} elseif($i==4) {
    $rankText = "4.5";
    $starImg = "/images/ranking/star-2.png";
} elseif($i==5) {
    $rankText = "4.4";
    $starImg = "/images/ranking/star-2.png";
} elseif($i==6) {
    $rankText = "4.2";
    $starImg = "/images/ranking/star-3.png";
} elseif($i==7) {
    $rankText = "4.1";
    $starImg = "/images/ranking/star-3.png";
} elseif($i==8) {
    $rankText = "4.0";
    $starImg = "/images/ranking/star-3.png";
} elseif($i==9) {
    $rankText = "3.9";
    $starImg = "/images/ranking/star-3.png";
} elseif($i==10) {
    $rankText = "3.8";
    $starImg = "/images/ranking/star-3.png";
} elseif($i==11) {
    $rankText = "3.6";
    $starImg = "/images/ranking/star-4.png";
} elseif($i==12) {
    $rankText = "3.5";
    $starImg = "/images/ranking/star-4.png";
} else {
    $rankText = "3.0";
    $starImg = "/images/ranking/star-5.png";
}
?>
<!-- loop -->
<div class="ranking__sub__item__wrap rank<?php echo $i; ?>">

    <div class="title__wrap">
        <h3>
         <?php if($_GET['f'] == 'on') : ?>
            <?php if(is_page('rankingspeed')) : ?>
                <a href="<?php echo home_url('/'); ?><?php echo $furlS; ?>" class="prrrr"
                    target="_blank"><?php the_title(); ?>
                </a>
            <?php else : ?>
                <a href="<?php echo home_url('/'); ?><?php echo $furl; ?>" class="prrrr"
                    target="_blank"><?php the_title(); ?>
                </a>
            <?php endif; ?>
        <?php else : ?>
            <?php if(is_page('rankingetc')) : ?>
                <?php if(!empty($urlEtc)) : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $urlEtc; ?>" class="prrrr" target="_blank">
                <?php else : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                <?php endif; ?>
            <?php elseif(is_page('rankingspeed')) : ?>
                <?php if(!empty($urlSpeed)) : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $urlSpeed; ?>" class="prrrr" target="_blank">
                <?php else : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                <?php endif; ?>
            <?php elseif(is_page('rankingstudent')) : ?>    
                <?php if(!empty($urlStu)) : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $urlStu; ?>" class="prrrr" target="_blank">
                <?php else : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                <?php endif; ?>
            <?php else : ?>
                <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
            <?php endif; ?>
                <?php the_title(); ?>
                </a>
        <?php endif; ?>

        </h3>
        <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/medal_<?php echo $i; ?>.webp" class="medal">
            <img src="<?php bloginfo('template_url'); ?>/images/medal_<?php echo $i; ?>.png" alt="" class="medal">
        </picture>
        
    </div>

    <div class="star__wrap">
        <div class="star"><img src="<?php bloginfo('template_url'); ?><?php echo $starImg ?>" alt=""></div>
        <span class=" number">
            <?php echo $rankText; ?><span class="ss">???</span>
            </span>
            <?php if(!empty($review1)) : ?>
                <span class="review__link js__review__link"><i class="fas fa-sort-down"></i>?????????</span>
             <?php endif; ?>
        </div>

        <?php if(!empty($review1)) : ?>
        <div class="review__box js__review">
        <?php $k = 0; foreach ($reviews as $r) { ?>
        <?php $k++ ; ?>
        <?php if(!empty($r)) : ?>
        <div class="review" id="review<?php echo $k; ?>">
            <?php echo $r; ?>
        </div>
        <?php endif; ?>

        <?php } ?>
        </div>
        <?php endif; ?>

        <?php if(is_page('rankingetc')) : ?>
            <?php if(!empty($etcCatch)) : ?>
            <div class="catch__wrap">
                <?php echo $etcCatch; ?>
            </div>
            <?php endif; ?>
        <?php else : ?>
            <div class="catch__wrap">
                <?php echo $catch ; ?>
            </div>
        <?php endif; ?>


        <div class="img__wrap">
        <?php if($_GET['f'] == 'on') : ?>
            <?php if(is_page('rankingspeed')) : ?>
                <a href="<?php echo home_url('/'); ?><?php echo $furlS; ?>" class="prrrr" target="_blank">
                <picture>
                    <source type="image/webp" srcset="<?php echo $webp; ?>">
                    <img src="<?php echo $image_url[0]; ?>" alt="">
                </picture>    
            
                </a>
                <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $furlS; ?>" target="_blank">????????????????????????</a>
            <?php else : ?>
                <a href="<?php echo home_url('/'); ?><?php echo $furl; ?>" class="prrrr" target="_blank">
                    <picture>
                        <source type="image/webp" srcset="<?php echo $webp; ?>">
                        <img src="<?php echo $image_url[0]; ?>" alt="">
                    </picture>    
                </a>
                <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $furl; ?>" target="_blank">????????????????????????</a>
            <?php endif; ?>

        <?php else : ?>

            <?php if(is_page('rankingetc')) : ?>
                <?php if(!empty($urlEtc)) : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $urlEtc; ?>" class="prrrr" target="_blank">
                        <picture>
                            <source type="image/webp" srcset="<?php echo $webp; ?>">
                            <img src="<?php echo $image_url[0]; ?>" alt="">
                        </picture> 
                    </a>
                    <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $urlEtc; ?>" target="_blank">????????????????????????</a>
                <?php else : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                        <picture>
                            <source type="image/webp" srcset="<?php echo $webp; ?>">
                            <img src="<?php echo $image_url[0]; ?>" alt="">
                        </picture> 
                    </a>
                    <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">????????????????????????</a>
                <?php endif; ?>
                        
            <?php elseif(is_page('rankingspeed')) : ?>
                <?php if(!empty($urlSpeed)) : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $urlSpeed; ?>" class="prrrr" target="_blank">
                        <picture>
                            <source type="image/webp" srcset="<?php echo $webp; ?>">
                            <img src="<?php echo $image_url[0]; ?>" alt="">
                        </picture> 
                    </a>
                    <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $urlSpeed; ?>" target="_blank">????????????????????????</a>
                <?php else : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                        <picture>
                            <source type="image/webp" srcset="<?php echo $webp; ?>">
                            <img src="<?php echo $image_url[0]; ?>" alt="">
                        </picture> 
                    </a>
                    <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">????????????????????????</a>
                <?php endif; ?>
            <?php elseif(is_page('rankingstudent')) : ?>    
                <?php if(!empty($urlStu)) : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $urlStu; ?>" class="prrrr" target="_blank">
                        <picture>
                            <source type="image/webp" srcset="<?php echo $webp; ?>">
                            <img src="<?php echo $image_url[0]; ?>" alt="">
                        </picture> 
                    </a>
                    <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $urlStu; ?>" target="_blank">????????????????????????</a>
                <?php else : ?>
                    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                        <picture>
                            <source type="image/webp" srcset="<?php echo $webp; ?>">
                            <img src="<?php echo $image_url[0]; ?>" alt="">
                        </picture> 
                    </a>
                    <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">????????????????????????</a>
                <?php endif; ?>
            <?php else : ?>
                <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                    <picture>
                        <source type="image/webp" srcset="<?php echo $webp; ?>">
                        <img src="<?php echo $image_url[0]; ?>" alt="">
                    </picture> 
                </a>
                <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                    target="_blank">????????????????????????</a>
            <?php endif; ?>
        <?php endif; ?>
        </div>



        <div class="info__wrap">
            <ul>
                <li><?php echo $points1; ?></li>
                <li><?php echo $points2; ?></li>
                <li><?php echo $points3; ?></li>
                <?php if(!empty($points4)) : ?>
                <li><?php echo $points4; ?></li>
                <?php endif; ?>
                <?php if(!empty($points5)) : ?>
                <li><?php echo $points5; ?></li>
                <?php endif; ?>
            </ul>
        </div>

        <?php include 'sp-points.php'; ?>

        <div class="flex__wrap ranking__insurance" style="padding: 5px 10px 0">
            <div class="hutai__wrap">
                <h3>????????????</h3>
                <ul class="insurance__list">
                    <?php 
                            $insuranceList = array("??????????????????", "??????????????????");
                            $insuranceInter = array_intersect($insuranceList, $insurance);
                            $insuranceDiff = array_diff($insuranceList, $insurance);
                            foreach ($insuranceInter as $in) {
                                if($in == "??????????????????") {
                                    $in = "????????????";
                                } elseif($in == "??????????????????") {
                                    $in = "????????????";
                                } 
                                echo '<li>'.$in.'</li>';
                            }
                            foreach ($insuranceDiff as $in) {
                                if($in == "??????????????????") {
                                    $in = "????????????";
                                } elseif($in == "??????????????????") {
                                    $in = "????????????";
                                } 
                                echo '<li class="grey">'.$in.'</li>';
                            }
                        ?>
                </ul>
            </div>
            <div class="service__wrap">
                <h3>??????????????????</h3>
                <ul class="service__list">
                    <?php 
                            $serviceList = array("???????????????", "????????????", "ETC");
                            
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
                <h3>???????????????</h3>
                <ul class="touch__list">
                    <?php 
                            $touchList = array("??????");
                            
                            if(!empty($touch)) {
                                foreach ($touch as $val) {
                                    echo '<li>'.$val.'</li>';
                                }
                            } else {
                                echo '<li class="grey">??????</li>';
                            }
                        ?>
                </ul>
            </div>
        </div>

        <?php if(!empty($campaign)) : ?>
        <div class="campaign__wrap">

            <div class="cam__title">
                <p>??????</p>
                <small>??????????????????</small>
                <!-- <div class="date">~12???31???</div> -->
            </div>

            <ul class="cam__text">
                <?php echo $campaign; ?>
            </ul>

        </div>
        <?php endif; ?>
        <div class="result__button__wrap">

            <div class="search__button">

                <div class="koushiki__wrap">
                   
                    <p class="koushiki__text">?????????5?????????????????????</p>

                    <?php if($_GET['f'] == 'on') : ?>
                        <?php if(is_page('rankingspeed')) : ?>
                        <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $furlS; ?>"
                            target="_blank">???????????????????????????????????????
                        </a>
                        <?php else : ?>
                        <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $furl; ?>"
                            target="_blank">???????????????????????????????????????
                        </a>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php if(is_page('rankingetc')) : ?>
                            <?php if(!empty($urlEtc)) : ?>
                                <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $urlEtc; ?>" target="_blank">
                            <?php else : ?>
                                <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">
                            <?php endif; ?>
                            ???????????????????????????????????????
                        </a>
                        <?php elseif(is_page('rankingspeed')) : ?>
                            <?php if(!empty($urlSpeed)) : ?>
                                <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $urlSpeed; ?>" target="_blank">
                            <?php else : ?>
                                <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" arget="_blank">
                            <?php endif; ?>
                            ???????????????????????????????????????
                        </a>
                        <?php elseif(is_page('rankingstudent')) : ?>    
                            <?php if(!empty($urlStu)) : ?>
                                <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $urlStu; ?>" target="_blank">
                            <?php else : ?>
                                <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">
                            <?php endif; ?>
                            ???????????????????????????????????????
                        </a>
                        <?php else : ?>
                            <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">   
                                ???????????????????????????????????????
                            </a>       
                        <?php endif; ?>
                       
                    <?php endif; ?>

                </div>

                <?php if(!$_GET['f'] == 'on') : ?>
                <a class="syousai__btn" href="<?php the_permalink(); ?>">???????????????</a>
                <?php endif; ?>
            </div>

        </div>

        <?php if(!empty($fName)) : ?>
        <?php if(is_page('rankingall') || is_page('rankingspeed')) : ?>
        <?php if($_GET['f'] == 'on') : ?>
        <div class="facebook__tag">
            <div class="name">
                <span class="bold">?????????</span><span><?php echo $fName; ?></span>
            </div>

            <div class="add">
                <span class="bold">??????</span><span><?php echo $fAdd; ?></span>
            </div>

            <?php if(!empty($fTel)) : ?>
            <div class="tel">
                <span class="bold">????????????</span><span><?php echo $fTel; ?></span>
            </div>
            <?php endif; ?>

            <?php if(!empty($fRevo)) : ?>
            <div class="revo">
                <span class="bold">???????????????</span><span><?php echo $fRevo; ?></span>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php endif; ?>

    </div>
    <!-- loop -->

    <?php $i++; endwhile; endif; wp_reset_query(); ?>


    <?php if(is_page("rankingall")) : ?>

    <?php include "ranking-pickup.php" ?>

    <?php endif; ?>