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
$service = get_field('insurance-service');
$touch = get_field('touch');
$campaign = get_field('campaign-descript');   
$points1 = get_field('points1'); 
$points2 = get_field('points2'); 
$points3 = get_field('points3'); 
$points4 = get_field('points4'); 
$points5 = get_field('points5'); 
$url = get_field('url');
$furl = get_field('furl');
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

<?php if(is_page('rankingall')) : ?>
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

    <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/medal_<?php echo $i; ?>.webp" class="medal">
        <img src="<?php bloginfo('template_url'); ?>/images/medal_<?php echo $i; ?>.png" alt="" class="medal">
    </picture>

    <h2 class="title__wrap">
        <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
            <?php the_title(); ?>
        </a>

        <div class="right__sub__title">
            <div class="star__wrap">
                <div class="star"><img src="<?php bloginfo('template_url'); ?><?php echo $starImg ?>" alt=""></div>
                <span class="number">
                    <?php echo $rankText; ?><span class="ss">点</span>
                </span>

                <?php if(!empty($review1)) : ?>
                <span class="review__link js__review__link"><i class="fas fa-sort-down"></i>口コミ</span>
                <?php endif; ?>
            </div>
        </div>
    </h2>

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

    <div class="flex__wrap">
        <!-- <div class="bar"></div> -->
        <div class="item__left">
            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                <picture>
                    <source type="image/webp" srcset="<?php echo $webp; ?>">
                    <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
                </picture>
            </a>
            
        </div>

        <div class="item__right">
            
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

            <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                target="_blank">申し込みはこちら
            </a>


        </div>

    </div>


    <div class="contents__wrap">
        <?php include 'pc-points.php'; ?>

        <div class="flex__wrap">
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
            <span class="campaign__title">限定キャンペーン</span>
            <ul class="campaign__descript">
                <?php echo $campaign; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>


    <div class="result__button__wrap">

        <div class="search__button">

            <?php if($_GET['f']=="on") : ?>
            <div class="koushiki__wrap">
                <p class="koushiki__text">＼ 最短5分で申込完了 ／</p>
                <a class="koushiki__btn prrrr" style="margin:0 auto" href="<?php echo home_url('/'); ?><?php echo $furl; ?>"
                target="_blank">公式サイトでお得に申し込む</a>
            </div>
            
            <?php else : ?>
            
            
            <?php //if($post->ID == 13): ?>
                <!-- <a class="syousai__btn h56" href="<?php the_permalink(); ?>">詳細を見る</a>
                <div class="koushiki__wrap">
                    <a class="prrrr" style="margin:0 auto" href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                    target="_blank"> <img src="<?php bloginfo('template_url'); ?>/images/number/btn-1.jpg" alt="" width="100%"></a>
                </div>-->
            <?php //else : ?> 
                <a class="syousai__btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                <div class="koushiki__wrap">
                    <p class="koushiki__text">＼ 最短5分で申込完了 ／</p>
                    <a class="koushiki__btn prrrr" style="margin:0 auto" href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                    target="_blank">公式サイトでお得に申し込む</a>
                </div>
            
            <?php //endif; ?>
            <?php endif; ?>
        </div>

    </div>

    <?php if(is_page('rankingall')) : ?>
    <?php if($_GET['f'] == 'on') : ?>
    <div class="facebook__tag">

        <div class="flex__box">
            <div class="name">
                <span class="bold">会社名</span><span><?php echo $fName; ?></span>
            </div>

            <div class="add">
                <span class="bold">住所</span><span><?php echo $fAdd; ?></span>
            </div>

            <?php if(!empty($fTel)) : ?>
            <div class="tel">
                <span class="bold">電話番号</span><span><?php echo $fTel; ?></span>
            </div>
            <?php endif; ?>
        </div>

        <?php if(!empty($fRevo)) : ?>
        <div class="revo">
            <span class="bold">リボ手数料</span><span><?php echo $fRevo; ?></span>
        </div>
        <?php endif; ?>

    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>
<!-- loop end -->

<?php $i++; endwhile; endif; wp_reset_query(); ?>


<?php if(is_page("rankingall")) : ?>
        
<?php include "ranking-pickup.php" ?>

<?php endif; ?>